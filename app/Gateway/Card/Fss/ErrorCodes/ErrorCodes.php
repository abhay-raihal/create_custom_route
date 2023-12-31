<?php

namespace RZP\Gateway\Card\Fss\ErrorCodes;

use RZP\Error\ErrorCode;
use RZP\Gateway\Base\ErrorCodes\Cards;

class ErrorCodes extends Cards\ErrorCodes
{
    const AGGREGATOR_DOWN                      = 'Aggregator is down';
    const BANK_ID_NOT_ENABLED_AGGREGATOR       = 'Bank ID is not enabled in Aggregator Terminal';
    const CAF_STATUS                           = 'CAF status= 0 or 9';
    const ERROR_CONNECTION_PAYMENT_GATEWAY     = 'Error while connecting Payment Gateway';
    const FAILURE                              = 'FAILURE';
    const HOST_TIMEOUT                         = 'HOST TIMEOUT';
    const INVALID_EXPIRY_DATE                  = 'Invalid expiration date';
    const NOT_CAPTURED                         = 'NOT CAPTURED';
    const TRANSACTION_TIME_LIMIT_EXCEED        = 'Transaction time limit exceeds.';
    const UNSUPPORTED_CARD                     = 'card not supported';
    const WITHDRAWAL_LIMIT_EXCEEDED            = 'exceeds withdrawal frequency';
    const INCORRECT_PIN                        = 'incorrect PIN';
    const ISSUER_DOWN                          = 'issuer down';
    const LOST_CARD                            = 'lost card';
    const NO_CARD_RECORD                       = 'no card record';
    const NOT_SUFFICIENT_FUND                  = 'not sufficient fund';
    const OVER_DAILY_LIMIT                     = 'over daily limit';
    const PIN_TRIES_EXCEEDED                   = 'pin tries exceeded';
    const RESERVED_PRIVATE_USE                 = 'reserved for private use';
    const SUSPECT_FRAUD                        = 'suspect fraud';
    const TRANSACTION_NOT_PERMITTED            = 'tran not permitted';
    const ISSUER_AUTHENTICATION_SERVER_FAILURE = 'Issuer Authentication Server failure';
    const CHECKBIN_FAILURE                     = 'Checkbin Failure';
    const AUTHORIZE_PARSE_ERROR                = 'AUTHORIZE PARSE ERROR';
    const SQL_EXCEPTION                        = 'SQL Exception';

    /**
     * The error received can be a string instead of code.
     * We map it internally to a code defined by us.
     */
    public static $resultToErrorCodeMap = array(
        self::AGGREGATOR_DOWN                      => 'RP00001',
        self::BANK_ID_NOT_ENABLED_AGGREGATOR       => 'RP00002',
        self::CAF_STATUS                           => 'RP00003',
        self::NOT_CAPTURED                         => 'RP00004',
        self::ERROR_CONNECTION_PAYMENT_GATEWAY     => 'RP00005',
        self::FAILURE                              => 'RP00006',
        self::HOST_TIMEOUT                         => 'RP00007',
        self::INVALID_EXPIRY_DATE                  => 'RP00008',
        self::NOT_CAPTURED                         => 'RP00009',
        self::TRANSACTION_TIME_LIMIT_EXCEED        => 'RP00010',
        self::UNSUPPORTED_CARD                     => 'RP00011',
        self::WITHDRAWAL_LIMIT_EXCEEDED            => 'RP00012',
        self::INCORRECT_PIN                        => 'RP00013',
        self::ISSUER_DOWN                          => 'RP00014',
        self::LOST_CARD                            => 'RP00015',
        self::NO_CARD_RECORD                       => 'RP00016',
        self::NOT_SUFFICIENT_FUND                  => 'RP00017',
        self::OVER_DAILY_LIMIT                     => 'RP00018',
        self::PIN_TRIES_EXCEEDED                   => 'RP00019',
        self::RESERVED_PRIVATE_USE                 => 'RP00020',
        self::SUSPECT_FRAUD                        => 'RP00021',
        self::TRANSACTION_NOT_PERMITTED            => 'RP00022',
        self::ISSUER_AUTHENTICATION_SERVER_FAILURE => 'RP00023',
        self::CHECKBIN_FAILURE                     => 'RP00024',
        self::AUTHORIZE_PARSE_ERROR                => 'RP00025',
        self::SQL_EXCEPTION                        => 'RP00026',
    );

    public static $errorCodeMap = [
        //Defined by us
        'RP00001' => ErrorCode::GATEWAY_ERROR_AGGREGATOR_DOWN,
        'RP00002' => ErrorCode::GATEWAY_ERROR_BANK_ID_NOT_ENABLED_AGGREGATOR_TERMINAL,
        'RP00003' => ErrorCode::GATEWAY_ERROR_CAF_STATUS_ERROR,
        'RP00004' => ErrorCode::GATEWAY_ERROR_PAYMENT_CAPTURE_FAILED,
        'RP00005' => ErrorCode::GATEWAY_ERROR_CONNECTION_ERROR,
        'RP00006' => ErrorCode::GATEWAY_ERROR_PAYMENT_FAILED,
        'RP00007' => ErrorCode::GATEWAY_ERROR_REQUEST_TIMEOUT,
        'RP00008' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_EXPIRY_DATE,
        'RP00009' => ErrorCode::GATEWAY_ERROR_PAYMENT_CAPTURE_FAILED,
        'RP00010' => ErrorCode::BAD_REQUEST_TRANSACTIONS_LIMIT_REACHED,
        'RP00011' => ErrorCode::GATEWAY_ERROR_UNSUPPORTED_CARD_NETWORK,
        'RP00012' => ErrorCode::BAD_REQUEST_PAYMENT_CARD_WITHDRAWAL_LIMITS_EXCEEDED,
        'RP00013' => ErrorCode::BAD_REQUEST_PAYMENT_CARD_INVALID_PIN,
        'RP00014' => ErrorCode::BAD_REQUEST_CARD_ISSUING_BANK_UNAVAILABLE,
        'RP00015' => ErrorCode::BAD_REQUEST_CARD_STOLEN_OR_LOST,
        'RP00016' => ErrorCode::BAD_REQUEST_PAYMENT_CARD_DETAILS_INVALID,
        'RP00017' => ErrorCode::BAD_REQUEST_PAYMENT_CARD_INSUFFICIENT_BALANCE,
        'RP00018' => ErrorCode::BAD_REQUEST_CARD_DAILY_LIMIT_REACHED,
        'RP00019' => ErrorCode::BAD_REQUEST_PAYMENT_PIN_ATTEMPTS_EXCEEDED,
        'RP00020' => ErrorCode::GATEWAY_ERROR_RESERVED_PRIVATE_USE,
        'RP00021' => ErrorCode::BAD_REQUEST_PAYMENT_POSSIBLE_FRAUD,
        'RP00022' => ErrorCode::GATEWAY_ERROR_TRANSACTION_DECLINED,
        'RP00023' => ErrorCode::GATEWAY_ERROR_ISSUER_ACS_SYSTEM_FAILURE,
        'RP00024' => ErrorCode::BAD_REQUEST_PAYMENT_FAILED_DUE_TO_INVALID_BIN,
        'RP00025' => ErrorCode::GATEWAY_ERROR_GENERIC_ERROR,
        'RP00026' => ErrorCode::GATEWAY_ERROR_GENERIC_ERROR,

        'IPAY0100001' => ErrorCode::GATEWAY_ERROR_PAYMENT_MISSING_DATA,
        'IPAY0100002' => ErrorCode::GATEWAY_ERROR_INVALID_CALLBACK_URL,
        'IPAY0100003' => ErrorCode::GATEWAY_ERROR_PAYMENT_MISSING_DATA,
        'IPAY0100004' => ErrorCode::GATEWAY_ERROR_INVALID_CALLBACK_URL,
        'IPAY0100005' => ErrorCode::GATEWAY_ERROR_PAYMENT_MISSING_DATA,
        'IPAY0100006' => ErrorCode::GATEWAY_ERROR_INVALID_TERMINAL_ID,
        'IPAY0100007' => ErrorCode::GATEWAY_ERROR_PAYMENT_MISSING_DATA,
        'IPAY0100008' => ErrorCode::GATEWAY_ERROR_TERMINAL_NOT_ENABLED,
        'IPAY0100009' => ErrorCode::GATEWAY_ERROR_INSTITUTION_NOT_ENABLED,
        'IPAY0100010' => ErrorCode::GATEWAY_ERROR_ENCRYPTION_PROCESS_NOT_ENABLED,
        'IPAY0100011' => ErrorCode::GATEWAY_ERROR_ENCRYPTION_PROCESS_NOT_ENABLED,
        'IPAY0100013' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'IPAY0100014' => ErrorCode::GATEWAY_ERROR_PAYMENT_AUTHENTICATION_ERROR,
        'IPAY0100015' => ErrorCode::GATEWAY_ERROR_INVALID_TERMINAL_SECRET,
        'IPAY0100016' => ErrorCode::GATEWAY_ERROR_PASSWORD_SECURITY_NOT_ENABLED,
        'IPAY0100017' => ErrorCode::GATEWAY_ERROR_TERMINAL_NOT_ENABLED,
        'IPAY0100018' => ErrorCode::GATEWAY_ERROR_TERMINAL_SECRET_EXPIRED,
        'IPAY0100019' => ErrorCode::GATEWAY_ERROR_PAYMENT_AUTHENTICATION_ERROR,
        'IPAY0100020' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_ACTION,
        'IPAY0100021' => ErrorCode::GATEWAY_ERROR_PAYMENT_MISSING_DATA,
        'IPAY0100022' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_CURRENCY,
        'IPAY0100023' => ErrorCode::GATEWAY_ERROR_PAYMENT_MISSING_DATA,
        'IPAY0100024' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_AMOUNT,
        'IPAY0100025' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'IPAY0100026' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'IPAY0100027' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'IPAY0100028' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_UDF,
        'IPAY0100029' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_UDF,
        'IPAY0100030' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_UDF,
        'IPAY0100031' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_UDF,
        'IPAY0100032' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_UDF,
        'IPAY0100033' => ErrorCode::GATEWAY_ERROR_TERMINAL_ACTION_NOT_ENABLED,
        'IPAY0100034' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_CURRENCY,
        'IPAY0100035' => ErrorCode::GATEWAY_ERROR_CHECKSUM_MATCH_FAILED,
        'IPAY0100036' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_UDF,
        'IPAY0100045' => ErrorCode::GATEWAY_ERROR_DENIED_BY_RISK,
        'IPAY0100037' => ErrorCode::GATEWAY_ERROR_PAYMENT_MISSING_DATA,
        'IPAY0100038' => ErrorCode::GATEWAY_ERROR_INTERNAL_SERVER_ERROR,
        'IPAY0100039' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'IPAY0100041' => ErrorCode::GATEWAY_ERROR_PAYMENT_MISSING_DATA,
        'IPAY0100042' => ErrorCode::BAD_REQUEST_PAYMENT_TIMED_OUT_AT_GATEWAY,
        'IPAY0100043' => ErrorCode::GATEWAY_ERROR_DENIED_BY_RISK,
        'IPAY0100044' => ErrorCode::GATEWAY_ERROR_LOADING_PAYMENT_PAGE_FAILED,
        'IPAY0100046' => ErrorCode::GATEWAY_ERROR_TERMINAL_ACTION_NOT_ENABLED,
        'IPAY0100048' => ErrorCode::BAD_REQUEST_PAYMENT_CANCELLED,
        'IPAY0100049' => ErrorCode::BAD_REQUEST_OTP_MAXIMUM_ATTEMPTS_REACHED,
        'IPAY0100050' => ErrorCode::GATEWAY_ERROR_INVALID_TERMINAL_ID,
        'IPAY0100051' => ErrorCode::GATEWAY_ERROR_PAYMENT_MISSING_DATA,
        'IPAY0100052' => ErrorCode::GATEWAY_ERROR_RESPONSE_ENCRYPTION_FAILED,
        'IPAY0100053' => ErrorCode::GATEWAY_ERROR_PAYMENT_FAILED,
        'IPAY0100054' => ErrorCode::GATEWAY_ERROR_PAYMENT_MISSING_DATA,
        'IPAY0100056' => ErrorCode::GATEWAY_ERROR_TERMINAL_ACTION_NOT_ENABLED,
        'IPAY0100057' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_ACTION,
        'IPAY0100058' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'IPAY0100059' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_CURRENCY,
        'IPAY0100060' => ErrorCode::GATEWAY_ERROR_PAYMENT_MISSING_DATA,
        'IPAY0100061' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_AMOUNT,
        'IPAY0100062' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_AMOUNT,
        'IPAY0100063' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'IPAY0100064' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'IPAY0100065' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'IPAY0100066' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'IPAY0100067' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'IPAY0100068' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'IPAY0100069' => ErrorCode::GATEWAY_ERROR_PAYMENT_MISSING_DATA,
        'IPAY0100070' => ErrorCode::GATEWAY_ERROR_PAYMENT_BIN_CHECK_FAILED,
        'IPAY0100071' => ErrorCode::GATEWAY_ERROR_PAYMENT_MISSING_DATA,
        'IPAY0100072' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'IPAY0100073' => ErrorCode::BAD_REQUEST_PAYMENT_CARD_INVALID_CVV,
        'IPAY0100074' => ErrorCode::BAD_REQUEST_PAYMENT_MISSING_DATA,
        'IPAY0100075' => ErrorCode::BAD_REQUEST_PAYMENT_CARD_INVALID_EXPIRY_DATE,
        'IPAY0100076' => ErrorCode::BAD_REQUEST_PAYMENT_MISSING_DATA,
        'IPAY0100077' => ErrorCode::BAD_REQUEST_PAYMENT_CARD_INVALID_EXPIRY_DATE,
        'IPAY0100078' => ErrorCode::BAD_REQUEST_PAYMENT_MISSING_DATA,
        'IPAY0100079' => ErrorCode::BAD_REQUEST_PAYMENT_CARD_INVALID_EXPIRY_DATE,
        'IPAY0100080' => ErrorCode::BAD_REQUEST_PAYMENT_CARD_INVALID_EXPIRY_DATE,
        'IPAY0100081' => ErrorCode::GATEWAY_ERROR_PAYMENT_MISSING_DATA,
        'IPAY0100082' => ErrorCode::GATEWAY_ERROR_PAYMENT_MISSING_DATA,
        'IPAY0100083' => ErrorCode::GATEWAY_ERROR_PAYMENT_MISSING_DATA,
        'IPAY0100084' => ErrorCode::BAD_REQUEST_CARD_AVS_FAILED,
        'IPAY0100254' => ErrorCode::BAD_REQUEST_MERCHANT_NO_TERMINAL_ASSIGNED,

        // Fss ErrorCodes
        'GW00150' => ErrorCode::GATEWAY_ERROR_PAYMENT_MISSING_DATA,
        'GW00151' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_ACTION,
        'GW00152' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_AMOUNT,
        'GW00153' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_ID,
        'GW00154' => ErrorCode::GATEWAY_ERROR_INVALID_TERMINAL_ID,
        'GW00181' => ErrorCode::GATEWAY_ERROR_PAYMENT_CREDIT_GREATER_THAN_DEBIT,
        'GW00205' => ErrorCode::GATEWAY_ERROR_INVALID_SUBSEQUENT_PAYMENT,
        'GW00157' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'GW00165' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'GW00166' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_NUMBER,
        'GW00167' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_CURRENCY,
        'GW00168' => ErrorCode::GATEWAY_ERROR_INSTITUTION_ID_MISMATCH,
        'GW00169' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'GW00170' => ErrorCode::GATEWAY_ERROR_INVALID_TERMINAL_ID,
        'GW00171' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'GW00160' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_BRAND,
        'GW00161' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_NAME,
        'GW00162' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'GW00163' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_ADDRESS,
        'GW00164' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_ZIP,
        'GW00183' => ErrorCode::GATEWAY_ERROR_CARD_MISSING_CVV,
        'GW00258' => ErrorCode::BAD_REQUEST_PAYMENT_FAILED_DUE_TO_INVALID_BIN,
        'GW00259' => ErrorCode::BAD_REQUEST_PAYMENT_CARD_DECLINED,
        'GW00458' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'GV00005' => ErrorCode::GATEWAY_ERROR_CERTIFICATE_VALIDATION_FAILED,
        'GV00006' => ErrorCode::GATEWAY_ERROR_CERTIFICATE_VALIDATION_FAILED,
        'GV00011' => ErrorCode::BAD_REQUEST_PAYMENT_CARD_INVALID_EXPIRY_DATE,
        'PY20006' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_BRAND,
        'PY20001' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_ACTION,
        'PY20002' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_AMOUNT,

        'IPAY0100085' => ErrorCode::GATEWAY_ERROR_ECI_INVALID,
        'IPAY0100086' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_CVV,
        'IPAY0100087' => ErrorCode::BAD_REQUEST_PAYMENT_CARD_INVALID_PIN,
        'IPAY0100088' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_MOBILE,
        'IPAY0100089' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_MOBILE,
        'IPAY0100090' => ErrorCode::GATEWAY_ERROR_PAYMENT_MISSING_DATA,
        'IPAY0100091' => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        'IPAY0100092' => ErrorCode::GATEWAY_ERROR_PAYMENT_MISSING_DATA,
        'IPAY0100093' => ErrorCode::BAD_REQUEST_PAYMENT_OTP_INCORRECT,
        'IPAY0100094' => ErrorCode::GATEWAY_ERROR_PAYMENT_INSTRUMENT_ERROR,
        'IPAY0100095' => ErrorCode::GATEWAY_ERROR_TERMINAL_NOT_ENABLED,
        'IPAY0100096' => ErrorCode::GATEWAY_ERROR_INSTITUTION_IMPS_NOT_ACTIVE,
        'IPAY0100097' => ErrorCode::GATEWAY_ERROR_TERMINAL_IMPS_NOT_ACTIVE,
        'IPAY0100100' => ErrorCode::BAD_REQUEST_PAYMENT_NOT_AUTHORIZED,
        'IPAY0100101' => ErrorCode::GATEWAY_ERROR_DENIED_BY_RISK,
        'IPAY0100102' => ErrorCode::GATEWAY_ERROR_DENIED_BY_RISK,
        'IPAY0100103' => ErrorCode::BAD_REQUEST_TRANSACTIONS_LIMIT_REACHED,
        'IPAY0100104' => ErrorCode::GATEWAY_ERROR_DENIED_BY_RISK,
        'IPAY0100105' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_ACTION,
        'IPAY0100106' => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        'IPAY0100107' => ErrorCode::GATEWAY_ERROR_PAYMENT_INSTRUMENT_NOT_ENABLED,
        'IPAY0100108' => ErrorCode::GATEWAY_ERROR_DENIED_BY_RISK,
        'IPAY0100109' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_ID,
        'IPAY0100110' => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        'IPAY0100111' => ErrorCode::GATEWAY_ERROR_DECRYPTION_FAILED,
        'IPAY0100112' => ErrorCode::GATEWAY_ERROR_LOADING_DATA_ERROR,
        'IPAY0100114' => ErrorCode::GATEWAY_ERROR_DUPLICATE_RECORD,
        'IPAY0100115' => ErrorCode::GATEWAY_ERROR_PAYMENT_MISSING_DATA,
        'IPAY0100116' => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        'IPAY0100117' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_NUMBER,
        'IPAY0100118' => ErrorCode::GATEWAY_ERROR_CARD_NUMBER_INVALID_LENGTH,
        'IPAY0100119' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_NUMBER,
        'IPAY0100120' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_BRAND,
        'IPAY0100121' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_NAME,
        'IPAY0100122' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_ADDRESS,
        'IPAY0100123' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_ZIP,
        'IPAY0100124' => ErrorCode::BAD_REQUEST_VALIDATION_FAILURE,
        'IPAY0100125' => ErrorCode::GATEWAY_ERROR_PAYMENT_INSTRUMENT_NOT_ENABLED,
        'IPAY0100126' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_BRAND,
        'IPAY0100257' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_BRAND,
        'IPAY0100127' => ErrorCode::BAD_REQUEST_VALIDATION_FAILURE,
        'IPAY0100128' => ErrorCode::GATEWAY_ERROR_INSTITUTION_ID_MISMATCH,
        'IPAY0100129' => ErrorCode::GATEWAY_ERROR_DATA_MISMATCH,
        'IPAY0100130' => ErrorCode::GATEWAY_ERROR_DATA_MISMATCH,
        'IPAY0100131' => ErrorCode::GATEWAY_ERROR_DATA_MISMATCH,
        'IPAY0100132' => ErrorCode::GATEWAY_ERROR_DATA_MISMATCH,
        'IPAY0100133' => ErrorCode::GATEWAY_ERROR_CARD_NUMBER_MISMATCH,
        'IPAY0100134' => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        'IPAY0100136' => ErrorCode::BAD_REQUEST_PAYMENT_INVALID_CAPTURE,
        'IPAY0100137' => ErrorCode::GATEWAY_ERROR_PAYMENT_CREDIT_GREATER_THAN_DEBIT,
        'IPAY0100138' => ErrorCode::GATEWAY_ERROR_CAPTURE_GREATER_THAN_AUTH,
        'IPAY0100139' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_AMOUNT,
        'IPAY0100140' => ErrorCode::GATEWAY_ERROR_PREVIOUS_VOID_CHECK_FAILURE,
        'IPAY0100141' => ErrorCode::BAD_REQUEST_PAYMENT_ALREADY_CAPTURED,
        'IPAY0100142' => ErrorCode::BAD_REQUEST_VALIDATION_FAILURE,
        'IPAY0100143' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_ACTION,
        'IPAY0100144' => ErrorCode::GATEWAY_ERROR_ISO_MESSAGE_NULL,
        'IPAY0100145' => ErrorCode::GATEWAY_ERROR_LOADING_DATA_ERROR,
        'IPAY0100146' => ErrorCode::GATEWAY_ERROR_CARD_ENCRYPTION_FAILED,
        'IPAY0100147' => ErrorCode::GATEWAY_ERROR_FORMATTING_FAILED,
        'IPAY0100148' => ErrorCode::GATEWAY_ERROR_HASH_GENERATION_ERROR,
        'IPAY0100149' => ErrorCode::BAD_REQUEST_PAYMENT_CARD_INVALID_PIN,
        'IPAY0100150' => ErrorCode::GATEWAY_ERROR_FORMATTING_FAILED,
        'IPAY0100151' => ErrorCode::GATEWAY_ERROR_FORMATTING_FAILED,
        'IPAY0100152' => ErrorCode::GATEWAY_ERROR_FORMATTING_FAILED,
        'IPAY0100153' => ErrorCode::GATEWAY_ERROR_FORMATTING_FAILED,
        'IPAY0100154' => ErrorCode::GATEWAY_ERROR_FORMATTING_FAILED,
        'IPAY0100155' => ErrorCode::GATEWAY_ERROR_FORMATTING_FAILED,
        'IPAY0100156' => ErrorCode::GATEWAY_ERROR_FORMATTING_FAILED,
        'IPAY0100157' => ErrorCode::GATEWAY_ERROR_FORMATTING_FAILED,
        'IPAY0100158' => ErrorCode::GATEWAY_ERROR_REQUEST_TIMEOUT,
        'IPAY0100159' => ErrorCode::GATEWAY_ERROR_MESSAGE_ERROR,
        'IPAY0100160' => ErrorCode::GATEWAY_ERROR_GENERIC_TRANSACTION_ERROR,
        'IPAY0100162' => ErrorCode::GATEWAY_ERROR_MERCHANT_NOT_ALLOWED_FOR_ENCRYPTION,
        'IPAY0100163' => ErrorCode::GATEWAY_ERROR_GENERIC_ERROR,
        'IPAY0100164' => ErrorCode::GATEWAY_ERROR_ECI_INVALID,
        'IPAY0100165' => ErrorCode::GATEWAY_ERROR_ECI_INVALID,
        'IPAY0100166' => ErrorCode::GATEWAY_ERROR_PAYMENT_AUTHENTICATION_ERROR,
        'IPAY0100167' => ErrorCode::GATEWAY_ERROR_PAYMENT_AUTHENTICATION_ERROR,
        'IPAY0100168' => ErrorCode::GATEWAY_ERROR_ENROLL_STATUS_EMPTY,
        'IPAY0100169' => ErrorCode::GATEWAY_ERROR_ENROLL_STATUS_INVALID,
        'IPAY0100170' => ErrorCode::GATEWAY_ERROR_INVALID_CAVV,
        'IPAY0100171' => ErrorCode::GATEWAY_ERROR_INVALID_CAVV,
        'IPAY0100176' => ErrorCode::GATEWAY_ERROR_DECRYPTION_FAILED,
        'IPAY0100178' => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        'IPAY0100180' => ErrorCode::GATEWAY_ERROR_AUTHENTICATION_NOT_AVAILABLE,
        'IPAY0100181' => ErrorCode::GATEWAY_ERROR_CREDIT_CARD_ENCRYPTION_FAILED,
        'IPAY0100182' => ErrorCode::GATEWAY_ERROR_MERCHANT_NOT_ENABLED,
        'IPAY0100183' => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        'IPAY0100184' => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        'IPAY0100185' => ErrorCode::GATEWAY_ERROR_PAYMENT_AUTHENTICATION_ERROR,
        'IPAY0100270' => ErrorCode::GATEWAY_ERROR_PARES_NOT_SUCCESSFUL,
        'IPAY0100186' => ErrorCode::GATEWAY_ERROR_CARD_ENCRYPTION_FAILED,
        'IPAY0100187' => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        'IPAY0100188' => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        'IPAY0100189' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_BRAND,
        'IPAY0100190' => ErrorCode::GATEWAY_ERROR_DENIED_BY_RISK,
        'IPAY0100191' => ErrorCode::GATEWAY_ERROR_DENIED_BY_RISK,
        'IPAY0100192' => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        'IPAY0100193' => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        'IPAY0100194' => ErrorCode::GATEWAY_ERROR_DENIED_BY_RISK,
        'IPAY0100195' => ErrorCode::GATEWAY_ERROR_DENIED_BY_RISK,
        'IPAY0100196' => ErrorCode::GATEWAY_ERROR_DENIED_BY_RISK,
        'IPAY0100197' => ErrorCode::GATEWAY_ERROR_DENIED_BY_RISK,
        'IPAY0100198' => ErrorCode::GATEWAY_ERROR_DENIED_BY_RISK,
        'IPAY0100199' => ErrorCode::GATEWAY_ERROR_TRANSACTION_DECLINED,
        'IPAY0100200' => ErrorCode::GATEWAY_ERROR_PAYMENT_DENIED_NEGATIVE_BIN,
        'IPAY0100201' => ErrorCode::BAD_REQUEST_PAYMENT_CARD_DECLINED,
        'IPAY0100203' => ErrorCode::GATEWAY_ERROR_UNKNOWN_ERROR,
        'IPAY0100204' => ErrorCode::GATEWAY_ERROR_PAYMENT_MISSING_DATA,
        'IPAY0100205' => ErrorCode::GATEWAY_ERROR_ENSTAGE_ERROR,
        'IPAY0100206' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_CURRENCY,
        'IPAY0100207' => ErrorCode::BAD_REQUEST_PAYMENT_FAILED_DUE_TO_INVALID_BIN,
        'IPAY0100208' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_ACTION,
        'IPAY0100209' => ErrorCode::GATEWAY_ERROR_INSTITUTION_NOT_ENABLED,
        'IPAY0100210' => ErrorCode::GATEWAY_ERROR_ISSUER_ACS_SYSTEM_FAILURE,
        'IPAY0100211' => ErrorCode::GATEWAY_ERROR_ENSTAGE_ERROR,
        'IPAY0100212' => ErrorCode::GATEWAY_ERROR_ISSUER_ACS_SYSTEM_FAILURE,
        'IPAY0100213' => ErrorCode::GATEWAY_ERROR_PAYMENT_FAILED,
        'IPAY0100214' => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        'IPAY0100215' => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        'IPAY0100216' => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        'IPAY0100217' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'IPAY0100218' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_BRAND,
        'IPAY0100219' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_NUMBER,
        'IPAY0100220' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_NUMBER,
        'IPAY0100221' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_NAME,
        'IPAY0100222' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_NAME,
        'IPAY0100223' => ErrorCode::GATEWAY_ERROR_CARD_MISSING_CVV,
        'IPAY0100224' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_CVV,
        'IPAY0100225' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_EXPIRY_DATE,
        'IPAY0100226' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_EXPIRY_DATE,
        'IPAY0100227' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_EXPIRY_DATE,
        'IPAY0100228' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_EXPIRY_DATE,
        'IPAY0100229' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_EXPIRY_DATE,
        'IPAY0100230' => ErrorCode::BAD_REQUEST_PAYMENT_CARD_EXPIRED,
        'IPAY0100231' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_UDF,
        'IPAY0100232' => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        'IPAY0100233' => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        'IPAY0100234' => ErrorCode::GATEWAY_ERROR_FORMATTING_FAILED,
        'IPAY0100235' => ErrorCode::GATEWAY_ERROR_FORMATTING_FAILED,
        'IPAY0100236' => ErrorCode::GATEWAY_ERROR_FORMATTING_FAILED,
        'IPAY0100237' => ErrorCode::GATEWAY_ERROR_FORMATTING_FAILED,
        'IPAY0100238' => ErrorCode::GATEWAY_ERROR_FORMATTING_FAILED,
        'IPAY0100239' => ErrorCode::GATEWAY_ERROR_FORMATTING_FAILED,
        'IPAY0100240' => ErrorCode::GATEWAY_ERROR_FORMATTING_FAILED,
        'IPAY0100241' => ErrorCode::GATEWAY_ERROR_FORMATTING_FAILED,
        'IPAY0100242' => ErrorCode::GATEWAY_ERROR_RC_UNAVAILABLE,
        'IPAY0100243' => ErrorCode::GATEWAY_ERROR_GENERIC_ERROR,
        'IPAY0100245' => ErrorCode::GATEWAY_ERROR_ISO_MESSAGE_SEND_OR_RECEIVE_FAILURE,
        'IPAY0100246' => ErrorCode::GATEWAY_ERROR_DENIED_BY_RISK,
        'IPAY0100247' => ErrorCode::GATEWAY_ERROR_INVALID_PARES_FORMAT,
        'IPAY0100248' => ErrorCode::GATEWAY_ERROR_INVALID_PARES_FORMAT,
        'IPAY0100249' => ErrorCode::GATEWAY_ERROR_INVALID_CALLBACK_URL,
        'IPAY0100250' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'IPAY0100251' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'IPAY0100252' => ErrorCode::GATEWAY_ERROR_ISSUER_ACS_INVALID_RESPONSE,
        'IPAY0100253' => ErrorCode::BAD_REQUEST_PAYMENT_CANNOT_BE_CANCELLED,
        'IPAY0100255' => ErrorCode::GATEWAY_ERROR_CONNECTION_ERROR,
        'IPAY0100256' => ErrorCode::GATEWAY_ERROR_PAYMENT_ENCRYPTION_FAILED,
        'IPAY0100258' => ErrorCode::GATEWAY_ERROR_CERTIFICATE_VALIDATION_FAILED,
        'IPAY0100259' => ErrorCode::GATEWAY_ERROR_HASH_GENERATION_ERROR,
        'IPAY0100260' => ErrorCode::GATEWAY_ERROR_PAYMENT_OPTION_NOT_ENABLED,
        'IPAY0100261' => ErrorCode::GATEWAY_ERROR_HASH_GENERATION_ERROR,
        'IPAY0100262' => ErrorCode::GATEWAY_ERROR_ISSUER_ACS_SYSTEM_FAILURE,
        'IPAY0100263' => ErrorCode::GATEWAY_ERROR_PAYMENT_TRANSACTION_NOT_FOUND,
        'IPAY0100264' => ErrorCode::GATEWAY_ERROR_SIGNATURE_VALIDATION_FAILED,
        'IPAY0100265' => ErrorCode::GATEWAY_ERROR_ENSTAGE_ERROR,
        'IPAY0100266' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_BRAND,
        'IPAY0100267' => ErrorCode::GATEWAY_ERROR_ENSTAGE_ERROR,
        'IPAY0100268' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_BRAND,
        'IPAY0100269' => ErrorCode::BAD_REQUEST_INVALID_CARD_DETAILS,
        'IPAY0100271' => ErrorCode::GATEWAY_ERROR_FORMATTING_FAILED,
        'IPAY0100272' => ErrorCode::BAD_REQUEST_VALIDATION_FAILURE,
        'IPAY0100273' => ErrorCode::BAD_REQUEST_VALIDATION_FAILURE,
        'IPAY0100274' => ErrorCode::GATEWAY_ERROR_INVALID_FORMAT,
        'IPAY0100275' => ErrorCode::GATEWAY_ERROR_FORMATTING_FAILED,
        'IPAY0100276' => ErrorCode::GATEWAY_ERROR_FORMATTING_FAILED,
        'IPAY0100277' => ErrorCode::GATEWAY_ERROR_FORMATTING_FAILED,
        'IPAY0100278' => ErrorCode::GATEWAY_ERROR_FORMATTING_FAILED,
        'IPAY0100279' => ErrorCode::GATEWAY_ERROR_FORMATTING_FAILED,
        'IPAY0100280' => ErrorCode::GATEWAY_ERROR_FORMATTING_FAILED,
        'IPAY0100281' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_BRAND,
        'IPAY0100282' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_BRAND,
        'IPAY0100283' => ErrorCode::GATEWAY_ERROR_PAYMENT_INSTRUMENT_ERROR,
        'IPAY0100284' => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        'IPAY0100285' => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        'IPAY0100286' => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        'IPAY0100287' => ErrorCode::GATEWAY_ERROR_TERMINAL_ACTION_NOT_ENABLED,
        'IPAY0100288' => ErrorCode::GATEWAY_ERROR_TERMINAL_ERROR,
        'IPAY0100289' => ErrorCode::BAD_REQUEST_CARD_CREDIT_LIMIT_REACHED,
        'IPAY0100290' => ErrorCode::BAD_REQUEST_VALIDATION_FAILURE,
        'IPAY0100291' => ErrorCode::BAD_REQUEST_PAYMENT_CARD_INVALID_PIN,
        'IPAY0100292' => ErrorCode::BAD_REQUEST_PAYMENT_CARD_INVALID_PIN,
        'IPAY0100293' => ErrorCode::GATEWAY_ERROR_PAYMENT_DUPLICATE_REQUEST,
        'IPAY0100294' => ErrorCode::GATEWAY_ERROR_PAYMENT_MISSING_DATA,
        'IPAY0200001' => ErrorCode::GATEWAY_ERROR_TERMINAL_ERROR,
        'IPAY0200002' => ErrorCode::GATEWAY_ERROR_INVALID_INSTITUTION,
        'IPAY0200003' => ErrorCode::GATEWAY_ERROR_INVALID_MERCHANT,
        'IPAY0200004' => ErrorCode::GATEWAY_ERROR_PASSWORD_RULES_FETCH_FAILURE,
        'IPAY0200006' => ErrorCode::BAD_REQUEST_VALIDATION_FAILURE,
        'IPAY0200007' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'IPAY0200008' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'IPAY0200009' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'IPAY0200011' => ErrorCode::GATEWAY_ERROR_BLOCKED_IP_LIST_FETCH_FAILURE,
        'IPAY0200012' => ErrorCode::GATEWAY_ERROR_LOG_UPDATE_FAILURE,
        'IPAY0200014' => ErrorCode::GATEWAY_ERROR_GENERIC_ERROR,
        'IPAY0200015' => ErrorCode::GATEWAY_ERROR_TERMINAL_ERROR,
        'IPAY0200016' => ErrorCode::GATEWAY_ERROR_PAYMENT_INSTRUMENT_ERROR,
        'IPAY0200017' => ErrorCode::GATEWAY_ERROR_PAYMENT_INSTRUMENT_ERROR,
        'IPAY0200018' => ErrorCode::GATEWAY_ERROR_PAYMENT_TRANSACTION_NOT_FOUND,
        'IPAY0200019' => ErrorCode::GATEWAY_ERROR_RISK_PROFILE_FETCH_FAILURE,
        'IPAY0200020' => ErrorCode::GATEWAY_ERROR_DENIED_BY_RISK,
        'IPAY0200021' => ErrorCode::GATEWAY_ERROR_DENIED_BY_RISK,
        'IPAY0200022' => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_CURRENCY,
        'IPAY0200023' => ErrorCode::GATEWAY_ERROR_PAYMENT_INSTRUMENT_ERROR,
        'IPAY0200024' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_BRAND,
        'IPAY0200025' => ErrorCode::GATEWAY_ERROR_TERMINAL_ERROR,
        'IPAY0200026' => ErrorCode::GATEWAY_ERROR_TRANSACTION_LOG_RETRIEVAL_FAILURE,
        'IPAY0200027' => ErrorCode::GATEWAY_ERROR_PAYMENT_MISSING_DATA,
        'IPAY0200028' => ErrorCode::GATEWAY_ERROR_LOADING_INSTITUTION_CONFIG_FAILURE,
        'IPAY0200029' => ErrorCode::GATEWAY_ERROR_CONNECTION_ERROR,
        'IPAY0200030' => ErrorCode::GATEWAY_ERROR_CONNECTION_ERROR,
        'IPAY0200031' => ErrorCode::GATEWAY_ERROR_CONNECTION_ERROR,
        'IPAY0200032' => ErrorCode::GATEWAY_ERROR_CONNECTION_ERROR,
        'IPAY0200033' => ErrorCode::GATEWAY_ERROR_VPAS_LOG_RETRIEVAL_FAILURE,
        'IPAY0200034' => ErrorCode::GATEWAY_ERROR_VPAS_LOG_RETRIEVAL_FAILURE,
        'IPAY0200037' => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        'IPAY0200038' => ErrorCode::GATEWAY_ERROR_VPAS_LOG_RETRIEVAL_FAILURE,
        'IPAY0200039' => ErrorCode::GATEWAY_ERROR_INTERNAL_DATA_FETCH_ERROR,
        'IPAY0200040' => ErrorCode::GATEWAY_ERROR_DENIED_BY_RISK,
        'IPAY0200041' => ErrorCode::GATEWAY_ERROR_INSTITUTION_CONFIG_FETCH_FAILURE,
        'IPAY0200042' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_BRAND,
        'IPAY0200043' => ErrorCode::BAD_REQUEST_PAYMENT_FAILED_DUE_TO_INVALID_BIN,
        'IPAY0200044' => ErrorCode::GATEWAY_ERROR_LOG_UPDATE_FAILURE,
        'IPAY0200045' => ErrorCode::GATEWAY_ERROR_LOG_UPDATE_FAILURE,
        'IPAY0200046' => ErrorCode::GATEWAY_ERROR_PAYMENT_MISSING_DATA,
        'IPAY0200047' => ErrorCode::GATEWAY_ERROR_INVALID_PAYMENT_DATA,
        'IPAY0200048' => ErrorCode::GATEWAY_ERROR_VPAS_LOG_RETRIEVAL_FAILURE,
        'IPAY0200049' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_NUMBER,
        'IPAY0200050' => ErrorCode::GATEWAY_ERROR_RISK_UPDATE_FAILURE,
        'IPAY0200051' => ErrorCode::GATEWAY_ERROR_RISK_UPDATE_FAILURE,
        'IPAY0200052' => ErrorCode::GATEWAY_ERROR_RISK_UPDATE_FAILURE,
        'IPAY0200053' => ErrorCode::GATEWAY_ERROR_LOG_UPDATE_FAILURE,
        'IPAY0200054' => ErrorCode::GATEWAY_ERROR_PROBLEM_IN_UPDATION,
        'IPAY0200055' => ErrorCode::GATEWAY_ERROR_PROBLEM_IN_UPDATION,
        'IPAY0200056' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_BRAND,
        'IPAY0200057' => ErrorCode::GATEWAY_ERROR_CONNECTION_ERROR,
        'IPAY0200058' => ErrorCode::GATEWAY_ERROR_LOG_UPDATE_FAILURE,
        'IPAY0200059' => ErrorCode::GATEWAY_ERROR_VPAS_DETAILS_UPDATE_FAILURE,
        'IPAY0200060' => ErrorCode::GATEWAY_ERROR_VPAS_DETAILS_UPDATE_FAILURE,
        'IPAY0200061' => ErrorCode::GATEWAY_ERROR_PAYMENT_AUTHENTICATION_ERROR,
        'IPAY0200062' => ErrorCode::GATEWAY_ERROR_CARD_INVALID_BRAND,
        'IPAY0200063' => ErrorCode::GATEWAY_ERROR_LOG_UPDATE_FAILURE,
        'IPAY0200064' => ErrorCode::GATEWAY_ERROR_LOG_UPDATE_FAILURE,
        'IPAY0200065' => ErrorCode::GATEWAY_ERROR_LOG_UPDATE_FAILURE,
        'IPAY0200066' => ErrorCode::GATEWAY_ERROR_LOG_UPDATE_FAILURE,
        'IPAY0200067' => ErrorCode::GATEWAY_ERROR_LOG_UPDATE_FAILURE,
        'IPAY0200068' => ErrorCode::GATEWAY_ERROR_BLOCKED_IP,
        'IPAY0200069' => ErrorCode::GATEWAY_ERROR_LOG_UPDATE_FAILURE,
        'IPAY0200070' => ErrorCode::GATEWAY_ERROR_PROBLEM_IN_UPDATION,
        'IPAY0200071' => ErrorCode::GATEWAY_ERROR_PAYMENT_AUTHENTICATION_ERROR,
        'IPAY0200072' => ErrorCode::GATEWAY_ERROR_PAYMENT_LOG_DETAILS_UNAVAILABLE,
        'IPAY0200073' => ErrorCode::BAD_REQUEST_INVALID_COUNTRY,
        'IPAY0200074' => ErrorCode::BAD_REQUEST_INVALID_COUNTRY,
        'IPAY0200075' => ErrorCode::GATEWAY_ERROR_TRANSACTION_LOG_RETRIEVAL_FAILURE,
        'IPAY0200079' => ErrorCode::GATEWAY_ERROR_PAYMENT_CHARGEBACK_ERROR,
    ];

    public static function getRelevantGatewayErrorCode($errorFieldName, $content)
    {
        $error = $content[$errorFieldName];

        if (in_array($error, array_keys(self::$resultToErrorCodeMap)))
        {
            return self::$resultToErrorCodeMap[$error];
        }

        return $error;
    }
}
