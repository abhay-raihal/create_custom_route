<?php

use RZP\Error\ErrorCode;
use RZP\Error\PublicErrorCode;
use RZP\Error\PublicErrorDescription;
use RZP\Exception\PaymentVerificationException;

return [
    'testPayment' => [
        'merchant_id'       => '10000000000000',
        'amount'            => 50000,
        'method'            => 'netbanking',
        'status'            => 'captured',
        'amount_authorized' => 50000,
        'amount_refunded'   => 0,
        'refund_status'     => null,
        'currency'          => 'INR',
        'description'       => 'random description',
        'card_id'           => null,
        'bank'              => 'JSFB',
        'error_code'        => null,
        'error_description' => null,
        'email'             => 'a@b.com',
        'contact'           => '+919918899029',
        'notes'             => [
            'merchant_order_id'   => 'random order id',
        ],
        'acquirer_data'     => [
            'bank_transaction_id' => '999999'
        ],
        'gateway'           => 'netbanking_jsb',
        'terminal_id'       => '1ShrdNBJSBFTml',
        'signed'            => false,
        'verified'          => null,
    ],

    'testPaymentMozartEntity' => [
        'action'            => 'authorize',
        'gateway'           => 'netbanking_jsb',
        'amount'            => 50000,
        'data'              => [
            'amount'            => 50000,
            'status'            => 'callback_successful',
            'bank_payment_id'   => '999999',
        ]
    ],

    'testTamperedAmount' => [
        'response'  => [
            'content'     => [
                'error'         => [
                    'code'              => PublicErrorCode::SERVER_ERROR,
                    'description'       => PublicErrorDescription::SERVER_ERROR,
                ],
            ],
            'status_code' => 500,
        ],
        'exception' => [
            'class'                     => 'RZP\Exception\LogicException',
            'internal_error_code'       => ErrorCode::SERVER_ERROR_AMOUNT_TAMPERED,
        ],
    ],

    'testPaymentIdMismatch' => [
        'response'  => [
            'content'     => [
                'error'         => [
                    'code'              => PublicErrorCode::SERVER_ERROR,
                    'description'       => PublicErrorDescription::SERVER_ERROR,
                ],
            ],
            'status_code' => 500,
        ],
        'exception' => [
            'class'                     => 'RZP\Exception\LogicException',
            'internal_error_code'       => ErrorCode::SERVER_ERROR_LOGICAL_ERROR,
        ],
    ],

    'testAuthFailed' => [
        'response'  => [
            'content'     => [
                'error'         => [
                    'code'              => PublicErrorCode::BAD_REQUEST_ERROR,
                    'description'       => "Your payment didn't go through as it was declined by the bank. Try another payment method or contact your bank.",
                ],
            ],
            'status_code' => 400,
        ],
        'exception' => [
            'class'                     => 'RZP\Exception\GatewayErrorException',
            'internal_error_code'       => ErrorCode::BAD_REQUEST_PAYMENT_FAILED,
        ],
    ],

    'testAuthSuccessVerifyFailed' => [
        'response'  => [
            'content'     => [
                'error' => [
                    'code'          => PublicErrorCode::BAD_REQUEST_ERROR,
                    'description'   => PublicErrorDescription::BAD_REQUEST_PAYMENT_VERIFICATION_FAILED,
                ],
            ],
            'status_code' => 400,
        ],
        'exception' => [
            'class'                 => RZP\Exception\PaymentVerificationException::class,
            'internal_error_code'   => ErrorCode::BAD_REQUEST_PAYMENT_VERIFICATION_FAILED,
        ],
    ],

    'testAuthFailedVerifySuccess' => [
        'response'  => [
            'content'     => [
                'error' => [
                    'code'          => PublicErrorCode::BAD_REQUEST_ERROR,
                    'description'   => PublicErrorDescription::BAD_REQUEST_PAYMENT_VERIFICATION_FAILED,
                ],
            ],
            'status_code' => 400,
        ],
        'exception' => [
            'class'                 => 'RZP\Exception\PaymentVerificationException',
            'internal_error_code'   => ErrorCode::BAD_REQUEST_PAYMENT_VERIFICATION_FAILED,
        ],
    ],
];