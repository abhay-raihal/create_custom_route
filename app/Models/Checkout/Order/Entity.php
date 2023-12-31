<?php

namespace RZP\Models\Checkout\Order;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use RZP\Constants\Entity as ConstantsEntity;
use RZP\Constants\Table;
use RZP\Models\Base\Notes;
use RZP\Models\Base\PublicEntity;
use RZP\Models\Base\Traits\NotesTrait;
use RZP\Models\Customer\Entity as Customer;
use RZP\Models\Merchant\Account;
use RZP\Models\Merchant\Account\Entity as MerchantAccount;
use RZP\Models\Merchant\Entity as Merchant;
use RZP\Models\Invoice\Entity as Invoice;
use RZP\Models\Offer\Entity as Offer;
use RZP\Models\Order\Entity as Order;
use RZP\Models\PaymentLink\Entity as PaymentLink;

/**
 * The CheckoutOrder entity is used for storing all options passed by checkout FE to initialise a specific payment
 * instrument/method (currently QRCodes)
 *
 * @property string $id           Primary Key of this CheckoutOrder Entity
 * @property string $checkout_id  The unique id generated by checkout FE for a checkout session
 * @property string $order_id     The primary key of the Order associated to this CheckoutOrder
 * @property string $merchant_id  The primary key of the Merchant this CheckoutOrder belongs to
 * @property string $invoice_id   The primary key of the Invoice associated to this CheckoutOrder
 * @property string $contact      The phone number of the end user using checkout to make a payment
 * @property string $email        The email id of the end user using checkout to make a payment
 * @property string $meta_data    All metadata passed by Checkout stored in JSON format
 * @property string $status       The status of this entity (active/paid/closed)
 * @property Carbon $expire_at    The future unix timestamp when this entity will be marked as closed
 * @property string $close_reason The reason for the closure of this entity. @see CloseReason::REASONS
 * @property Carbon $closed_at    The unix timestamp when this entity was closed
 * @property Carbon $created_at   The unix timestamp when this entity was created
 * @property Carbon $updated_at   The unix timestamp when this entity was updated
 *
 * @property-read Merchant $merchant
 * @property-read Order    $order
 * @property-read Invoice  $invoice
 */
class Entity extends PublicEntity
{
    use NotesTrait;

    /**
     * Properties of this Entity
     */
    public const CHECKOUT_ID = 'checkout_id';
    public const CLOSED_AT = 'closed_at';
    public const CLOSE_REASON = 'close_reason';
    public const CONTACT = 'contact';
    public const EMAIL = 'email';
    public const EXPIRE_AT = 'expire_at';
    public const INVOICE_ID = 'invoice_id';
    public const MERCHANT_ID = 'merchant_id';
    public const META_DATA = 'meta_data';
    public const ORDER_ID = 'order_id';
    public const STATUS = 'status';

    /**
     * Fields received in create input that are part of META_DATA
     */
    public const ACCOUNT_ID = 'account_id';
    public const AMOUNT = 'amount';
    public const AUTH_LINK_ID = 'auth_link_id';
    public const CONVENIENCE_FEE = 'convenience_fee';
    public const CURRENCY = 'currency';
    public const CUSTOMER_ID = 'customer_id';
    public const DESCRIPTION = 'description';
    public const FEE = 'fee';
    public const IP = 'ip';
    public const METHOD = 'method';
    public const NAME = 'name';
    public const NOTES = 'notes';
    public const OFFER_ID = 'offer_id';
    public const PAYABLE_AMOUNT = 'payable_amount';
    public const PAYMENT_LINK_ID = 'payment_link_id';
    public const RECEIVER_TYPE = 'receiver_type';
    public const SIGNATURE = 'signature';
    public const UPI = 'upi';
    public const USER_AGENT = 'user_agent';

    /**
     * Fields used internally that are added to META_DATA
     */
    public const DISCOUNTED_AMOUNT = 'discounted_amount';
    public const DISCOUNT = 'discount';

    public const META_DATA_ATTRIBUTES = [
        '_',
        self::ACCOUNT_ID,
        self::AMOUNT,
        self::AUTH_LINK_ID,
        self::CONVENIENCE_FEE,
        self::CURRENCY,
        self::CUSTOMER_ID,
        self::DESCRIPTION,
        self::DISCOUNTED_AMOUNT,
        self::DISCOUNT,
        self::FEE,
        self::IP,
        self::METHOD,
        self::NAME,
        self::NOTES,
        self::OFFER_ID,
        self::PAYMENT_LINK_ID,
        self::RECEIVER_TYPE,
        self::SIGNATURE,
        self::UPI,
        self::USER_AGENT,
    ];

    /**
     * Not including amount since it will be taken from gateway callback input
     * MerchantId taken from qr entity
     */
    public const CREATE_PAYMENT_ATTRIBUTES = [
        '_',
        self::CONTACT,
        self::CURRENCY,
        self::CUSTOMER_ID,
        self::DESCRIPTION,
        self::EMAIL,
        self::IP,
        self::METHOD,
        self::NOTES,
        self::OFFER_ID,
        self::ORDER_ID,
        self::PAYMENT_LINK_ID,
        self::UPI,
        self::USER_AGENT,
    ];

    /** @var string[] Id attribute to class mapping */
    protected const ID_ATTRIBUTES = [
        self::ACCOUNT_ID => Account::class,
        self::AUTH_LINK_ID => Invoice::class,
        self::CUSTOMER_ID => Customer::class,
        self::INVOICE_ID => Invoice::class,
        self::OFFER_ID => Offer::class,
        self::ORDER_ID => Order::class,
        self::PAYMENT_LINK_ID => PaymentLink::class,
    ];

    /**
     * Fields that will be modified before input validation.
     *
     * @var string[]
     *
     * @see modifyIdAttributes()
     */
    protected static $modifiers = [
        'id_attributes',
    ];

    /** @var array The attributes that should be mutated to dates. */
    protected $dates = [
        self::CLOSED_AT,
        self::CREATED_AT,
        self::EXPIRE_AT,
        self::UPDATED_AT,
    ];

    protected $entity = ConstantsEntity::CHECKOUT_ORDER;

    /** @var string The table associated with the model. */
    protected $table = Table::CHECKOUT_ORDER;

    /** @var array The attributes that should be cast to native types. */
    protected $casts = [
        self::META_DATA => 'json',
    ];

    /** @var array The default value for attributes to be set during building the entity */
    protected $defaults = [
        self::CLOSED_AT => null,
        self::CLOSE_REASON => null,
        self::EXPIRE_AT => null,
        self::STATUS => Status::ACTIVE,
    ];

    /** @var string[] The attributes that are mass assignable. */
    protected $fillable = [
        self::CHECKOUT_ID,
        self::CONTACT,
        self::CUSTOMER_ID,
        self::EMAIL,
        self::INVOICE_ID,
        self::ORDER_ID,
    ];

    /**
     * @inheritDoc
     */
    protected $public = [
        self::ID,
        self::CHECKOUT_ID,
        self::CLOSED_AT,
        self::CLOSE_REASON,
        self::EXPIRE_AT,
        self::INVOICE_ID,
        self::ORDER_ID,
        self::STATUS,
    ];

    /** @var array The attributes which have a setPublicAttribute() setter methods defined */
    protected $publicSetters = [
        self::ACCOUNT_ID,
        self::CUSTOMER_ID,
        self::ENTITY,
        self::INVOICE_ID,
        self::OFFER_ID,
        self::ORDER_ID,
        self::PAYMENT_LINK_ID,
    ];

    /** @var array The attributes that should be visible in serialization. */
    protected $visible = [
        self::ID,
        self::CHECKOUT_ID,
        self::CLOSED_AT,
        self::CLOSE_REASON,
        self::EXPIRE_AT,
        self::INVOICE_ID,
        self::ORDER_ID,
        self::STATUS,
    ];

    /**
     * Relations to ignore while checking existence of associated entities
     * while saving current entity.
     *
     * @var array
     */
    protected $ignoredRelations = [
        // Order is ignored as it's an external entity that comes from PG Router
        // and isn't present in API DB
        ConstantsEntity::ORDER,
    ];

    /**
     * Fields which will be generated during build
     *
     * @var string[]
     *
     * @see self::generateExpireAt()
     * @see self::generateMetaData()
     */
    protected static $generators = [
        self::ID,
        self::EXPIRE_AT,
        self::META_DATA,
    ];

    protected static $unsetCreateInput = self::META_DATA_ATTRIBUTES;

    public function toArrayPrivate(): array
    {
        return array_merge($this->toArray(), [
            self::EMAIL     => $this->email,
            self::CONTACT   => $this->contact,
            self::META_DATA => $this->meta_data,
        ]);
    }

    public function toArrayAdmin(): array
    {
        $data = parent::toArrayAdmin();

        $metaData = $this->getAttribute(self::META_DATA);

        // This removes unnecessary meta data like user agent, env, flow, library etc.
        // which is not required on admin dashboard.
        unset($metaData['_'], $metaData[self::USER_AGENT]);

        return array_merge($data, [
            self::PAYABLE_AMOUNT => $this->getFinalAmount(),
            self::MERCHANT_ID    => $this->merchant_id,
            self::CONTACT        => $this->contact,
            self::EMAIL          => $this->email,
            self::RECEIVER_TYPE  => $this->getReceiverType(),
            self::META_DATA      => json_encode($metaData),
        ]);
    }

    public function isClosed(): bool
    {
        return Carbon::now()->getTimestamp() >= $this->getExpireAt() ||
            in_array($this->status, [Status::CLOSED, Status::PAID], true);
    }

    public function isPaid(): bool
    {
        return $this->status === Status::PAID;
    }

    /**
     * Checks and returns if an offer is applied on the CheckoutOrder.
     * Assumes that an offerId would be unset if it isn't applied.
     *
     * @return bool
     */
    public function isOfferApplied(): bool
    {
        return $this->getOfferId() !== '';
    }

    public function isQrCodeOrder(): bool
    {
        return ($this->getAttribute(self::META_DATA)[self::RECEIVER_TYPE] ?? '') === ConstantsEntity::QR_CODE;
    }

    // ------------------------------ RELATIONSHIPS START ------------------------------

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, self::ORDER_ID);
    }

    public function invoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class, self::INVOICE_ID);
    }

    public function merchant(): BelongsTo
    {
        return $this->belongsTo(Merchant::class, self::MERCHANT_ID);
    }

    // ------------------------------ RELATIONSHIPS END ------------------------------
    // --------------------------------------------------------------------------------
    // ------------------------------ GENERATORS START ------------------------------

    /**
     * @param array $input
     *
     * @return void
     */
    protected function generateExpireAt(array &$input): void
    {
        $expireAt = Carbon::now()->addSeconds(720)->getTimestamp(); // Default 12 minutes

        if (!empty($input[self::EXPIRE_AT])) {
            $expireAt = $input[self::EXPIRE_AT];

            unset($input[self::EXPIRE_AT]);
        }

        $this->setAttribute(self::EXPIRE_AT, $expireAt);
    }

    /**
     * @param array $input
     *
     * @return void
     */
    protected function generateMetaData(array &$input): void
    {
        $metaData = [];

        foreach (self::META_DATA_ATTRIBUTES as $attributeKey)
        {
            if (array_key_exists($attributeKey, $input)) {
                $metaData[$attributeKey] = $input[$attributeKey];

                unset($input[$attributeKey]);
            }
        }

        $this->setAttribute(self::META_DATA, $metaData);
    }

    // ------------------------------ GENERATORS END ------------------------------
    // --------------------------------------------------------------------------------
    // ------------------------------ GETTERS START ------------------------------

    public function getAccountId(): string
    {
        return $this->getAttribute(self::META_DATA)[self::ACCOUNT_ID] ?? '';
    }

    /**
     * Return's the amount passed in the input if order_id isn't present.
     * Returns Order's due amount if order_id is associated.
     *
     * NOTE: Please don't use this method for creating payment unless an
     *       offer is applied. Use getFinalAmount() instead.
     *
     * @see self::getFinalAmount()
     *
     * @return int
     */
    public function getAmount(): int
    {
        if (empty($this->order)) {
            return (int) ($this->getAttribute(self::META_DATA)[self::AMOUNT] ?? 0);
        }

        return $this->order->getAmountDue();
    }

    public function getClosedAt()
    {
        return $this->getAttribute(self::CLOSED_AT);
    }

    public function getCustomerId(): string
    {
        return $this->getAttribute(self::META_DATA)[self::CUSTOMER_ID] ?? '';
    }

    public function getDescription(): string
    {
        return $this->getAttribute(self::META_DATA)[self::DESCRIPTION] ?? '';
    }

    public function getDiscountedAmount(): int
    {
        $metaData = $this->getAttribute(self::META_DATA);

        return $metaData[self::DISCOUNTED_AMOUNT] ?? $this->getAmount();
    }

    public function getExpireAt(): int
    {
        return $this->getAttribute(self::EXPIRE_AT);
    }

    /**
     * Get the final amount that should be charged to the end user
     *
     * (Final Amount) = Amount - Discount + Fees
     *
     * @return int
     */
    public function getFinalAmount(): int
    {
        return $this->getDiscountedAmount(); // + Fees (To be added in future)
    }

    public function getName(): string
    {
        return $this->getAttribute(self::META_DATA)[self::NAME] ?? '';
    }

    public function getPaymentLinkId():string
    {
        return $this->getAttribute(self::META_DATA)[self::PAYMENT_LINK_ID] ?? '';
    }

    /**
     * @inheritDoc
     */
    public function getNotes(): ?Notes
    {
        $jsonNotes = $this->getNotesJson();

        if (empty($jsonNotes)) {
            return null;
        }

        return $this->getNotesAttribute($jsonNotes);
    }

    /**
     * @inheritDoc
     */
    public function getNotesJson(): string
    {
        return json_encode($this->getNotesArray());
    }

    /**
     * Return Notes object as an array
     *
     * @return array
     */
    public function getNotesArray(): array
    {
        return $this->getAttribute(self::META_DATA)[self::NOTES] ?? [];
    }

    public function getOfferId(): string
    {
        return $this->getAttribute(self::META_DATA)[self::OFFER_ID] ?? '';
    }

    public function getReceiverType(): string
    {
        return $this->getAttribute(self::META_DATA)[self::RECEIVER_TYPE] ?? '';
    }

    public function getMethod(): string
    {
        return $this->getAttribute(self::META_DATA)[self::METHOD] ?? '';
    }

    // ------------------------------ GETTERS END ------------------------------
    // --------------------------------------------------------------------------------
    // ------------------------------ SETTERS START ------------------------------

    public function setCloseReason(string $closeReason): void
    {
        CloseReason::checkCloseReason($closeReason);

        $this->setAttribute(self::CLOSE_REASON, $closeReason);
    }

    public function setDiscountedAmount(int $discountedAmount): void
    {
        $this->setAttribute(self::META_DATA . '->' . self::DISCOUNTED_AMOUNT, $discountedAmount);
    }

    public function setDiscount(int $discount): void
    {
        $this->setAttribute(self::META_DATA . '->' . self::DISCOUNT, $discount);
    }

    public function setOfferId(string $offerId): void
    {
        $this->setAttribute(self::META_DATA . '->' . self::OFFER_ID, $offerId);
    }

    public function setStatus(string $status): void
    {
        Status::checkStatus($status);

        $this->setAttribute(self::STATUS, $status);
    }

    protected function setNotesAttribute($notes)
    {
        parent::setNotesAttribute($notes);

        $this->setAttribute(self::META_DATA . '->' . self::NOTES, $this->attributes[self::NOTES]);

        unset($this->attributes[self::NOTES]);
    }

    public function setClosedAt(int $closedAt): void
    {
        $this->setAttribute(self::CLOSED_AT, $closedAt);
    }

    // ------------------------ PUBLIC ID SETTERS START ------------------------

    public function setPublicAccountIdAttribute(array &$attributes): void
    {
        $attributes[self::ACCOUNT_ID] = MerchantAccount::getSignedIdOrNull($this->getAccountId());
    }

    public function setPublicCustomerIdAttribute(array &$attributes): void
    {
        $attributes[self::CUSTOMER_ID] = Customer::getSignedIdOrNull($this->getCustomerId());
    }

    public function setPublicInvoiceIdAttribute(array &$attributes): void
    {
        $attributes[self::INVOICE_ID] = Invoice::getSignedIdOrNull($this->invoice_id);
    }

    public function setPublicOfferIdAttribute(array &$attributes): void
    {
        $attributes[self::OFFER_ID] = Offer::getSignedIdOrNull($this->getOfferId());
    }

    public function setPublicOrderIdAttribute(array &$attributes): void
    {
        $attributes[self::ORDER_ID] = Order::getSignedIdOrNull($this->order_id);
    }

    public function setPublicPaymentLinkIdAttribute(array &$attributes): void
    {
        $attributes[self::PAYMENT_LINK_ID] = PaymentLink::getSignedIdOrNull($this->getPaymentLinkId());
    }

    // ------------------------ PUBLIC ID SETTERS END ------------------------

    public function unsetOfferId(): void
    {
        $metaData = $this->getAttribute(self::META_DATA);

        unset($metaData[self::OFFER_ID]);

        $this->setAttribute(self::META_DATA, $metaData);
    }

    // ------------------------------ SETTERS END ------------------------------
    // --------------------------------------------------------------------------------
    // ---------------------------- MODIFIERS START ----------------------------

    protected function modifyIdAttributes(array &$input): void
    {
        foreach (self::ID_ATTRIBUTES as $attribute => $class) {
            if (array_key_exists($attribute, $input)) {
                $input[$attribute] = $class::verifyIdAndSilentlyStripSign($input[$attribute]);
            }
        }
    }

    // ---------------------------- MODIFIERS END ----------------------------
}
