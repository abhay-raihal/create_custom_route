<?php

use RZP\Error\ErrorCode;
use RZP\Error\PublicErrorCode;
use RZP\Exception\BadRequestValidationFailureException;

return [
    'commonTestData' => [
        'request'  => [
            'url'     => '/fraud/bulk/buyer_risk',
            'method'  => 'post',
        ],
        'response' => [
            'content' => [
            ],
        ],
    ],

    'testNotifyPostBatch' => [
        'request'  => [
            'url'     => '/notify/fraud/bulk',
            'method'  => 'post',
            'content' => [
                'bucket_type'      => 'batch_service',
                'batch'            => [
                    'type'        => 'create_payment_fraud',
                    'merchant_id' => '100000Razorpay',
                    'id'          => '100000Razorpay',
                ],
                'settings'         => null,
                'download_file'    => false,
                'output_file_path' => 'testing/key/payment.csv',
            ],
        ],
        'response' => [
            'content' => [
                'success'   => true,
            ],
        ],
    ],

    'testNotifyPostBatchWithNotificationsDisabled' => [
        'request'  => [
            'url'     => '/notify/fraud/bulk',
            'method'  => 'post',
            'content' => [
                'bucket_type'      => 'batch_service',
                'batch'            => [
                    'type'        => 'create_payment_fraud',
                    'merchant_id' => '100000Razorpay',
                    'id'          => '100000Razorpay',
                ],
                'settings'         => null,
                'download_file'    => false,
                'output_file_path' => 'testing/key/payment.csv',
            ],
        ],
        'response' => [
            'content' => [
                'success'   => true,
            ],
        ],
    ],

    'testGetFraudAttributes' =>  [
        'request'  => [
            'url'     => '/payments/fraud/attributes',
            'method'  => 'get',
            'content' => [
                'payment_id'      => '100000Razorpay',
            ],
        ],
        'response' => [
            'content' =>  [],
        ]
    ],

    'testSavePaymentFraud' =>  [
        'request'  => [
            'url'     => '/payments/fraud',
            'method'  => 'post',
            'content' => [
                'payment_id'                => '100000Razorpay',
                'type'                      => '0',
                'sub_type'                  => null,
                'reported_to_issuer_at'     => 123456789,
                'reported_to_razorpay_at'   => 123456789,
                'has_chargeback'            => '1',
                'is_account_closed'         => 1,
                'amount'                    => 50.23,
                'currency'                  => 'INR',
                'reported_by'               => 'Visa',
                'skip_merchant_email'       => '0',
            ],
        ],
        'response' => [
            'content' =>  [],
        ]
    ],

    'testSavePaymentFraudValidationError' =>  [
        'request'  => [
            'url'     => '/payments/fraud',
            'method'  => 'post',
            'content' => [
                'payment_id'                => '100000Razorpay',
                'type'                      => '0',
                'sub_type'                  => null,
                'reported_to_issuer_at'     => 'ABC123456789',
                'reported_to_razorpay_at'   => 123456789,
                'has_chargeback'            => '1',
                'is_account_closed'         => 1,
                'amount'                    => 50,
                'currency'                  => 'INR',
                'reported_by'               => 'Visa',
                'skip_merchant_email'       => '0',
            ],
        ],
        'response'  => [
            'content'     => [
                'error' => [
                    'code'        => PublicErrorCode::BAD_REQUEST_ERROR,
                    'description' => 'The reported to issuer at must be an integer.'
                ],
            ],
            'status_code' => 400,
        ],
        'exception' => [
            'class'               => BadRequestValidationFailureException::class,
            'internal_error_code' => ErrorCode::BAD_REQUEST_VALIDATION_FAILURE,
        ],
    ],

    'testCreateFraudBatchSkipSendMail' => [
        'request'  => [
            'url'     => '/fraud/batch',
            'content' => [
                [
                    'error_reason'          =>  '',
                    'rrn'                   =>  '003373757389',
                    'currency'              =>  'USD',
                    'arn'                   =>  '02705601344033737573894',
                    'type'                  =>  '06 - CNP Fraud',
                    'sub_type'              =>  'N - PIN Not Used',
                    'amount_in_cents'       =>  '2975',
                    'reported_to_issuer_at' =>  '44694',
                    'chargeback_code'       =>  '001',
                    'base_amount'           =>  '29750',
                    'reported_by'           =>  'MasterCard',
                    'idempotency_key'       =>  '1234',
                    'send_mail'             =>  'N',
                    'reported_to_razorpay_at' => '44694',
                ],
            ],
            'server'    =>  [
                'HTTP_X_Batch_Id'    => '100000Razorpay',
            ]
        ],
        'response' => [
            'content' => [
                'entity'    => 'collection',
                'count'     => 1,
                'items'     => [
                    [
                        'ARN'                   =>  '02705601344033737573894',
                        'Payment ID'            =>  '10000000000002',
                        'Status'                =>  'Created',
                        'Error Reason'          =>  '',
                        'idempotency_key'       =>  '1234',
                        'success'               =>  'true',
                    ],
                ],
            ],
        ],
    ],

    'testCreateFraudBatchMastercard' => [
        'request'  => [
            'url'     => '/fraud/batch',
            'content' => [
                [
                    'error_reason'          =>  '',
                    'rrn'                   =>  '003373757389',
                    'currency'              =>  'USD',
                    'arn'                   =>  '02705601344033737573894',
                    'type'                  =>  '06 - CNP Fraud',
                    'sub_type'              =>  'N - PIN Not Used',
                    'amount_in_cents'       =>  '2975',
                    'reported_to_issuer_at' =>  1635552000,
                    'chargeback_code'       =>  '001',
                    'base_amount'           =>  '29750',
                    'reported_by'           =>  'MasterCard',
                    'idempotency_key'       =>  '1234',
                    'reported_to_razorpay_at'=> '1644624000',
                ],
            ],
            'server'    =>  [
                'HTTP_X_Batch_Id'    => 'C0zv9I46W4wiOq',
            ]
        ],
        'response' => [
            'content' => [
                'entity'    => 'collection',
                'count'     => 1,
                'items'     => [
                    [
                        'ARN'                   =>  '02705601344033737573894',
                        'Payment ID'            =>  '10000000000002',
                        'Status'                =>  'Created',
                        'Error Reason'          =>  '',
                        'idempotency_key'       =>  '1234',
                        'success'               =>  'true',
                    ],
                ],
            ],
        ],
    ],
    'testCreateFraudBatchVisa' => [
        'request'  => [
            'url'     => '/fraud/batch',
            'content' => [
                [
                    'error_reason'          =>  '',
                    'rrn'                   =>  '',
                    'currency'              =>  'USD',
                    'arn'                   =>  '74110751299033415520957',
                    'type'                  =>  '6',
                    'sub_type'              =>  '',
                    'amount_in_cents'       =>  '2694',
                    'reported_to_issuer_at' =>  '1644624000',
                    'chargeback_code'       =>  '',
                    'base_amount'           =>  '26940',
                    'reported_by'           =>  'Visa',
                    'idempotency_key'       =>  '1234',
                    'reported_to_razorpay_at'=> '1644624000',
                ],
                [
                    'error_reason'          =>  '',
                    'rrn'                   =>  '',
                    'currency'              =>  'USD',
                    'arn'                   =>  '74110751299033415520957',
                    'type'                  =>  '7',
                    'sub_type'              =>  '',
                    'amount_in_cents'       =>  '2694',
                    'reported_to_issuer_at' =>  '1644624000',
                    'chargeback_code'       =>  '',
                    'base_amount'           =>  '26940',
                    'reported_by'           =>  'Visa',
                    'idempotency_key'       =>  '1234',
                    'reported_to_razorpay_at'=> '1644624000',
                ],
                [
                    'error_reason'          =>  'ARN not found for the following row',
                    'rrn'                   =>  '',
                    'currency'              =>  'USD',
                    'arn'                   =>  '',
                    'type'                  =>  '7',
                    'sub_type'              =>  '',
                    'amount_in_cents'       =>  '2694',
                    'reported_to_issuer_at' =>  '',
                    'chargeback_code'       =>  '',
                    'base_amount'           =>  '26940',
                    'reported_by'           =>  'Visa',
                    'idempotency_key'       =>  '1234',
                    'reported_to_razorpay_at'=> '1644624000',
                ],
            ],
            'server'    =>  [
                'HTTP_X_Batch_Id'    => 'C0zv9I46W4wiOq',
            ]
        ],
        'response' => [
            'content' => [
                'entity'    => 'collection',
                'count'     => 3,
                'items'     => [
                    [
                        'ARN'                   =>  '74110751299033415520957',
                        'Payment ID'            =>  '10000000000002',
                        'Status'                =>  'Created',
                        'Error Reason'          =>  '',
                        'idempotency_key'       =>  '1234',
                        'success'               =>  'true',
                    ],
                    [
                        'ARN'           =>  '74110751299033415520957',
                        'Payment ID'    =>  '10000000000002',
                        'Status'        =>  'Updated',
                        'Error Reason'  =>  '',
                        'idempotency_key'       =>  '1234',
                        'success'               =>  'true',
                    ],
                    [
                        'ARN'                   => '',
                        'Payment ID'            => '',
                        'Fraud ID'              => '',
                        'Status'                => 'Failed',
                        'Error Reason'          => 'ARN not found for the following row',
                        'idempotency_key'       =>  '1234',
                        'success'               =>  'true',
                    ],
                ],
            ],
        ],
    ],

    'testCreateFraudBatchVisaDatalakeQueryFails' => [
        'request'  => [
            'url'     => '/fraud/batch',
            'content' => [
                [
                    'error_reason'          =>  '',
                    'rrn'                   =>  '',
                    'currency'              =>  'USD',
                    'arn'                   =>  '74110751299033415520957',
                    'type'                  =>  '6',
                    'sub_type'              =>  '',
                    'amount_in_cents'       =>  '2694',
                    'reported_to_issuer_at' =>  '',
                    'chargeback_code'       =>  '',
                    'base_amount'           =>  '26940',
                    'reported_by'           =>  'Visa',
                    'idempotency_key'       =>  '1234',
                ],
            ],
            'server'    =>  [
                'HTTP_X_Batch_Id'    => 'C0zv9I46W4wiOq',
            ]
        ],
        'response' => [
            'content' => [
                'entity'    => 'collection',
                'count'     => 1,
                'items'     => [
                    [
                        'ARN'                   => '74110751299033415520957',
                        'Payment ID'            => '',
                        'Fraud ID'              => '',
                        'Status'                => 'Failed',
                        'Error Reason'          => 'Failed to fetch payment_id from ARN or RRN',
                        'idempotency_key'       =>  '1234',
                        'success'               =>  'true',
                    ],
                ],
            ],
        ],
    ],

    'mastercard_file_data'  =>  [
        [
            'Transaction ID' => 'succ_459668303',
            'Date (Entered Date)' => '11/03/2021',
            'Date (Transaction Date)' => '10/29/2021',
            'Issuer' => '1001 - Capital One Bank (USA), National Associa',
            'Acquirer' => '23630 - RBL BANK LTD.',
            'Status' => 'Success',
            'Audit Control Number' => '001001130507935',
            'Fraud Type' => '06 - CNP Fraud',
            'Fraud Subtype' => 'N - PIN Not Used',
            'Card Number' => '517805******5685',
            'Card Product Code' => 'MPL',
            'Date (Post Date)' => '10/30/2021',
            'Transaction Currency Code' => 840,
            'Date (Settle Date)' => '11/01/2021',
            'Billing Currency Code' => 840,
            'Merchant Name' => 'RAZ*CREATIVE GIFTING S',
            'Merchant City Name' => 'New Delhi',
            'Merchant Country Code' => 'IN',
            'Merchant State Code' => '',
            'Merchant Province Code' => 'IND',
            'Merchant Postal Code' => 110014,
            'Merchant ID' => '38RR00000197367',
            'MCC' => '5193 - FLORIST SUPPLIES,NURSERY STOCK & FLOWERS',
            'Auth Response Code' => '00',
            'POS Entry Mode Code' => '81 - eComm',
            'Terminal ID' => '39R97367',
            'Chargeback Code' => '',
            'Acquirer Reference Number' => '02705601344033737573894',
            'Trace ID' => '',
            'Terminal Attendance Code' => '1 - Unattended Terminal',
            'Card Present Type Code' => '0 - Card Not Present',
            'Terminal Capability Code' => '6 - Key Entry Only',
            'Electronic Commerce Indicator' => '91 - No Secty Protocol',
            'CVC Code' => 'M',
            'Date (Fraud Report Date)' => '11/02/2021',
            'Account Device Code' => 3,
            'Secure Code' => '0 - UCAF Not Support by Merch',
            'Program Protocol' => '',
            'Directory Server ID' => '',
            'Token PAN Num' => '',
            'MC Built' => 'Y',
            'Submission Type' => 'FDA',
            'Banknet Reference Number' => 'RSY7HF',
            'Billing Currency Exponent' => 2,
            'Cardholder Presence Code' => '5 - CH Not Present (eComm)',
            'CAT Level Code' => '6 - CAT Level 6',
            'Payment Transaction Type Code' => '',
            'Switch Serial ID' => '',
            'Terminal Operating Environment Code' => '4 - Off Card Acceptor, Unattended',
            'Transaction Currency Exponent' => 2,
            'Transaction Type' => '00',
            'US Trans Amount' => 29.75,
            'Transaction Amount' => 29.75,
            'US Bill Amount' => 29.75,
            'Bill Amount' => 29.75,
            'flag' => 0,
            'reported_to_razorpay_at' => '2022-02-12'
        ],
        [
            'Transaction ID' => 'succ_459668303',
            'Date (Entered Date)' => 44694,
            'Date (Transaction Date)' => '10/29/2021',
            'Issuer' => '1001 - Capital One Bank (USA), National Associa',
            'Acquirer' => '23630 - RBL BANK LTD.',
            'Status' => 'Success',
            'Audit Control Number' => '001001130507935',
            'Fraud Type' => '06 - CNP Fraud',
            'Fraud Subtype' => 'N - PIN Not Used',
            'Card Number' => '517805******5685',
            'Card Product Code' => 'MPL',
            'Date (Post Date)' => '10/30/2021',
            'Transaction Currency Code' => 840,
            'Date (Settle Date)' => '11/01/2021',
            'Billing Currency Code' => 840,
            'Merchant Name' => 'RAZ*CREATIVE GIFTING S',
            'Merchant City Name' => 'New Delhi',
            'Merchant Country Code' => 'IN',
            'Merchant State Code' => '',
            'Merchant Province Code' => 'IND',
            'Merchant Postal Code' => 110014,
            'Merchant ID' => '38RR00000197367',
            'MCC' => '5193 - FLORIST SUPPLIES,NURSERY STOCK & FLOWERS',
            'Auth Response Code' => '00',
            'POS Entry Mode Code' => '81 - eComm',
            'Terminal ID' => '39R97367',
            'Chargeback Code' => '',
            'Acquirer Reference Number' => '02705601344033737573894',
            'Trace ID' => '',
            'Terminal Attendance Code' => '1 - Unattended Terminal',
            'Card Present Type Code' => '0 - Card Not Present',
            'Terminal Capability Code' => '6 - Key Entry Only',
            'Electronic Commerce Indicator' => '91 - No Secty Protocol',
            'CVC Code' => 'M',
            'Date (Fraud Report Date)' => '11/02/2021',
            'Account Device Code' => 3,
            'Secure Code' => '0 - UCAF Not Support by Merch',
            'Program Protocol' => '',
            'Directory Server ID' => '',
            'Token PAN Num' => '',
            'MC Built' => 'Y',
            'Submission Type' => 'FDA',
            'Banknet Reference Number' => 'RSY7HF',
            'Billing Currency Exponent' => 2,
            'Cardholder Presence Code' => '5 - CH Not Present (eComm)',
            'CAT Level Code' => '6 - CAT Level 6',
            'Payment Transaction Type Code' => '',
            'Switch Serial ID' => '',
            'Terminal Operating Environment Code' => '4 - Off Card Acceptor, Unattended',
            'Transaction Currency Exponent' => 2,
            'Transaction Type' => '00',
            'US Trans Amount' => 29.75,
            'Transaction Amount' => 29.75,
            'US Bill Amount' => 29.75,
            'Bill Amount' => 29.75,
            'flag' => 0,
            'reported_to_razorpay_at' => 44694,
        ],
    ],

    'visa_file_data'    =>  [
        [
            'Purchase Date' => '25-Oct-21',
            'Purchase Month' => 'Oct-21',
            'Fraud Post Date' => '28-Oct-21',
            'Fraud Post Month' => 'Oct-21',
            'Acquirer Reference Number' => '74110751299033415520957',
            'Acquirer BIN' => 411075,
            'Issuer BIN' => 453734,
            'ECI/MOTO' => 7,
            'RECURRING TRANSACTION' => 'NON-AUTHENTICATED SECRY TRAN            ',
            'POS Entry Mode' => 1,
            'KEY ENTERED' => 'KEY ENTERED                                  ',
            'Card Account Number Masked' => '453734xxxxxx7018',
            'MCC' => 5977,
            'MCc disc' => 'COSMETIC STORES',
            'Merchant Name' => 'RAZ*NIVEA',
            'Terminal ID' => '40R08221',
            'Card Acceptor ID' => '38RR00000208221',
            'Fraud Type Group' => 'Fraudulent Use of Account',
            'Fraud Type' => 6,
            'Domestic/International' => 'International       ',
            'Authorization Code' => 409143,
            'Metrics' => '',
            'Fraud Amount in Dollars' =>   '$26.94',
            'Fraud Count' => 1,
            'Fraud Amount' =>   26.94,
            'send_mail'     => 'N',
            'reported_to_razorpay_at' => 44694,
        ],
        [
            // should have error reason: arn not found for the following row
            'Purchase Date' => '25-Oct-21',
            'Purchase Month' => 'Oct-21',
            'Fraud Post Date' => '28-Oct-21',
            'Fraud Post Month' => 'Oct-21',
            'Acquirer Reference Number' => '',
            'Acquirer BIN' => 411075,
            'Issuer BIN' => 453734,
            'ECI/MOTO' => 7,
            'RECURRING TRANSACTION' => 'NON-AUTHENTICATED SECRY TRAN            ',
            'POS Entry Mode' => 1,
            'KEY ENTERED' => 'KEY ENTERED                                  ',
            'Card Account Number Masked' => '453734xxxxxx7018',
            'MCC' => 5977,
            'MCc disc' => 'COSMETIC STORES',
            'Merchant Name' => 'RAZ*NIVEA',
            'Terminal ID' => '40R08221',
            'Card Acceptor ID' => '38RR00000208221',
            'Fraud Type Group' => 'Fraudulent Use of Account',
            'Fraud Type' => 6,
            'Domestic/International' => 'International       ',
            'Authorization Code' => 409143,
            'Metrics' => '',
            'Fraud Amount in Dollars' =>   '$26.94',
            'Fraud Count' => 1,
            'Fraud Amount' =>   26.94,
            'send_mail' => 'Y',
        ],
        [
            'Purchase Date' => '25-Oct-21',
            'Purchase Month' => 'Oct-21',
            'Fraud Post Date' => '28-Oct-21',
            'Fraud Post Month' => 'Oct-21',
            'Acquirer Reference Number' => '74110751299033415520957',
            'Acquirer BIN' => 411075,
            'Issuer BIN' => 453734,
            'ECI/MOTO' => 7,
            'RECURRING TRANSACTION' => 'NON-AUTHENTICATED SECRY TRAN            ',
            'POS Entry Mode' => 1,
            'KEY ENTERED' => 'KEY ENTERED                                  ',
            'Card Account Number Masked' => '453734xxxxxx7018',
            'MCC' => 5977,
            'MCc disc' => 'COSMETIC STORES',
            'Merchant Name' => 'RAZ*NIVEA',
            'Terminal ID' => '40R08221',
            'Card Acceptor ID' => '38RR00000208221',
            'Fraud Type Group' => 'Fraudulent Use of Account',
            'Fraud Type' => 6,
            'Domestic/International' => 'International       ',
            'Authorization Code' => 409143,
            'Metrics' => '',
            'Fraud Amount in Dollars' =>   '$26.94',
            'Fraud Count' => 1,
            'Fraud Amount' =>   26.94,
            'send_mail'     => 'N',
        ],
    ],
];
