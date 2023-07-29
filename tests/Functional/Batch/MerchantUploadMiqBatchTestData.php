<?php

namespace RZP\Tests\Functional\Batch;

use RZP\Error\ErrorCode;
use RZP\Models\Batch\Header;
use RZP\Error\PublicErrorCode;
use RZP\Error\PublicErrorDescription;

return [
    'testValidateFileEntryMerchantUploadMIQSuccess' => [
        'request'  => [
            'url'     => '/admin/batches/validate',
            'method'  => 'post',
            'content' => [
                'type'     => 'merchant_upload_miq',
            ],
        ],
        'response' => [
            'content' => [
                'processable_count' => 1,
                'error_count'       => 0,
            ],
        ],
    ],

    'testValidateFileHeaderMerchantUploadMIQFailed' => [
        'request'  => [
            'url'     => '/admin/batches/validate',
            'method'  => 'post',
            'content' => [
                'type'     => 'merchant_upload_miq',
            ],
        ],
        'response' => [
            'content' => [
                'error' => [
                    'code'        => PublicErrorCode::BAD_REQUEST_ERROR,
                    'description' => PublicErrorDescription::BAD_REQUEST_BATCH_FILE_INVALID_HEADERS,
                ],
            ],
            'status_code' => 400,
        ],
        'exception' => [
            'class' => 'RZP\Exception\BadRequestException',
            'internal_error_code' => ErrorCode::BAD_REQUEST_BATCH_FILE_INVALID_HEADERS,
        ],
    ],

    'testValidateHTTPSProtocolMerchantUploadMIQFailed' => [
        'request'  => [
            'url'     => '/admin/batches/validate',
            'method'  => 'post',
            'content' => [
                'type'     => 'merchant_upload_miq',
            ],
        ],
        'response' => [
            'content' => [
                'processable_count' => 0,
                'error_count'       => 1,
            ],
        ],
    ],

    'testValidateWebsiteDetailMerchantUploadMIQSuccess' => [
        'request'  => [
            'url'     => '/admin/batches/validate',
            'method'  => 'post',
            'content' => [
                'type'     => 'merchant_upload_miq',
            ],
        ],
        'response' => [
            'content' => [
                'processable_count' => 1,
                'error_count'       => 0,
            ],
        ],
    ],

    'testValidateWebsiteDetailMerchantUploadMIQFailed' => [
        'request'  => [
            'url'     => '/admin/batches/validate',
            'method'  => 'post',
            'content' => [
                'type'     => 'merchant_upload_miq',
            ],
        ],
        'response' => [
            'content' => [
                'processable_count' => 0,
                'error_count'       => 1,
            ],
        ],
    ],

    'testValidateBusinessTypeMerchantUploadMIQFailed' => [
        'request'  => [
            'url'     => '/admin/batches/validate',
            'method'  => 'post',
            'content' => [
                'type'     => 'merchant_upload_miq',
            ],
        ],
        'response' => [
            'content' => [
                'processable_count' => 0,
                'error_count'       => 1,
            ],
        ],
    ],

    'testValidateInputMerchantUploadMIQFailed' => [
        'request'  => [
            'url'     => '/admin/batches/validate',
            'method'  => 'post',
            'content' => [
                'type'     => 'merchant_upload_miq',
            ],
        ],
        'response' => [
            'content' => [
                'processable_count' => 0,
                'error_count'       => 3,
            ],
        ],
    ],

    'testCreateBatchMerchantUploadMIQSuccess' => [
        'request'  => [
            'url'     => '/admin/batches',
            'method'  => 'post',
            'content' => [
                'type'     => 'merchant_upload_miq',
            ],
        ],
        'response' => [
            'content' => [
                'type'             => 'merchant_upload_miq',
                'total_count'      => 1,
                'status'           => 'created',
                'processed_amount' => 0,
            ],
        ],
    ],

    'testCreateBatchMerchantUploadMIQInvalidPermission' => [
        'request'  => [
            'url'     => '/admin/batches',
            'method'  => 'post',
            'content' => [
                'type'     => 'merchant_upload_miq',
            ],
        ],
        'response' => [
            'content' => [
                'error' => [
                    'code'        => PublicErrorCode::BAD_REQUEST_ERROR,
                    'description' => PublicErrorDescription::BAD_REQUEST_REQUIRED_PERMISSION_NOT_FOUND,
                ],
            ],
            'status_code' => 400,
        ],
        'exception' => [
            'class'               => 'RZP\Exception\BadRequestException',
            'internal_error_code' => ErrorCode::BAD_REQUEST_REQUIRED_PERMISSION_NOT_FOUND,
        ],
    ],

    'testCreateMerchantUploadMIQSuccess' => [
        'request'  => [
            'url'     => '/merchant/upload_miq/batch',
            'method'  => 'post',
            'content' => [
                Header::MIQ_MERCHANT_NAME                 => 'vas merchant',
                Header::MIQ_DBA_NAME                      => 'vas merchant',
                Header::MIQ_WEBSITE                       => 'https://razorpay.com',
                Header::MIQ_WEBSITE_ABOUT_US              => 'https://razorpay.com',
                Header::MIQ_WEBSITE_TERMS_CONDITIONS      => 'https://razorpay.com',
                Header::MIQ_WEBSITE_CONTACT_US            => 'https://razorpay.com',
                Header::MIQ_WEBSITE_PRIVACY_POLICY        => 'https://razorpay.com',
                Header::MIQ_WEBSITE_PRODUCT_PRICING       => 'https://razorpay.com',
                Header::MIQ_WEBSITE_REFUNDS               => 'https://razorpay.com',
                Header::MIQ_WEBSITE_CANCELLATION          => 'https://razorpay.com',
                Header::MIQ_WEBSITE_SHIPPING_DELIVERY     => 'https://razorpay.com',
                Header::MIQ_CONTACT_NAME                  => 'upload miq',
                Header::MIQ_CONTACT_EMAIL                 => 'banking-pod1@razorpay.com',
                Header::MIQ_TXN_REPORT_EMAIL              => 'banking-pod1@razorpay.com',
                Header::MIQ_ADDRESS                       => 'rzp,1st Floor, SJR',
                Header::MIQ_CITY                          => 'Bengaluru',
                Header::MIQ_PIN_CODE                      => '560030',
                Header::MIQ_STATE                         => 'Karnataka',
                Header::MIQ_CONTACT_NUMBER                => '9999999999',
                Header::MIQ_BUSINESS_TYPE                 => 'Trust',
                Header::MIQ_CIN                           => 'U67190TN2014PTC096978',
                Header::MIQ_BUSINESS_PAN                  => 'AARCA5484G',
                Header::MIQ_BUSINESS_NAME                 => 'ABC Ltd',
                Header::MIQ_AUTHORISED_SIGNATORY_PAN      => 'BOVPD4792K',
                Header::MIQ_PAN_OWNER_NAME                => 'AKASH DEEP',
                Header::MIQ_BUSINESS_CATEGORY             => 'ecommerce',
                Header::MIQ_SUB_CATEGORY                  => 'ecommerce_marketplace',
                Header::MIQ_GSTIN                         => '27AAAATO288L1Z6',
                Header::MIQ_BUSINESS_DESCRIPTION          => 'Merchant is into apparel business , dealing on ecommerce model.',
                Header::MIQ_ESTD_DATE                     => '1990-04-12',
                Header::MIQ_FEE_MODEL                     => 'prepaid',
                Header::MIQ_NB_FEE_TYPE                   => 'flat',
                Header::MIQ_NB_FEE_BEARER                 => 'Platform',
                Header::MIQ_AXIS                          => 10,
                Header::MIQ_HDFC                          => 9,
                Header::MIQ_ICICI                         => 7,
                Header::MIQ_SBI                           => 23,
                Header::MIQ_YES                           => 12,
                Header::MIQ_NB_ANY                        => 2,
                Header::MIQ_DEBIT_CARD_FEE_TYPE           => 'flat',
                Header::MIQ_DEBIT_CARD_FEE_BEARER         => 'Platform',
                Header::MIQ_DEBIT_CARD_0_2K               => 2,
                Header::MIQ_DEBIT_CARD_2K_1CR             => 5,
                Header::MIQ_RUPAY_FEE_TYPE                => 'flat',
                Header::MIQ_RUPAY_FEE_BEARER              => 'Platform',
                Header::MIQ_RUPAY_0_2K                    => 3,
                Header::MIQ_RUPAY_2K_1CR                  => 3,
                Header::MIQ_UPI_FEE_TYPE                  => 'flat',
                Header::MIQ_UPI_FEE_BEARER                => 'Platform',
                Header::MIQ_UPI                           => 23,
                Header::MIQ_WALLETS_FEE_TYPE              => 'flat',
                Header::MIQ_WALLETS_FEE_BEARER            => 'Platform',
                Header::MIQ_WALLETS_FREECHARGE            => 4,
                Header::MIQ_WALLETS_ANY                   => 2,
                Header::MIQ_CREDIT_CARD_FEE_TYPE          => 'flat',
                Header::MIQ_CREDIT_CARD_FEE_BEARER        => 'Platform',
                Header::MIQ_CREDIT_CARD_0_2K              => 3,
                Header::MIQ_CREDIT_CARD_2K_1CR            => 2,
                Header::MIQ_INTERNATIONAL                 => 'yes',
                Header::MIQ_INTL_CARD_FEE_TYPE            => 'flat',
                Header::MIQ_INTL_CARD_FEE_BEARER          => 'Platform',
                Header::MIQ_INTERNATIONAL_CARD            => 30,
                Header::MIQ_BUSINESS_FEE_TYPE             => 'flat',
                Header::MIQ_BUSINESS_FEE_BEARER           => 'Platform',
                Header::MIQ_BUSINESS                      => 5,
                Header::MIQ_BANK_ACC_NUMBER               => '921010040934567',
                Header::MIQ_BENEFICIARY_NAME              => 'ABC LTD',
                Header::MIQ_BRANCH_IFSC_CODE              => 'UTIB0004651',
                'org_id'                                  =>  "org_100000razorpay",
            ],
        ],
        'response' => [
            'content' => [
                Header::MIQ_OUT_FEE_BEARER              => 'platform',
                Header::MIQ_MERCHANT_NAME               => 'vas merchant',
                Header::MIQ_CONTACT_EMAIL               => 'banking-pod1@razorpay.com',
                Header::STATUS                          => 'success',
            ],
        ],
    ],

    'testCreateMerchantUploadMIQFailed' => [
        'request'  => [
            'url'     => '/merchant/upload_miq/batch',
            'method'  => 'post',
            'content' => [
                Header::MIQ_MERCHANT_NAME                 => 'vas merchant',
                Header::MIQ_DBA_NAME                      => 'vas merchant',
                Header::MIQ_WEBSITE                       => 'https://razorpay.com',
                Header::MIQ_WEBSITE_ABOUT_US              => 'https://razorpay.com',
                Header::MIQ_WEBSITE_TERMS_CONDITIONS      => 'https://razorpay.com',
                Header::MIQ_WEBSITE_CONTACT_US            => 'https://razorpay.com',
                Header::MIQ_WEBSITE_PRIVACY_POLICY        => 'https://razorpay.com',
                Header::MIQ_WEBSITE_PRODUCT_PRICING       => 'https://razorpay.com',
                Header::MIQ_WEBSITE_REFUNDS               => 'https://razorpay.com',
                Header::MIQ_WEBSITE_CANCELLATION          => 'https://razorpay.com',
                Header::MIQ_WEBSITE_SHIPPING_DELIVERY     => 'https://razorpay.com',
                Header::MIQ_CONTACT_NAME                  => 'upload miq',
                Header::MIQ_CONTACT_EMAIL                 => 'banking-pod2@razorpay.com',
                Header::MIQ_TXN_REPORT_EMAIL              => 'banking-pod2@razorpay.com',
                Header::MIQ_ADDRESS                       => 'rzp,1st Floor, SJR',
                Header::MIQ_CITY                          => 'Bengaluru',
                Header::MIQ_PIN_CODE                      => '560030',
                Header::MIQ_STATE                         => 'Karnataka',
                Header::MIQ_CONTACT_NUMBER                => '9999999999',
                Header::MIQ_BUSINESS_TYPE                 => 'Trust',
                Header::MIQ_CIN                           => 'U67190TN2014PTC096978',
                Header::MIQ_BUSINESS_PAN                  => 'AARCA5484G',
                Header::MIQ_BUSINESS_NAME                 => 'ABC Ltd',
                Header::MIQ_AUTHORISED_SIGNATORY_PAN      => 'BOVPD4792K',
                Header::MIQ_PAN_OWNER_NAME                => 'AKASH DEEP',
                Header::MIQ_BUSINESS_CATEGORY             => 'E-Commerce-Test',
                Header::MIQ_SUB_CATEGORY                  => 'ecommerce_marketplace',
                Header::MIQ_GSTIN                         => '27AAAATO288L1Z6',
                Header::MIQ_BUSINESS_DESCRIPTION          => 'Merchant is into apparel business , dealing on ecommerce model.',
                Header::MIQ_ESTD_DATE                     => '1990-04-12',
                Header::MIQ_FEE_MODEL                     => 'Prepaid',
                Header::MIQ_NB_FEE_TYPE                   => 'flat',
                Header::MIQ_NB_FEE_BEARER                 => 'Platform',
                Header::MIQ_AXIS                          => 10,
                Header::MIQ_HDFC                          => 9,
                Header::MIQ_ICICI                         => 7,
                Header::MIQ_SBI                           => 23,
                Header::MIQ_YES                           => 12,
                Header::MIQ_NB_ANY                        => 2,
                Header::MIQ_DEBIT_CARD_FEE_TYPE           => 'flat',
                Header::MIQ_DEBIT_CARD_FEE_BEARER         => 'Platform',
                Header::MIQ_DEBIT_CARD_0_2K               => 2,
                Header::MIQ_DEBIT_CARD_2K_1CR             => 5,
                Header::MIQ_RUPAY_FEE_TYPE                => 'flat',
                Header::MIQ_RUPAY_FEE_BEARER              => 'Platform',
                Header::MIQ_RUPAY_0_2K                    => 3,
                Header::MIQ_RUPAY_2K_1CR                  => 3,
                Header::MIQ_UPI_FEE_TYPE                  => 'flat',
                Header::MIQ_UPI_FEE_BEARER                => 'Platform',
                Header::MIQ_UPI                           => 23,
                Header::MIQ_WALLETS_FEE_TYPE              => 'flat',
                Header::MIQ_WALLETS_FEE_BEARER            => 'Platform',
                Header::MIQ_WALLETS_FREECHARGE            => 4,
                Header::MIQ_WALLETS_ANY                   => 2,
                Header::MIQ_CREDIT_CARD_FEE_TYPE          => 'flat',
                Header::MIQ_CREDIT_CARD_FEE_BEARER        => 'Platform',
                Header::MIQ_CREDIT_CARD_0_2K              => 3,
                Header::MIQ_CREDIT_CARD_2K_1CR            => 2,
                Header::MIQ_INTERNATIONAL                 => 'yes',
                Header::MIQ_INTL_CARD_FEE_TYPE            => 'flat',
                Header::MIQ_INTL_CARD_FEE_BEARER          => 'Platform',
                Header::MIQ_INTERNATIONAL_CARD            => 30,
                Header::MIQ_BUSINESS_FEE_TYPE             => 'flat',
                Header::MIQ_BUSINESS_FEE_BEARER           => 'Platform',
                Header::MIQ_BUSINESS                      => 5,
                Header::MIQ_BANK_ACC_NUMBER               => '921010040934567',
                Header::MIQ_BENEFICIARY_NAME              => 'ABC LTD',
                Header::MIQ_BRANCH_IFSC_CODE              => 'UTIB0004651',
                'org_id'                                  =>  "org_100000razorpay",
            ],
        ],
        'response' => [
            'content' => [
                Header::STATUS                          => 'failure',
                Header::ERROR_CODE                      => 'BAD_REQUEST_ERROR',
                Header::ERROR_DESCRIPTION               => 'Invalid Business Category',
            ],
        ],
    ],

    'testCreateMerchantWithoutWebsiteDetailsSuccess' => [
        'request'  => [
            'url'     => '/merchant/upload_miq/batch',
            'method'  => 'post',
            'content' => [
                Header::MIQ_MERCHANT_NAME                 => 'vas merchant',
                Header::MIQ_DBA_NAME                      => 'vas merchant',
                Header::MIQ_WEBSITE                       => '',
                Header::MIQ_WEBSITE_ABOUT_US              => '',
                Header::MIQ_WEBSITE_TERMS_CONDITIONS      => '',
                Header::MIQ_WEBSITE_CONTACT_US            => '',
                Header::MIQ_WEBSITE_PRIVACY_POLICY        => '',
                Header::MIQ_WEBSITE_PRODUCT_PRICING       => '',
                Header::MIQ_WEBSITE_REFUNDS               => '',
                Header::MIQ_WEBSITE_CANCELLATION          => '',
                Header::MIQ_WEBSITE_SHIPPING_DELIVERY     => '',
                Header::MIQ_CONTACT_NAME                  => 'upload miq',
                Header::MIQ_CONTACT_EMAIL                 => 'banking-pod3@razorpay.com',
                Header::MIQ_TXN_REPORT_EMAIL              => 'banking-pod3@razorpay.com',
                Header::MIQ_ADDRESS                       => 'rzp,1st Floor, SJR',
                Header::MIQ_CITY                          => 'Bengaluru',
                Header::MIQ_PIN_CODE                      => '560030',
                Header::MIQ_STATE                         => 'Karnataka',
                Header::MIQ_CONTACT_NUMBER                => '9999999999',
                Header::MIQ_BUSINESS_TYPE                 => 'Trust',
                Header::MIQ_CIN                           => 'U67190TN2014PTC096978',
                Header::MIQ_BUSINESS_PAN                  => 'AARCA5484G',
                Header::MIQ_BUSINESS_NAME                 => 'ABC Ltd',
                Header::MIQ_AUTHORISED_SIGNATORY_PAN      => 'BOVPD4792K',
                Header::MIQ_PAN_OWNER_NAME                => 'AKASH DEEP',
                Header::MIQ_BUSINESS_CATEGORY             => 'ecommerce',
                Header::MIQ_SUB_CATEGORY                  => 'ecommerce_marketplace',
                Header::MIQ_GSTIN                         => '27AAAATO288L1Z6',
                Header::MIQ_BUSINESS_DESCRIPTION          => 'Merchant is into apparel business , dealing on ecommerce model.',
                Header::MIQ_ESTD_DATE                     => '1990-04-12',
                Header::MIQ_FEE_MODEL                     => 'prepaid',
                Header::MIQ_NB_FEE_TYPE                   => 'flat',
                Header::MIQ_NB_FEE_BEARER                 => 'Platform',
                Header::MIQ_AXIS                          => 10,
                Header::MIQ_HDFC                          => 9,
                Header::MIQ_ICICI                         => 7,
                Header::MIQ_SBI                           => 23,
                Header::MIQ_YES                           => 12,
                Header::MIQ_NB_ANY                        => 2,
                Header::MIQ_DEBIT_CARD_FEE_TYPE           => 'flat',
                Header::MIQ_DEBIT_CARD_FEE_BEARER         => 'Platform',
                Header::MIQ_DEBIT_CARD_0_2K               => 2,
                Header::MIQ_DEBIT_CARD_2K_1CR             => 5,
                Header::MIQ_RUPAY_FEE_TYPE                => 'flat',
                Header::MIQ_RUPAY_FEE_BEARER              => 'Platform',
                Header::MIQ_RUPAY_0_2K                    => 3,
                Header::MIQ_RUPAY_2K_1CR                  => 3,
                Header::MIQ_UPI_FEE_TYPE                  => 'flat',
                Header::MIQ_UPI_FEE_BEARER                => 'Platform',
                Header::MIQ_UPI                           => 23,
                Header::MIQ_WALLETS_FEE_TYPE              => 'flat',
                Header::MIQ_WALLETS_FEE_BEARER            => 'Platform',
                Header::MIQ_WALLETS_FREECHARGE            => 4,
                Header::MIQ_WALLETS_ANY                   => 2,
                Header::MIQ_CREDIT_CARD_FEE_TYPE          => 'flat',
                Header::MIQ_CREDIT_CARD_FEE_BEARER        => 'Platform',
                Header::MIQ_CREDIT_CARD_0_2K              => 3,
                Header::MIQ_CREDIT_CARD_2K_1CR            => 2,
                Header::MIQ_INTERNATIONAL                 => 'yes',
                Header::MIQ_INTL_CARD_FEE_TYPE            => 'flat',
                Header::MIQ_INTL_CARD_FEE_BEARER          => 'Platform',
                Header::MIQ_INTERNATIONAL_CARD            => 30,
                Header::MIQ_BUSINESS_FEE_TYPE             => 'flat',
                Header::MIQ_BUSINESS_FEE_BEARER           => 'Platform',
                Header::MIQ_BUSINESS                      => 5,
                Header::MIQ_BANK_ACC_NUMBER               => '921010040934567',
                Header::MIQ_BENEFICIARY_NAME              => 'ABC LTD',
                Header::MIQ_BRANCH_IFSC_CODE              => 'UTIB0004651',
                'org_id'                                  =>  "org_100000razorpay",
            ],
        ],
        'response' => [
            'content' => [
                Header::MIQ_OUT_FEE_BEARER              => 'platform',
                Header::MIQ_MERCHANT_NAME               => 'vas merchant',
                Header::MIQ_CONTACT_EMAIL               => 'banking-pod3@razorpay.com',
                Header::STATUS                          => 'success',
            ],
        ],
    ],

    'testCreateMerchantDynamicFeeBearerSuccess' => [
        'request'  => [
            'url'     => '/merchant/upload_miq/batch',
            'method'  => 'post',
            'content' => [
                Header::MIQ_MERCHANT_NAME                 => 'vas merchant',
                Header::MIQ_DBA_NAME                      => 'vas merchant',
                Header::MIQ_WEBSITE                       => 'https://razorpay.com',
                Header::MIQ_WEBSITE_ABOUT_US              => 'https://razorpay.com',
                Header::MIQ_WEBSITE_TERMS_CONDITIONS      => 'https://razorpay.com',
                Header::MIQ_WEBSITE_CONTACT_US            => 'https://razorpay.com',
                Header::MIQ_WEBSITE_PRIVACY_POLICY        => 'https://razorpay.com',
                Header::MIQ_WEBSITE_PRODUCT_PRICING       => 'https://razorpay.com',
                Header::MIQ_WEBSITE_REFUNDS               => 'https://razorpay.com',
                Header::MIQ_WEBSITE_CANCELLATION          => 'https://razorpay.com',
                Header::MIQ_WEBSITE_SHIPPING_DELIVERY     => 'https://razorpay.com',
                Header::MIQ_CONTACT_NAME                  => 'upload miq',
                Header::MIQ_CONTACT_EMAIL                 => 'banking-pod4@razorpay.com',
                Header::MIQ_TXN_REPORT_EMAIL              => 'banking-pod4@razorpay.com',
                Header::MIQ_ADDRESS                       => 'rzp,1st Floor, SJR',
                Header::MIQ_CITY                          => 'Bengaluru',
                Header::MIQ_PIN_CODE                      => '560030',
                Header::MIQ_STATE                         => 'Karnataka',
                Header::MIQ_CONTACT_NUMBER                => '9999999999',
                Header::MIQ_BUSINESS_TYPE                 => 'Trust',
                Header::MIQ_CIN                           => 'U67190TN2014PTC096978',
                Header::MIQ_BUSINESS_PAN                  => 'AARCA5484G',
                Header::MIQ_BUSINESS_NAME                 => 'ABC Ltd',
                Header::MIQ_AUTHORISED_SIGNATORY_PAN      => 'BOVPD4792K',
                Header::MIQ_PAN_OWNER_NAME                => 'AKASH DEEP',
                Header::MIQ_BUSINESS_CATEGORY             => 'ecommerce',
                Header::MIQ_SUB_CATEGORY                  => 'ecommerce_marketplace',
                Header::MIQ_GSTIN                         => '27AAAATO288L1Z6',
                Header::MIQ_BUSINESS_DESCRIPTION          => 'Merchant is into apparel business , dealing on ecommerce model.',
                Header::MIQ_ESTD_DATE                     => '1990-04-12',
                Header::MIQ_FEE_MODEL                     => 'Prepaid',
                Header::MIQ_NB_FEE_TYPE                   => 'Flat',
                Header::MIQ_NB_FEE_BEARER                 => 'Platform',
                Header::MIQ_AXIS                          => 10,
                Header::MIQ_HDFC                          => 9,
                Header::MIQ_ICICI                         => 7,
                Header::MIQ_SBI                           => 23,
                Header::MIQ_YES                           => 12,
                Header::MIQ_NB_ANY                        => 2,
                Header::MIQ_DEBIT_CARD_FEE_TYPE           => 'Flat',
                Header::MIQ_DEBIT_CARD_FEE_BEARER         => 'Platform',
                Header::MIQ_DEBIT_CARD_0_2K               => 2,
                Header::MIQ_DEBIT_CARD_2K_1CR             => 5,
                Header::MIQ_RUPAY_FEE_TYPE                => 'Flat',
                Header::MIQ_RUPAY_FEE_BEARER              => 'Platform',
                Header::MIQ_RUPAY_0_2K                    => 3,
                Header::MIQ_RUPAY_2K_1CR                  => 3,
                Header::MIQ_UPI_FEE_TYPE                  => 'Flat',
                Header::MIQ_UPI_FEE_BEARER                => 'Platform',
                Header::MIQ_UPI                           => 23,
                Header::MIQ_WALLETS_FEE_TYPE              => 'Flat',
                Header::MIQ_WALLETS_FEE_BEARER            => 'Platform',
                Header::MIQ_WALLETS_FREECHARGE            => 4,
                Header::MIQ_WALLETS_ANY                   => 2,
                Header::MIQ_CREDIT_CARD_FEE_TYPE          => 'Flat',
                Header::MIQ_CREDIT_CARD_FEE_BEARER        => 'Customer',
                Header::MIQ_CREDIT_CARD_0_2K              => 3,
                Header::MIQ_CREDIT_CARD_2K_1CR            => 2,
                Header::MIQ_INTERNATIONAL                 => 'yes',
                Header::MIQ_INTL_CARD_FEE_TYPE            => 'Flat',
                Header::MIQ_INTL_CARD_FEE_BEARER          => 'Platform',
                Header::MIQ_INTERNATIONAL_CARD            => 30,
                Header::MIQ_BUSINESS_FEE_TYPE             => 'Flat',
                Header::MIQ_BUSINESS_FEE_BEARER           => 'Platform',
                Header::MIQ_BUSINESS                      => 5,
                Header::MIQ_BANK_ACC_NUMBER               => '921010040934567',
                Header::MIQ_BENEFICIARY_NAME              => 'ABC LTD',
                Header::MIQ_BRANCH_IFSC_CODE              => 'UTIB0004651',
                'org_id'                                  =>  "org_100000razorpay",
            ],
        ],
        'response' => [
            'content' => [
                Header::MIQ_OUT_FEE_BEARER              => 'dynamic',
                Header::MIQ_MERCHANT_NAME               => 'vas merchant',
                Header::MIQ_CONTACT_EMAIL               => 'banking-pod4@razorpay.com',
                Header::STATUS                          => 'success',
            ],
        ],
    ],

    'testCreateMerchantWithoutPricingPlan' => [
        'request'  => [
            'url'     => '/merchant/upload_miq/batch',
            'method'  => 'post',
            'content' => [
                Header::MIQ_MERCHANT_NAME                 => 'vas merchant',
                Header::MIQ_DBA_NAME                      => 'vas merchant',
                Header::MIQ_WEBSITE                       => 'https://razorpay.com',
                Header::MIQ_WEBSITE_ABOUT_US              => 'https://razorpay.com',
                Header::MIQ_WEBSITE_TERMS_CONDITIONS      => 'https://razorpay.com',
                Header::MIQ_WEBSITE_CONTACT_US            => 'https://razorpay.com',
                Header::MIQ_WEBSITE_PRIVACY_POLICY        => 'https://razorpay.com',
                Header::MIQ_WEBSITE_PRODUCT_PRICING       => 'https://razorpay.com',
                Header::MIQ_WEBSITE_REFUNDS               => 'https://razorpay.com',
                Header::MIQ_WEBSITE_CANCELLATION          => 'https://razorpay.com',
                Header::MIQ_WEBSITE_SHIPPING_DELIVERY     => 'https://razorpay.com',
                Header::MIQ_CONTACT_NAME                  => 'upload miq',
                Header::MIQ_CONTACT_EMAIL                 => 'banking-pod5@razorpay.com',
                Header::MIQ_TXN_REPORT_EMAIL              => 'banking-pod5@razorpay.com',
                Header::MIQ_ADDRESS                       => 'rzp,1st Floor, SJR',
                Header::MIQ_CITY                          => 'Bengaluru',
                Header::MIQ_PIN_CODE                      => '560030',
                Header::MIQ_STATE                         => 'Karnataka',
                Header::MIQ_CONTACT_NUMBER                => '9999999999',
                Header::MIQ_BUSINESS_TYPE                 => 'Trust',
                Header::MIQ_CIN                           => 'U67190TN2014PTC096978',
                Header::MIQ_BUSINESS_PAN                  => 'AARCA5484G',
                Header::MIQ_BUSINESS_NAME                 => 'ABC Ltd',
                Header::MIQ_AUTHORISED_SIGNATORY_PAN      => 'BOVPD4792K',
                Header::MIQ_PAN_OWNER_NAME                => 'AKASH DEEP',
                Header::MIQ_BUSINESS_CATEGORY             => 'ecommerce',
                Header::MIQ_SUB_CATEGORY                  => 'ecommerce_marketplace',
                Header::MIQ_GSTIN                         => '27AAAATO288L1Z6',
                Header::MIQ_BUSINESS_DESCRIPTION          => 'Merchant is into apparel business , dealing on ecommerce model.',
                Header::MIQ_ESTD_DATE                     => '1990-04-12',
                Header::MIQ_FEE_MODEL                     => 'Prepaid',
                Header::MIQ_NB_FEE_TYPE                   => 'NA',
                Header::MIQ_NB_FEE_BEARER                 => '',
                Header::MIQ_AXIS                          => 0,
                Header::MIQ_HDFC                          => 0,
                Header::MIQ_ICICI                         => 0,
                Header::MIQ_SBI                           => 0,
                Header::MIQ_YES                           => 0,
                Header::MIQ_NB_ANY                        => 0,
                Header::MIQ_DEBIT_CARD_FEE_TYPE           => 'NA',
                Header::MIQ_DEBIT_CARD_FEE_BEARER         => '',
                Header::MIQ_DEBIT_CARD_0_2K               => 0,
                Header::MIQ_DEBIT_CARD_2K_1CR             => 0,
                Header::MIQ_RUPAY_FEE_TYPE                => 'NA',
                Header::MIQ_RUPAY_FEE_BEARER              => '',
                Header::MIQ_RUPAY_0_2K                    => 0,
                Header::MIQ_RUPAY_2K_1CR                  => 0,
                Header::MIQ_UPI_FEE_TYPE                  => 'NA',
                Header::MIQ_UPI_FEE_BEARER                => '',
                Header::MIQ_UPI                           => 0,
                Header::MIQ_WALLETS_FEE_TYPE              => 'NA',
                Header::MIQ_WALLETS_FEE_BEARER            => '',
                Header::MIQ_WALLETS_FREECHARGE            => 0,
                Header::MIQ_WALLETS_ANY                   => 0,
                Header::MIQ_CREDIT_CARD_FEE_TYPE          => 'NA',
                Header::MIQ_CREDIT_CARD_FEE_BEARER        => '',
                Header::MIQ_CREDIT_CARD_0_2K              => 0,
                Header::MIQ_CREDIT_CARD_2K_1CR            => 0,
                Header::MIQ_INTERNATIONAL                 => 'yes',
                Header::MIQ_INTL_CARD_FEE_TYPE            => 'NA',
                Header::MIQ_INTL_CARD_FEE_BEARER          => '',
                Header::MIQ_INTERNATIONAL_CARD            => 0,
                Header::MIQ_BUSINESS_FEE_TYPE             => 'NA',
                Header::MIQ_BUSINESS_FEE_BEARER           => '',
                Header::MIQ_BUSINESS                      => 0,
                Header::MIQ_BANK_ACC_NUMBER               => '921010040934567',
                Header::MIQ_BENEFICIARY_NAME              => 'ABC LTD',
                Header::MIQ_BRANCH_IFSC_CODE              => 'UTIB0004651',
                'org_id'                                  =>  "org_100000razorpay",
            ],
        ],
        'response' => [
            'content' => [
                Header::MIQ_OUT_FEE_BEARER              => 'platform', // default fee bearer
                Header::MIQ_MERCHANT_NAME               => 'vas merchant',
                Header::MIQ_CONTACT_EMAIL               => 'banking-pod5@razorpay.com',
                Header::STATUS                          => 'failure',
                Header::ERROR_CODE                      => 'BAD_REQUEST_ERROR',
                Header::ERROR_DESCRIPTION               => 'The rules field is required.',
            ],
        ],
    ],

    'testCreateMerchantWithKYCSuccess' => [
        'request'  => [
            'url'     => '/merchant/upload_miq/batch',
            'method'  => 'post',
            'content' => [
                Header::MIQ_MERCHANT_NAME                 => 'vas merchant',
                Header::MIQ_DBA_NAME                      => 'vas merchant',
                Header::MIQ_WEBSITE                       => 'https://razorpay.com',
                Header::MIQ_WEBSITE_ABOUT_US              => 'https://razorpay.com',
                Header::MIQ_WEBSITE_TERMS_CONDITIONS      => 'https://razorpay.com',
                Header::MIQ_WEBSITE_CONTACT_US            => 'https://razorpay.com',
                Header::MIQ_WEBSITE_PRIVACY_POLICY        => 'https://razorpay.com',
                Header::MIQ_WEBSITE_PRODUCT_PRICING       => 'https://razorpay.com',
                Header::MIQ_WEBSITE_REFUNDS               => 'https://razorpay.com',
                Header::MIQ_WEBSITE_CANCELLATION          => 'https://razorpay.com',
                Header::MIQ_WEBSITE_SHIPPING_DELIVERY     => 'https://razorpay.com',
                Header::MIQ_CONTACT_NAME                  => 'upload miq',
                Header::MIQ_CONTACT_EMAIL                 => 'banking-pod6@razorpay.com',
                Header::MIQ_TXN_REPORT_EMAIL              => 'banking-pod6@razorpay.com',
                Header::MIQ_ADDRESS                       => 'rzp,1st Floor, SJR',
                Header::MIQ_CITY                          => 'Bengaluru',
                Header::MIQ_PIN_CODE                      => '560030',
                Header::MIQ_STATE                         => 'Karnataka',
                Header::MIQ_CONTACT_NUMBER                => '9999999999',
                Header::MIQ_BUSINESS_TYPE                 => 'Trust',
                Header::MIQ_CIN                           => 'U67190TN2014PTC096978',
                Header::MIQ_BUSINESS_PAN                  => 'AARCA5484G',
                Header::MIQ_BUSINESS_NAME                 => 'ABC Ltd',
                Header::MIQ_AUTHORISED_SIGNATORY_PAN      => 'BOVPD4792K',
                Header::MIQ_PAN_OWNER_NAME                => 'AKASH DEEP',
                Header::MIQ_BUSINESS_CATEGORY             => 'ecommerce',
                Header::MIQ_SUB_CATEGORY                  => 'ecommerce_marketplace',
                Header::MIQ_GSTIN                         => '27AAAATO288L1Z6',
                Header::MIQ_BUSINESS_DESCRIPTION          => 'Merchant is into apparel business , dealing on ecommerce model.',
                Header::MIQ_ESTD_DATE                     => '1990-04-12',
                Header::MIQ_FEE_MODEL                     => 'Prepaid',
                Header::MIQ_NB_FEE_TYPE                   => 'NA',
                Header::MIQ_NB_FEE_BEARER                 => '',
                Header::MIQ_AXIS                          => 0,
                Header::MIQ_HDFC                          => 0,
                Header::MIQ_ICICI                         => 0,
                Header::MIQ_SBI                           => 0,
                Header::MIQ_YES                           => 0,
                Header::MIQ_NB_ANY                        => 0,
                Header::MIQ_DEBIT_CARD_FEE_TYPE           => 'NA',
                Header::MIQ_DEBIT_CARD_FEE_BEARER         => '',
                Header::MIQ_DEBIT_CARD_0_2K               => 0,
                Header::MIQ_DEBIT_CARD_2K_1CR             => 0,
                Header::MIQ_RUPAY_FEE_TYPE                => 'NA',
                Header::MIQ_RUPAY_FEE_BEARER              => '',
                Header::MIQ_RUPAY_0_2K                    => 0,
                Header::MIQ_RUPAY_2K_1CR                  => 0,
                Header::MIQ_UPI_FEE_TYPE                  => 'NA',
                Header::MIQ_UPI_FEE_BEARER                => '',
                Header::MIQ_UPI                           => 0,
                Header::MIQ_WALLETS_FEE_TYPE              => 'NA',
                Header::MIQ_WALLETS_FEE_BEARER            => '',
                Header::MIQ_WALLETS_FREECHARGE            => 0,
                Header::MIQ_WALLETS_ANY                   => 0,
                Header::MIQ_CREDIT_CARD_FEE_TYPE          => 'NA',
                Header::MIQ_CREDIT_CARD_FEE_BEARER        => '',
                Header::MIQ_CREDIT_CARD_0_2K              => 0,
                Header::MIQ_CREDIT_CARD_2K_1CR            => 0,
                Header::MIQ_INTERNATIONAL                 => 'yes',
                Header::MIQ_INTL_CARD_FEE_TYPE            => 'NA',
                Header::MIQ_INTL_CARD_FEE_BEARER          => '',
                Header::MIQ_INTERNATIONAL_CARD            => 0,
                Header::MIQ_BUSINESS_FEE_TYPE             => 'NA',
                Header::MIQ_BUSINESS_FEE_BEARER           => '',
                Header::MIQ_BUSINESS                      => 0,
                Header::MIQ_BANK_ACC_NUMBER               => '921010040934567',
                Header::MIQ_BENEFICIARY_NAME              => 'ABC LTD',
                Header::MIQ_BRANCH_IFSC_CODE              => 'UTIB0004651',
                'org_id'                                  =>  "org_100000razorpay",
            ],
        ],
        'response' => [
            'content' => [
                Header::MIQ_MERCHANT_NAME               => 'vas merchant',
                Header::MIQ_CONTACT_EMAIL               => 'banking-pod6@razorpay.com',
                Header::STATUS                          => 'failure',
                Header::ERROR_CODE                      => 'SERVER_ERROR',
                Header::ERROR_DESCRIPTION               => 'Failed to submit activation details',
            ],
        ],
    ],
];
