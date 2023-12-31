<?php

namespace RZP\Gateway\Upi\Yesbank;

use RZP\Error\ErrorCode;

class ResponseCodeMap
{
    const CODESMAP = [
        'MT01' => ErrorCode::GATEWAY_ERROR_PAYMENT_CREATION_FAILED,
        'MT02' => ErrorCode::GATEWAY_ERROR_PAYMENT_CREATION_FAILED,
        'MT03' => ErrorCode::BAD_REQUEST_PAYOUT_NOT_ENOUGH_BALANCE,
        'MT04' => ErrorCode::BAD_REQUEST_RATE_LIMIT_EXCEEDED,
        'MT05' => ErrorCode::BAD_REQUEST_PAYMENT_ACCOUNT_MAX_LIMIT_EXCEEDED,
        'MT06' => ErrorCode::BAD_REQUEST_ACCOUNT_CLOSED,
        'MT07' => ErrorCode::GATEWAY_ERROR_INACTIVE_DORMANT_REMITTER_ACCOUNT,
        'MT08' => ErrorCode::BAD_REQUEST_PAYMENT_PIN_INCORRECT,
        'MT09' => ErrorCode::GATEWAY_ERROR_INACTIVE_DORMANT_BENEFICIARY_ACCOUNT,
        'MT10' => ErrorCode::GATEWAY_ERROR_FATAL_ERROR, // not sure about mapping
        'MT11' => ErrorCode::GATEWAY_ERROR_BANK_ACCOUNT_CREDIT_PROCESS_FAILED,
        'MT12' => ErrorCode::GATEWAY_ERROR_FATAL_ERROR,
        'MT13' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_AMOUNT,
        'MT14' => ErrorCode::BAD_REQUEST_VPA_DOESNT_EXIST,
        'MT15' => ErrorCode::BAD_REQUEST_VPA_DOESNT_EXIST,
        'MT16' => ErrorCode::BAD_REQUEST_PAYMENT_UPI_COLLECT_REQUEST_REJECTED,
        'MT17' => ErrorCode::BAD_REQUEST_RETRY_ATTEMPT_LIMIT_EXCEEDED,
        'MT18' => ErrorCode::GATEWAY_ERROR_FATAL_ERROR,
        'MT19' => ErrorCode::GATEWAY_ERROR_BENEFICIARY_ACCOUNT_DOES_NOT_EXIST,
        'MT20' => ErrorCode::GATEWAY_ERROR_FATAL_ERROR,
        'MT21' => ErrorCode::GATEWAY_ERROR_REMITTER_CUTOFF_IN_PROGRESS,
        'MT22' => ErrorCode::GATEWAY_ERROR_BENEFICIARY_CUTOFF_IN_PROGRESS,
        'MT23' => ErrorCode::GATEWAY_ERROR_REMITTER_CBS_OFFLINE,
        'MT24' => ErrorCode::GATEWAY_ERROR_BENEFICIARY_CBS_OFFLINE,
        'MT25' => ErrorCode::GATEWAY_ERROR_VALIDATION_ERROR,
        'MT26' => ErrorCode::GATEWAY_ERROR_VALIDATION_ERROR,
        'MT27' => ErrorCode::GATEWAY_ERROR_BENEFICIARY_TRANSACTION_NOT_PERMITTED,
        'MT28' => ErrorCode::GATEWAY_ERROR_REMITTER_TRANSACTION_NOT_PERMITTED,
        'MT29' => ErrorCode::GATEWAY_ERROR_BENEFICIARY_TRANSACTION_NOT_PERMITTED,
        'MT30' => ErrorCode::GATEWAY_ERROR_BENEFICIARY_ACCOUNT_BLOCKED,
        'MT31' => ErrorCode::GATEWAY_ERROR_REMITTER_ACCOUNT_BLOCKED,
        'K1'  => ErrorCode::GATEWAY_ERROR_PAYMENT_DECLINED_BY_BANK_DUE_TO_RISK_REMITTER,
        'ZI'  => ErrorCode::GATEWAY_ERROR_PAYMENT_DECLINED_BY_BANK_DUE_TO_RISK_BENEFICARY,
        'ZD'  => ErrorCode::GATEWAY_ERROR_VALIDATION_ERROR,
        'ZR'  => ErrorCode::BAD_REQUEST_INCORRECT_OTP,
        'ZS'  => ErrorCode::BAD_REQUEST_PAYMENT_OTP_EXPIRED,
        'ZT'  => ErrorCode::BAD_REQUEST_OTP_MAXIMUM_ATTEMPTS_REACHED,
        'ZX'  => ErrorCode::GATEWAY_ERROR_REMITTER_ACCOUNT_BLOCKED,
        'XD'  => ErrorCode::GATEWAY_ERROR_REMITTER_INVALID_AMOUNT,
        'XF'  => ErrorCode::GATEWAY_ERROR_REMITTER_INVALID_FORMAT,
        'XH'  => ErrorCode::GATEWAY_ERROR_INACTIVE_DORMANT_REMITTER_ACCOUNT,
        'XL'  => ErrorCode::GATEWAY_ERROR_REMITTER_CARD_EXPIRED,
        'XN'  => ErrorCode::GATEWAY_ERROR_REMITTER_NO_CARD_RECORD,
        'XP'  => ErrorCode::GATEWAY_ERROR_REMITTER_TRANSACTION_NOT_PERMITTED,
        'XR'  => ErrorCode::GATEWAY_ERROR_REMITTER_TRANSACTION_NOT_PERMITTED,
        'XT'  => ErrorCode::GATEWAY_ERROR_REMITTER_CUTOFF_IN_PROGRESS,
        'XV'  => ErrorCode::GATEWAY_ERROR_REMITTER_TRANSACTION_NOT_PERMITTED,
        'XY'  => ErrorCode::GATEWAY_ERROR_REMITTER_CBS_OFFLINE,
        'YE'  => ErrorCode::GATEWAY_ERROR_REMITTER_ACCOUNT_BLOCKED,
        'Z5'  => ErrorCode::GATEWAY_ERROR_INVALID_BENEFICIARY_CREDENTIALS,
        'ZY'  => ErrorCode::GATEWAY_ERROR_INACTIVE_DORMANT_BENEFICIARY_ACCOUNT,
        'XE'  => ErrorCode::GATEWAY_ERROR_BENEFICIARY_INVALID_AMOUNT,
        'XG'  => ErrorCode::GATEWAY_ERROR_BENEFICIARY_INVALID_FORMAT,
        'XI'  => ErrorCode::GATEWAY_ERROR_BENEFICIARY_ACCOUNT_DOES_NOT_EXIST,
        'XM'  => ErrorCode::GATEWAY_ERROR_BENEFICIARY_EXPIRED_CARD,
        'XO'  => ErrorCode::GATEWAY_ERROR_BENEFICIARY_NO_CARD_RECORD,
        'XQ'  => ErrorCode::GATEWAY_ERROR_BENEFICIARY_TRANSACTION_NOT_PERMITTED,
        'XU'  => ErrorCode::GATEWAY_ERROR_BENEFICIARY_CUTOFF_IN_PROGRESS,
        'XW'  => ErrorCode::GATEWAY_ERROR_TRANSACTION_PENDING,
        'Y1'  => ErrorCode::GATEWAY_ERROR_REMITTER_CBS_OFFLINE,
        'YF'  => ErrorCode::GATEWAY_ERROR_BENEFICIARY_ACCOUNT_BLOCKED,
        'ZH'  => ErrorCode::BAD_REQUEST_PAYMENT_UPI_INVALID_VPA,
        'UT'  => ErrorCode::GATEWAY_ERROR_REQUEST_TIMEOUT,
        'BT'  => ErrorCode::GATEWAY_ERROR_REQUEST_TIMEOUT,
        'RB'  => ErrorCode::GATEWAY_ERROR_REQUEST_TIMEOUT,
        'RP'  => ErrorCode::GATEWAY_ERROR_REQUEST_TIMEOUT,
        'U01' => ErrorCode::GATEWAY_ERROR_PAYMENT_DUPLICATE_REQUEST,
        'U07' => ErrorCode::GATEWAY_ERROR_VALIDATION_ERROR,
        'U08' => ErrorCode::GATEWAY_ERROR_FATAL_ERROR,
        'U09' => ErrorCode::GATEWAY_ERROR_REQUEST_TIMEOUT,
        'U13' => ErrorCode::GATEWAY_ERROR_REQUEST_TIMEOUT,
        'U14' => ErrorCode::GATEWAY_ERROR_VALIDATION_ERROR,
        'U15' => ErrorCode::GATEWAY_ERROR_VALIDATION_ERROR,
        'U67' => ErrorCode::GATEWAY_ERROR_REQUEST_TIMEOUT,
        'U68' => ErrorCode::GATEWAY_ERROR_REQUEST_TIMEOUT,
        'U69' => ErrorCode::BAD_REQUEST_PAYMENT_UPI_COLLECT_REQUEST_EXPIRED,
        'DT'  => ErrorCode::BAD_REQUEST_DUPLICATE_PAYOUT,

        // Razorpay custom error codes
        'RZP_DUPLICATE_PAYOUT'              => ErrorCode::BAD_REQUEST_DUPLICATE_PAYOUT,
        'RZP_REF_ID_MISMATCH'               => ErrorCode::GATEWAY_ERROR_VALIDATION_ERROR,
        'RZP_AMOUNT_MISMATCH'               => ErrorCode::SERVER_ERROR_AMOUNT_TAMPERED,
        'RZP_FTA_REQUEST_INVALID'           => ErrorCode::BAD_REQUEST_INVALID_REQUEST_BODY,
        'RZP_REQUEST_ENCRYPTION_FAILURE'    => ErrorCode::GATEWAY_ERROR_ENCRYPTION_ERROR,
        'RZP_PAYOUT_TIMED_OUT'              => ErrorCode::GATEWAY_ERROR_TIMED_OUT,
        'RZP_PAYOUT_REQUEST_FAILURE'        => ErrorCode::GATEWAY_ERROR_REQUEST_ERROR,
        'RZP_REQUEST_DECRYPTION_FAILED'     => ErrorCode::GATEWAY_ERROR_DECRYPTION_FAILED,
        'RZP_PAYOUT_UNKNOWN_ERROR'          => ErrorCode::GATEWAY_ERROR_FATAL_ERROR,
        'RZP_PAYOUT_VERIFY_TIMED_OUT'       => ErrorCode::GATEWAY_ERROR_TIMED_OUT,
        'RZP_PAYOUT_VERIFY_REQUEST_FAILURE' => ErrorCode::GATEWAY_ERROR_TIMED_OUT,
    ];

    public static function getApiErrorCode($responseCode, $errorCode = null, $responseErrorCode = null)
    {
        return self::CODESMAP[$responseCode] ??
               self::CODESMAP[$errorCode] ??
               self::CODESMAP[$responseErrorCode] ??
               ErrorCode::BAD_REQUEST_PAYMENT_FAILED;
    }
}
