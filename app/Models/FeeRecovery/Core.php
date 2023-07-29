<?php

namespace RZP\Models\FeeRecovery;

use Carbon\Carbon;

use RZP\Jobs;
use RZP\Exception;
use RZP\Models\Base;
use RZP\Models\Payout;
use RZP\Models\Contact;
use RZP\Error\ErrorCode;
use RZP\Models\Reversal;
use RZP\Trace\TraceCode;
use RZP\Models\Merchant;
use RZP\Constants\Timezone;
use RZP\Models\Schedule\Task;
use RZP\Models\BankingAccount;
use RZP\Models\Merchant\Balance;
use RZP\Models\Currency\Currency;
use RZP\Models\Settlement\Channel;
use RZP\Exception\BadRequestException;
use RZP\Models\Transaction\CreditType;
use RZP\Models\Settlement\SlackNotification;

class Core extends Base\Core
{
    public function __construct()
    {
        parent::__construct();

        $this->mutex = $this->app['api.mutex'];
    }

    /**
     * Creates an entry into the fee_recovery table corresponding to a Payout/Reversal.
     * This function gets invoked at payout initiation and reversal creation.
     *
     * @param Base\PublicEntity $entity
     *
     */
    public function createFeeRecoveryEntityForSource(Base\PublicEntity $entity)
    {
        $this->mutex->acquireAndRelease(
            'fee_recovery_' . $entity->getId(),
            function () use ($entity)
            {
                $feeRecoveryEntity = (new Entity)->build();

                Validator::validateSourceEntity($entity);

                $type = (new Type)->getTypeFromSourceEntity($entity);

                $feeRecoveryEntity->setType($type);

                $feeRecoveryEntity->setStatus(Status::UNRECOVERED);

                $feeRecoveryEntity->entity()->associate($entity);

                $skipCreation = $this->skipIfExistingFeeRecoveryDataExists($feeRecoveryEntity);

                if ($skipCreation === true)
                {
                    return;
                }

                $this->repo->saveOrFail($feeRecoveryEntity);

                $this->trace->info(
                    TraceCode::FEE_RECOVERY_ENTITY_CREATED,
                    [
                        'source_id'       => $entity->getId(),
                        'source_type'     => $entity->getEntityName(),
                        'fee_recovery_id' => $feeRecoveryEntity->getId()
                    ]);
            },
            60,
            ErrorCode::BAD_REQUEST_FEE_RECOVERY_ANOTHER_OPERATION_IN_PROGRESS);
    }

    public function manuallyCreateFeeRecoveryEntityForPayout(array $input)
    {
        $payoutIds = $input['payout_ids'];

        $type = $input['type'];

        $this->trace->info(
            "FEE_RECOVERY_PAYOUT_CREATE_REQUEST_MANUALLY_DARK",
            [
                'payout_ids'       => $payoutIds,
                'type'            => $type
            ]);

        $successfulUpdates = [];

        foreach ($payoutIds as $payoutId) {
            $payout = $this->repo->payout->findOrFail($payoutId);

            $this->mutex->acquireAndRelease(
                'fee_recovery_' . $payout->getId(),
                function () use ($payout, $type, $successfulUpdates)
                {
                    $feeRecoveryEntity = (new Entity)->build();

                    Validator::validateSourceEntity($payout);

                    $feeRecoveryEntity->setType($type);

                    $feeRecoveryEntity->setStatus(Status::UNRECOVERED);

                    $feeRecoveryEntity->entity()->associate($payout);

                    $skipCreation = $this->skipIfExistingFeeRecoveryDataExists($feeRecoveryEntity);

                    if ($skipCreation === true)
                    {
                        return;
                    }

                    $this->repo->saveOrFail($feeRecoveryEntity);

                    $successfulUpdates[] = $payout->getId();

                    $this->trace->info(
                        "FEE_RECOVERY_ENTITY_CREATED_MANUALLY_DARK",
                        [
                            'source_id'       => $payout->getId(),
                            'source_type'     => $type,
                            'fee_recovery_id' => $feeRecoveryEntity->getId()
                        ]);
                },
                60,
                ErrorCode::BAD_REQUEST_FEE_RECOVERY_ANOTHER_OPERATION_IN_PROGRESS);
        }

        return
            [
                "success" => true,
                "inserted_payout_ids" => $successfulUpdates
            ];
    }

    public function manuallyDeleteDuplicateFeeRecoveryEntriesForPayout(array $input)
    {
        $payoutIds = $input['payout_ids'];

        $type = $input['type'];

        $this->trace->info(
            "FEE_RECOVERY_PAYOUT_DELETE_REQUEST_MANUALLY_DARK",
            [
                'payout_ids'       => $payoutIds,
                'type'            => $type
            ]);

        $successfulDeletes = [];

        foreach ($payoutIds as $payoutId) {
            $payout = $this->repo->payout->findOrFail($payoutId);

            $this->mutex->acquireAndRelease(
                'fee_recovery_' . $payout->getId(),
                function () use ($payout, $type, $successfulDeletes)
                {
                    $params = [
                        Entity::ENTITY_ID       => $payout->getId(),
                        Entity::TYPE            => $type,
                    ];

                    $this->repo->fee_recovery->setMerchantIdRequiredForMultipleFetch(false);

                    $existingData = $this->repo->fee_recovery->fetch($params);

                    $totalCount = $existingData->count();

                    $this->trace->info(
                        "FEE_RECOVERY_ENTITY_DARK",
                        [
                            'source_id'       => $payout->getId(),
                            'source_type'     => $type,
                            'count'           => $totalCount
                        ]);

                    if ($totalCount > 1)
                    {
                        foreach ($existingData as $fee_recovery) {

                            if ($totalCount == 1) {
                                break;
                            }

                            $totalCount --;

                            $this->repo->deleteOrFail($fee_recovery);
                        }

                        $successfulDeletes[] = $payout->getId();
                    }

                    $this->trace->info(
                        "FEE_RECOVERY_ENTITY_DELETED_MANUALLY_DARK",
                        [
                            'source_id'       => $payout->getId(),
                            'source_type'     => $type,
                        ]);
                },
                60,
                ErrorCode::BAD_REQUEST_FEE_RECOVERY_ANOTHER_OPERATION_IN_PROGRESS);
        }

        return [
            "success" => true,
            "deleted_payout_ids" => $successfulDeletes
        ];
    }

    /**
     * This function is called every time a payout changes status.
     * It creates a new entry, in case a payout failed/reversed
     * It also updates all the corresponding entries if the state change occurred for a 'rzp_fees' payout
     *
     * @param Payout\Entity        $payout
     * @param $previousStatus
     * @param Reversal\Entity|null $reversal
     */
    public function handlePayoutStatusUpdate(Payout\Entity $payout,
                                             $previousStatus = null,
                                             Reversal\Entity $reversal = null)
    {
        if (($payout->getFeeType() !== null) and
            ($payout->getFeeType() === CreditType::REWARD_FEE))
        {
            return;
        }

        $payoutStatus = $payout->getStatus();

        // We shall make a new entry in the fee_recovery table of type credit when
        if ($payoutStatus === Payout\Status::FAILED)
        {
            $this->createFeeRecoveryEntityForSource($payout);
        }
        else if ($payoutStatus === Payout\Status::REVERSED)
        {
            $this->createFeeRecoveryEntityForSource($reversal);
        }

        // If the payout is a fee_recovery payout, we need to update all the fee_recovery entries
        // corresponding to this fee_recovery payout
        if ($payout->getPurpose() === Payout\Purpose::RZP_FEES)
        {
            $feeRecoveryPayoutId = $payout->getId();

            $feeRecoveryStatus = Status::getFeeRecoveryStatusFromPayoutStatus($payoutStatus);

            $this->repo->fee_recovery->updateFeeRecoveryOnPayoutStatusUpdate($feeRecoveryPayoutId,
                                                                             $feeRecoveryStatus);

            $payoutStatusFailedForInitiatedPayout = (($payoutStatus === Payout\Status::FAILED) and
                                                     ($previousStatus === Payout\Status::INITIATED));

            $payoutStatusReversedForInitiatedOrProcessedPayout = (($payoutStatus === Payout\Status::REVERSED) and
                                                                  (($previousStatus === Payout\Status::INITIATED) or
                                                                   ($previousStatus === Payout\Status::PROCESSED)));

            if ($payoutStatusFailedForInitiatedPayout or
                $payoutStatusReversedForInitiatedOrProcessedPayout)
            {
                Jobs\FeeRecovery::dispatch($this->mode, $feeRecoveryPayoutId);
            }

            $this->trace->info(
                TraceCode::FEE_RECOVERY_UPDATE_AFTER_RZP_FEES_PAYOUT_STATUS_UPDATE,
                [
                    'fee_recovery_payout_id'        => $feeRecoveryPayoutId,
                    'fee_recovery_status'           => $feeRecoveryStatus,
                    'fee_recovery_payout_status'    => $payout->getStatus(),
                ]);
        }
    }

    /**
     * This function picks up all payouts, failed payouts and reversals between a certain period,
     * calculates fees that needs to be recovered for these entities (positive for debit, negative for credit)
     * and makes a payout to a designated rzp_fees fund account with the calculated amount
     *
     * @param array $input
     *
     * @return Payout\Entity
     *
     * @throws Exception\BadRequestException
     */
    public function createFeeRecoveryPayout(array $input)
    {
        $this->trace->info(
            TraceCode::FEE_RECOVERY_INITIATED,
            [
                'input' => $input,
            ]);

        (new Validator)->validateInput(Validator::CREATE_FEE_RECOVERY_PAYOUT, $input);

        $balanceId = $input[Entity::BALANCE_ID];

        $startTimeStamp = $input[Entity::FROM];

        $endTimeStamp = $input[Entity::TO];

        $balance = $this->repo->balance->findOrFailById($balanceId);

        (new Validator)->validateBalanceTypeAndTimeStamps($balance, $startTimeStamp, $endTimeStamp);

        $response = $this->processFeeRecovery($balance, $startTimeStamp, $endTimeStamp);

        return $response;
    }

    /**
     * This function picks up all payouts, failed payouts and reversals from a failed recovery payout Id,
     * and recreate them in fee recovery
     * and makes a payout to a designated rzp_fees fund account with the calculated amount
     *
     * @param $previousRecoveryPayoutId
     * @param bool $manualRetry
     * @return Payout\Entity
     */
    public function recreateFeeRecoveryPayout($previousRecoveryPayoutId, $manualRetry = false)
    {
        $this->trace->info(
            TraceCode::FEE_RECOVERY_RETRY_INITIATED,
            [
                Entity::PREVIOUS_RECOVERY_PAYOUT_ID => $previousRecoveryPayoutId,
            ]
        );

        $previousRecoveryPayout = $this->repo->payout->findOrFail($previousRecoveryPayoutId);

        $balance = $previousRecoveryPayout->balance;

        $amount = $previousRecoveryPayout->getAmount();

        return $this->recreateFeeRecoveryEntityForSourceAndFeeRecoveryPayout($previousRecoveryPayout, $balance, $amount, $manualRetry);
    }

    public function recreateFeeRecoveryEntityForSourceAndFeeRecoveryPayout(Payout\Entity $previousRecoveryPayout, $balance, $amount, $manualRetry = false)
    {
        $previousFeeRecoveryEntities = $this->repo->fee_recovery->getFeeRecoveryByRecoveryPayoutId($previousRecoveryPayout->getId(), $manualRetry);

        if (count($previousFeeRecoveryEntities) === 0)
        {
            // This slack notification is required to notify for manual recovery alert.
            $operation = 'Fee Recovery Retry failed';

            if ($manualRetry == false)
            {
                $data = [
                    'fee_recovery_payout_id' => $previousRecoveryPayout->getId()
                ];

                $this->trace->info(
                    TraceCode::FEE_RECOVERY_RETRY_FAILED_PROCEED_MANUAL,
                    $data
                );

                (new SlackNotification)->send($operation, $data, null, 1, 'rx_ca_rbl_alerts');

                return null;
            }
            else
            {
                return [
                    'message' => $operation
                ];
            }
        }

        return $this->repo->transaction(
            function () use($previousFeeRecoveryEntities, $balance, $amount)
            {
                $merchant = $balance->merchant;

                $payoutPayload = $this->getPayloadForFeeRecoveryPayout($balance, $amount);

                $this->trace->info(
                                   TraceCode::FEE_RECOVERY_PAYOUT_CREATE_REQUEST,
                                   [
                                       'payload' => $payoutPayload
                                   ]
                );

                $newFeeRecoveryPayout = (new Payout\Core)->createPayoutToFundAccount($payoutPayload,
                                                                                     $merchant,
                                                                                     null,
                                                                                     true);

                $this->trace->info(
                                   TraceCode::FEE_RECOVERY_PAYOUT_CREATED,
                                   [
                                       'fee_recovery_payout_id'     =>  $newFeeRecoveryPayout->getPublicId(),
                                       'fee_recovery_payout_amount' =>  $newFeeRecoveryPayout->getAmount()
                                   ]
                );

                foreach ($previousFeeRecoveryEntities as $feeRecoveryEntity)
                {
                    $this->createAndUpdateFeeRecoveryEntityForRecoveryRetry($feeRecoveryEntity, $newFeeRecoveryPayout);
                }

                return $newFeeRecoveryPayout;
            });
    }

    /**
     * @param array $input
     *
     * @return array
     */
    public function recoveryPayoutCron(array $input)
    {
        $currentTimeStamp = Carbon::now(Timezone::IST)->getTimestamp();

        $pendingTasks = $this->repo->schedule_task->fetchDueScheduleTasks(Task\Type::FEE_RECOVERY, $currentTimeStamp);

        foreach ($pendingTasks as $task)
        {
            $balanceId = $task->getEntityId();

            $balance = $this->repo->balance->find($balanceId);

            //
            // We are going to run the fee recovery payout for payouts created between lastRunAt and nextRunAt of a
            // schedule task.
            //
            // IMPORTANT : If the task runs 23 min post it's current nextRunAt, lastRunAt is still updated to
            // the current value of nextRunAt. Hence, we don't have to consider any actual delay that happen
            // when we run the cron.
            //
            // Also, we have manually added 1 here because the query is inclusive on both ends. The same route is also
            // called via admin auth, and keeping the timestamps inclusive makes it less prone to human error.
            //
            $lastRunAt = ($task->getLastRunAt() + 1) ?? $balance->getCreatedAt();
            $nextRunAt = $task->getNextRunAt();

            Jobs\FeeRecovery::dispatch($this->mode, null, $balanceId, $lastRunAt, $nextRunAt, $task);
        }

        return ['success' => true];
    }

    protected function skipIfExistingFeeRecoveryDataExists(Entity $feeRecovery): bool
    {
        /** @var Base\PublicEntity $source */
        $source = $feeRecovery->entity;

        $params = [
            Entity::ENTITY_ID       => $source->getId(),
            Entity::TYPE            => $feeRecovery->getType(),
        ];

        $this->repo->fee_recovery->setMerchantIdRequiredForMultipleFetch(false);

        $existingData = $this->repo->fee_recovery->fetch($params);

        if ($existingData->count() > 1)
        {
            $errorData = [
                'source_id'      => $source->getId(),
                'source_type'    => $source->getEntityName(),
                'count'          => $existingData->count(),
            ];

            $errorMessage = 'More than one entry in fee_recovery for given source entity';

            $this->sendSlackAlert($errorMessage, $errorData);

            throw new Exception\LogicException($errorMessage,
                                               ErrorCode::BAD_REQUEST_LOGIC_ERROR_FEE_RECOVERY_DUPLICATE_DATA,
                                               $errorData);
        }

        if ($existingData->count() === 1)
        {
            $this->trace->info(
                TraceCode::FEE_RECOVERY_FOR_GIVEN_ENTITY_ALREADY_EXISTS,
                [
                    'source_id'                 => $feeRecovery->getEntityId(),
                    'existing_fee_recovery_id'  => $existingData->first->getEntityId()
                ]);

            return true;
        }

        // In case of reversals, we also need to check for existing credit entry for a payout.
        // This is because we are now allowing transition of payout status from FAILED -> REVERSED
        // In case of failed payouts, we already have a credit entry corresponding to this failed payout
        // When the payout gets reversed, we shall not create another credit entry and will simply skip it
        if ($feeRecovery->getEntityType() === Entity::REVERSAL)
        {
            $fetchParams = [
                Entity::ENTITY_ID => $feeRecovery->reversal->getEntityId(),
                Entity::TYPE      => Type::CREDIT
            ];

            $existingEntry = $this->repo->fee_recovery->fetch($fetchParams);

            if($existingEntry->count() > 0)
            {
                $this->trace->info(
                    TraceCode::FEE_RECOVERY_FAILED_PAYOUT_TO_REVERSAL,
                    [
                        'reversal_id' => $feeRecovery->getEntityId()
                    ]);

                return true;
            }
        }

        return false;
    }

    protected function processFeeRecovery(Balance\Entity $balance,
                                                 int $startTimestamp,
                                                 int $endTimestamp)
    {
        $response = $this->mutex->acquireAndRelease(
            'process_fee_recovery_' . $balance->getId(),
            function() use ($balance, $startTimestamp, $endTimestamp)
        {
            list ($payouts, $failedPayouts, $reversals) = $this->getPayoutAndReversalEntitiesForFeeRecovery($balance,
                                                                                                            $startTimestamp,
                                                                                                            $endTimestamp);

            $amount = $this->getFeesForFeeRecovery($payouts, $failedPayouts, $reversals);

            if ($amount < 0)
            {
                $errorData = [
                    'balance_id'            => $balance->getId(),
                    'start_timestamp'       => $startTimestamp,
                    'end_timestamp'         => $endTimestamp,
                    'fee_recovery_amount'   => $amount
                ];

                $errorMessage = 'Amount is insufficient to make a fee recovery payout';

                $this->sendSlackAlert($errorMessage, $errorData);

                throw new Exception\BadRequestException(
                    ErrorCode::BAD_REQUEST_FEE_RECOVERY_AMOUNT_INSUFFICIENT,
                    null,
                    $errorData
                    );
            }
            if ($amount == 0)
            {
                $variant = $this->app['razorx']->getTreatment(
                    $balance->getMerchantId(),
                    Merchant\RazorxTreatment::RX_FEE_RECOVERY_CONTROL_ROLL_OUT,
                    $this->mode,
                    3);

                if ($variant === 'on')
                {
                    return [
                        'message'  => "The total amount to be recovered is zero and hence we are not creating a fee recovery payout for the current week"
                    ];
                }

                throw new Exception\BadRequestException(
                    ErrorCode::BAD_REQUEST_FEE_RECOVERY_AMOUNT_ZERO,
                    null,
                    [
                        'balance_id'            => $balance->getId(),
                        'start_timestamp'       => $startTimestamp,
                        'end_timestamp'         => $endTimestamp,
                        'fee_recovery_amount'   => $amount
                    ]);
            }

            $feeRecoveryPayout =  $this->processAndGetFeeRecoveryPayout($payouts,
                                                                        $failedPayouts,
                                                                        $reversals,
                                                                        $balance,
                                                                        $amount);

            return $feeRecoveryPayout->toArrayPublic();

        },
        300,
        ErrorCode::BAD_REQUEST_FEE_RECOVERY_ANOTHER_OPERATION_IN_PROGRESS);

        return $response;
    }

    protected function getPayoutAndReversalEntitiesForFeeRecovery(Balance\Entity $balance,
                                                                  int $startTimestamp,
                                                                  int $endTimestamp)
    {
        $merchant = $balance->merchant;

        $balanceId = $balance->getId();

        $this->trace->info(
            TraceCode::FEE_RECOVERY_PAYOUTS_AND_REVERSALS_FETCH_INITIATED,
            [
                'merchant_id'   => $merchant->getId(),
                'balance_id'    => $balanceId,
                'start_time'    => $startTimestamp,
                'end_time'      => $endTimestamp
            ]);

        // TODO : Add a limit to make sure that these fetch statements don't choke the network

        $payouts = $this->repo->payout->fetchFeesAndIdOfPayoutsForGivenBalanceIdForPeriod(
            $merchant->getId(),
            $balanceId,
            $startTimestamp,
            $endTimestamp
        );

        $failedPayouts = $this->repo->payout->fetchFeesAndIdOfFailedPayoutsForGivenBalanceIdForPeriod(
            $merchant->getId(),
            $balanceId,
            $startTimestamp,
            $endTimestamp
        );

        $reversals = $this->repo->reversal->fetchFeesAndIdOfReversalsForGivenBalanceIdForPeriod(
            $merchant->getId(),
            $balanceId,
            $startTimestamp,
            $endTimestamp
        );

        $this->trace->info(
            TraceCode::FEE_RECOVERY_PAYOUTS_AND_REVERSALS_FETCH_COMPLETED,
            [
                'merchant_id'           => $merchant->getId(),
                'balance_id'            => $balanceId,
                'payout_count'          => $payouts->count(),
                'failed_payout_count'   => $failedPayouts->count(),
                'reversal_count'        => $reversals->count()
            ]);

        return [$payouts, $failedPayouts, $reversals];
    }

    protected function getFeesForFeeRecovery(Base\PublicCollection $payouts,
                                             Base\PublicCollection $failedPayouts,
                                             Base\PublicCollection $reversals)
    {
        $payoutsFees = 0;
        $reversalsFees = 0;
        $failedPayoutsFees = 0;

        foreach ($payouts as $payout)
        {
            $payoutsFees += $payout[Payout\Entity::FEES];
        }

        foreach ($failedPayouts as $failedPayout)
        {
            $failedPayoutsFees += $failedPayout[Payout\Entity::FEES];
        }

        foreach ($reversals as $reversal)
        {
            $reversalsFees += $reversal[Payout\Entity::FEES];
        }

        $amount = $payoutsFees - $failedPayoutsFees - $reversalsFees;

        return $amount;
    }

    /**
     * @param Base\PublicCollection $payouts
     * @param Base\PublicCollection $failedPayouts
     * @param Base\PublicCollection $reversals
     * @param Balance\Entity        $balance
     * @param                       $amount
     *
     * @return mixed
     * @throws Exception\BadRequestException
     */
    protected function processAndGetFeeRecoveryPayout(Base\PublicCollection $payouts,
                                                      Base\PublicCollection $failedPayouts,
                                                      Base\PublicCollection $reversals,
                                                      Balance\Entity $balance,
                                                      $amount)
    {
        $payoutIds          = $payouts->getIds();
        $failedPayoutIds    = $failedPayouts->getIds();
        $reversalIds        = $reversals->getIds();

        $this->validateNoExistingFeeRecoveryInProcess($payoutIds, $failedPayoutIds, $reversalIds);

        return $this->repo->transaction(
            function() use ($balance, $payoutIds, $failedPayoutIds, $reversalIds, $amount)
            {
                $merchant = $balance->merchant;

                $payoutPayload = $this->getPayloadForFeeRecoveryPayout($balance, $amount);

                $this->trace->info(
                    TraceCode::FEE_RECOVERY_PAYOUT_CREATE_REQUEST,
                    [
                        'payload' => $payoutPayload
                    ]);

                $feeRecoveryPayout = (new Payout\Core)->createPayoutToFundAccount($payoutPayload,
                                                                                  $merchant,
                                                                                  null,
                                                                                  true);

                $this->trace->info(
                    TraceCode::FEE_RECOVERY_PAYOUT_CREATED,
                    [
                        'payout_data' => $feeRecoveryPayout->toArrayPublic()
                    ]);

                $this->updateFeesRecoveryStatus($payoutIds, $failedPayoutIds, $reversalIds, $feeRecoveryPayout);

                return $feeRecoveryPayout;
            });
    }

    /**
     * * This function matches the count of payoutIds, failedPayoutIds and reversalIds to their corresponding entries
     * in the fee_recovery table. Ideally we would want to match every Id to its corresponding entry.
     * Doing that is very costly. By matching every Id, we could throw error for only certain payouts/reversals
     * but in this case, we shall throw an error for an entire range of payouts. This would only occur if there is
     * some sort of data inconsistency. In both cases, corresponding fee_recovery payout should fail.
     *
     * @param $payoutIds
     * @param $failedPayoutIds
     * @param $reversalIds
     *
     * @throws Exception\BadRequestException
     */
    protected function validateNoExistingFeeRecoveryInProcess($payoutIds,
                                                              $failedPayoutIds,
                                                              $reversalIds)
    {
        $unRecoveredPayoutCount = $this->repo->fee_recovery->fetchUnrecoveredFeeRecoveryCount($payoutIds,
                                                                                              Entity::PAYOUT,
                                                                                              Type::DEBIT);

        $unRecoveredFailedPayoutCount = $this->repo->fee_recovery->fetchUnrecoveredFeeRecoveryCount($failedPayoutIds,
                                                                                                    Entity::PAYOUT,
                                                                                                    Type::CREDIT);

        $unRecoveredReversalCount = $this->repo->fee_recovery->fetchUnrecoveredFeeRecoveryCount($reversalIds,
                                                                                                Entity::REVERSAL,
                                                                                                Type::CREDIT);

        $payoutIdsCount = count($payoutIds);
        $reversalIdsCount = count($reversalIds);
        $failedPayoutIdsCount = count($failedPayoutIds);

        if (($unRecoveredPayoutCount !== $payoutIdsCount) or
            ($unRecoveredFailedPayoutCount !== $failedPayoutIdsCount) or
            ($unRecoveredReversalCount !== $reversalIdsCount))
        {
            throw new Exception\BadRequestException(
                ErrorCode::BAD_REQUEST_FEE_RECOVERY_ALREADY_INITIATED,
                null,
                [
                    'payout_id_count'                   => $payoutIdsCount,
                    'unrecovered_payout_count'          => $unRecoveredPayoutCount,
                    'failed_payout_id_list'             => $failedPayoutIdsCount,
                    'unrecovered_failed_payout_count'   => $unRecoveredFailedPayoutCount,
                    'reversal_id_list'                  => $reversalIdsCount,
                    'unrecovered_reversal_count'        => $unRecoveredReversalCount,
                ]);
        }
    }

    protected function fetchIfscForFeeRecoveryForChannel(string $channel)
    {
        return $this->config['banking_account']['razorpayx_fee_details'][$channel]['ifsc'];
    }

    /**
     * This function also ends up creating a new rzp_fees type contact and fund account if none currently exist
     * Ideally, this should never occur but may occur if someone manually activates a merchant for business banking.
     *
     * @param Balance\Entity $balance
     * @param $amount
     *
     * @return array
     * @throws Exception\BadRequestValidationFailureException
     * @throws Exception\InvalidArgumentException
     * @throws Exception\LogicException
     */
    protected function getPayloadForFeeRecoveryPayout(Balance\Entity $balance, $amount)
    {
        $merchant = $balance->merchant;

        $feeRecoveryContact = $this->fetchOrCreateRzpFeesTypeContact($merchant, $balance);

        $ifscForFeeRecovery = $this->fetchIfscForFeeRecoveryForChannel($balance->getChannel());

        $feeRecoveryFundAccount = $this->repo->fund_account->fetchRzpFeesFundAccount($merchant->getId(),
                                                                                     $feeRecoveryContact->getId(),
                                                                                     $ifscForFeeRecovery);

        $fundAccountId = $feeRecoveryFundAccount->getPublicId();

        switch($balance->getChannel())
        {
            case Channel::AXIS:
            case Channel::YESBANK:

                $payoutMode = Payout\Mode::NEFT;
                break;

            default:
                $payoutMode = Payout\Mode::IFT;
                break;
        }

        $payoutPayload = [
            Payout\Entity::FUND_ACCOUNT_ID      => $fundAccountId,
            Payout\Entity::MODE                 => $payoutMode,
            Payout\Entity::CURRENCY             => Currency::INR,
            Payout\Entity::BALANCE_ID           => $balance->getId(),
            Payout\Entity::PURPOSE              => Payout\Purpose::RZP_FEES,
            Payout\Entity::QUEUE_IF_LOW_BALANCE => true,
            Payout\Entity::AMOUNT               => $amount,
        ];

        return $payoutPayload;
    }

    protected function updateFeesRecoveryStatus($payoutIds,
                                                $failedPayoutIds,
                                                $reversalIds,
                                                $feeRecoveryPayout,
                                                $currentAttemptNumber = 0)
    {
        $this->trace->info(
            TraceCode::FEE_RECOVERY_STATUS_UPDATE,
            [
                'fee_recovery_payout_id' => $feeRecoveryPayout->getPublicId(),
            ]);

        $updatedPayoutsCount = $this->repo->fee_recovery
                                          ->updateBulkStatusAndRecoveryPayoutId($payoutIds,
                                                                                Entity::PAYOUT,
                                                                                Type::DEBIT,
                                                                                $feeRecoveryPayout->getId(),
                                                                                Status::PROCESSING,
                                                                                $currentAttemptNumber);

        $updatedFailedPayoutsCount = $this->repo->fee_recovery
                                                ->updateBulkStatusAndRecoveryPayoutId($failedPayoutIds,
                                                                                      Entity::PAYOUT,
                                                                                      Type::CREDIT,
                                                                                      $feeRecoveryPayout->getId(),
                                                                                      Status::PROCESSING,
                                                                                      $currentAttemptNumber);

        $updatedReversalsCount = $this->repo->fee_recovery
                                            ->updateBulkStatusAndRecoveryPayoutId($reversalIds,
                                                                                  Entity::REVERSAL,
                                                                                  Type::CREDIT,
                                                                                  $feeRecoveryPayout->getId(),
                                                                                  Status::PROCESSING,
                                                                                  $currentAttemptNumber);

        if (($updatedPayoutsCount !== count($payoutIds)) or
            ($updatedFailedPayoutsCount !== count($failedPayoutIds)) or
            ($updatedReversalsCount !== count($reversalIds)))
        {
            throw new Exception\BadRequestException(
                ErrorCode::BAD_REQUEST_FEE_RECOVERY_BULK_UPDATE_ERROR,
                null,
                [
                    'payouts_count'                 => count($payoutIds),
                    'updated_payouts_count'         => $updatedPayoutsCount,
                    'failed_payouts_count'          => count($failedPayoutIds),
                    'updated_failed_payouts_count'  => $updatedFailedPayoutsCount,
                    'reversals_count'               => count($reversalIds),
                    'updated_reversals_count'       => $updatedReversalsCount
                ]);
        }
    }

    /**
     * This function fetches the 'rzp_fees' type contact.
     * If it does not exist, it creates the contact and corresponding fund account.
     *
     * @param Merchant\Entity $merchant
     *
     * @return mixed
     * @throws Exception\BadRequestValidationFailureException
     * @throws Exception\InvalidArgumentException
     * @throws Exception\LogicException
     */
    protected function fetchOrCreateRzpFeesTypeContact(Merchant\Entity $merchant, Balance\Entity $balance)
    {
        $rzpFeesContacts = $this->repo->contact->fetch([
                                                           Contact\Entity::TYPE => Contact\Type::RZP_FEES
                                                       ],
                                                       $merchant->getId());

        if ($rzpFeesContacts->count() > 1)
        {
            throw new Exception\LogicException('Merchant has more than one rzp_fees type contact',
                                               ErrorCode::BAD_REQUEST_LOGIC_ERROR_MULTIPLE_RZP_FEES_CONTACT,
                                               [
                                                   'merchant_id' => $merchant->getId(),
                                                   'count'       => $rzpFeesContacts->count(),
                                               ]);
        }

        if (empty($rzpFeesContacts) === true)
        {
            (new BankingAccount\Core)->createRZPFeesContactAndFundAccount($merchant, $balance->getChannel());

            $this->trace->error(TraceCode::RZP_FEES_CONTACT_FUND_ACCOUNT_DOES_NOT_EXIST,
                                [
                                    'merchant_id'           => $merchant->getId(),
                                    'balance_id'            => $balance->getId(),
                                ]);

            $rzpFeesContacts = $this->repo->contact->fetch([
                                                               Contact\Entity::TYPE => Contact\Type::RZP_FEES
                                                           ],
                                                           $merchant->getId(),
                                                           true);
        }

        $feeRecoveryContact = $rzpFeesContacts->first();

        return $feeRecoveryContact;
    }

    /**
     * @param array $input
     *
     * @return array
     */
    public function createManualRecovery(array $input)
    {
        (new Validator)->validateInput('create_manual_fee_recovery_payout', $input);

        $payoutIds          = $input[Entity::PAYOUT_IDS] ?? [];
        $reversalIds        = $input[Entity::REVERSAL_IDS] ?? [];
        $failedPayoutIds    = $input[Entity::FAILED_PAYOUT_IDS] ?? [];
        $balanceId          = $input[Entity::BALANCE_ID];
        $merchantId         = $input[Entity::MERCHANT_ID];
        $amount             = (int) $input[Entity::AMOUNT];

        $manualRecoveryData = [
            Entity::DESCRIPTION         => $input[Entity::DESCRIPTION] ?? null,
            Entity::REFERENCE_NUMBER    => $input[Entity::REFERENCE_NUMBER] ?? null
        ];

        $this->repo->transaction(
            function() use ($payoutIds, $failedPayoutIds, $reversalIds, $merchantId, $balanceId, $manualRecoveryData, $amount)
            {

                $feesForPayouts = $this->repo->payout->fetchFeesForPayoutIds($payoutIds,
                                                                             $merchantId,
                                                                             $balanceId);

                $feesForFailedPayouts = $this->repo->payout->fetchFeesForFailedPayoutIds($failedPayoutIds,
                                                                                         $merchantId,
                                                                                         $balanceId);

                $feesForReversals = $this->repo->reversal->fetchFeesForReversalIds($reversalIds,
                                                                                   $merchantId,
                                                                                   $balanceId);

                $totalFeesAmount = $feesForPayouts['fees'] - $feesForFailedPayouts['fees'] - $feesForReversals['fees'];

                if ($totalFeesAmount !== $amount)
                {
                    throw new BadRequestException(
                        ErrorCode::BAD_REQUEST_FEE_RECOVERY_MANUAL_AMOUNT_MISMATCH,
                        null,
                        [
                            'amount'            => $amount,
                            'fees_calculated'   => $totalFeesAmount,
                            'merchant_id'       => $merchantId,
                            'balance_id'        => $balanceId,
                            'reference_number'  => $manualRecoveryData[Entity::REFERENCE_NUMBER],
                            'description'       => $manualRecoveryData[Entity::DESCRIPTION],
                        ]);
                }

                foreach ($payoutIds as $payoutId)
                {
                    $this->createAndUpdateFeeRecoveryEntityForManualRecovery($payoutId,
                                                                             Entity::PAYOUT,
                                                                             $merchantId,
                                                                             $manualRecoveryData,
                                                                             Type::DEBIT);
                }
                foreach ($failedPayoutIds as $failedPayoutId)
                {
                    $this->createAndUpdateFeeRecoveryEntityForManualRecovery($failedPayoutId,
                                                                             Entity::PAYOUT,
                                                                             $merchantId,
                                                                             $manualRecoveryData,
                                                                             Type::CREDIT);
                }
                foreach ($reversalIds as $reversalId)
                {
                    $this->createAndUpdateFeeRecoveryEntityForManualRecovery($reversalId,
                                                                             Entity::REVERSAL,
                                                                             $merchantId,
                                                                             $manualRecoveryData,
                                                                             Type::CREDIT);
                }
            });

        return ['success' => true];
    }

    protected function createAndUpdateFeeRecoveryEntityForManualRecovery($entityId,
                                                                         $entityType,
                                                                         $merchantId,
                                                                         $manualRecoveryData,
                                                                         $type)
    {
        $this->mutex->acquireAndRelease(
            'fee_recovery_' . $entityId,
            function () use ($entityId, $entityType, $merchantId, $manualRecoveryData, $type)
        {
            $feeRecovery = $this->repo->fee_recovery->getLastUnrecoveredFeeRecoveryEntityByEntityIdType(
                $entityId,
                $entityType,
                $type
            );

            if ($feeRecovery === null)
            {
                throw new BadRequestException(
                    ErrorCode::BAD_REQUEST_FEE_RECOVERY_MANUAL_COLLECTION_FOR_PAYOUT_INVALID,
                    null,
                    [
                        'entity_id'     => $entityId,
                        'entity_type'   => $entityType
                    ]);
            }

            $newFeeRecovery = $feeRecovery->replicate();

            $dataToUpdate = [
                Entity::RECOVERY_PAYOUT_ID  => null,
                Entity::REFERENCE_NUMBER    => $manualRecoveryData[Entity::REFERENCE_NUMBER],
                Entity::DESCRIPTION         => $manualRecoveryData[Entity::DESCRIPTION],
                Entity::ATTEMPT_NUMBER      => $feeRecovery->getAttemptNumber() + 1,
            ];

            $newFeeRecovery->edit($dataToUpdate);

            $newFeeRecovery->setStatus(Status::MANUALLY_RECOVERED);

            if ($entityType === Entity::PAYOUT)
            {
                $sourceEntity = $feeRecovery->payout;

                if ($sourceEntity->getPurpose() === Payout\Purpose::RZP_FEES)
                {
                    throw new BadRequestException(
                        ErrorCode::BAD_REQUEST_FEE_RECOVERY_MANUAL_FOR_RZP_FEES_PAYOUT_NOT_SUPPORTED,
                        null,
                        [
                            'entity_id'     => $entityId,
                            'entity_type'   => $entityType
                        ]);
                }
            }
            else if ($entityType === Entity::REVERSAL)
            {
                $sourceEntity = $feeRecovery->reversal;
            }

            $newFeeRecovery->entity()->associate($sourceEntity);

            $this->repo->saveOrFail($newFeeRecovery);

            // Set status of earlier attempt to failed
            $feeRecovery->setStatus(Status::FAILED);

            $this->repo->saveOrFail($feeRecovery);
        },
        60,
        ErrorCode::BAD_REQUEST_FEE_RECOVERY_ANOTHER_OPERATION_IN_PROGRESS);
    }

    protected function createAndUpdateFeeRecoveryEntityForRecoveryRetry(Entity $feeRecoverySourceEntity,
                                                                        Payout\Entity $feeRecoveryPayout)
    {
        $this->mutex->acquireAndRelease(
            'fee_recovery_' . $feeRecoverySourceEntity->getId(),
            function () use ($feeRecoverySourceEntity, $feeRecoveryPayout)
            {
                $newFeeRecovery = $feeRecoverySourceEntity->replicate();

                $dataToUpdate = [
                    Entity::RECOVERY_PAYOUT_ID  => $feeRecoveryPayout->getId(),
                    Entity::ATTEMPT_NUMBER      => $feeRecoverySourceEntity->getAttemptNumber() + 1,
                ];

                $newFeeRecovery->edit($dataToUpdate);

                $newFeeRecovery->setStatus(Status::PROCESSING);

                if ($feeRecoverySourceEntity->getEntityType() === Entity::REVERSAL)
                {
                    $sourceEntity = $feeRecoverySourceEntity->reversal;
                }
                else
                {
                    $sourceEntity = $feeRecoverySourceEntity->payout;
                }

                $newFeeRecovery->entity()->associate($sourceEntity);

                $this->repo->saveOrFail($newFeeRecovery);

                // Set status of earlier attempt to failed
                $feeRecoverySourceEntity->setStatus(Status::FAILED);

                $this->repo->saveOrFail($feeRecoverySourceEntity);
            },
            60,
            ErrorCode::BAD_REQUEST_FEE_RECOVERY_ANOTHER_OPERATION_IN_PROGRESS);
    }

    protected function sendSlackAlert($operation, $data)
    {
        (new SlackNotification)->send($operation, $data, null, 1, Entity::RX_CA_RBL_ALERTS);
    }
}
