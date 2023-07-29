<?php

namespace RZP\Models\P2p\Transaction\Concern;

use RZP\Models\P2p\Base;
use RZP\Http\BasicAuth\Type as AuthType;

class Fetch extends Base\Fetch
{
    const RULES = [
        self::DEFAULTS => [
            Entity::ID                      => 'sometimes|string',
            Entity::TRANSACTION_ID          => 'sometimes|string',
            self::EXPAND_EACH               => 'filled|string|in:transaction.payee,transaction.payer,transaction.upi',
            Entity::DEVICE_ID               => 'sometimes|string',
            Entity::STATUS                  => 'sometimes|string',
            Entity::GATEWAY_REFERENCE_ID    => 'sometimes',
        ],
    ];

    const ACCESSES = [
        AuthType::PRIVATE_AUTH => [
            Entity::TRANSACTION_ID,
            self::EXPAND_EACH,
            Entity::DEVICE_ID,
            Entity::STATUS,
        ],
    ];
}
