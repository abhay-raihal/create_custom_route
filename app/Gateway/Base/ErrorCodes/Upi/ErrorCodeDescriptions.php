<?php

namespace RZP\Gateway\Base\ErrorCodes\Upi;

use RZP\Gateway\Base;

class ErrorCodeDescriptions extends Base\ErrorCodes\BaseCodeDescriptions
{
    public static $errorDescriptionMap = [
        // Error Codes
        'U28'   => 'PSP NOT AVAILABLE',
        'U88'   => 'CONNECTION TIMEOUT IN REQPAY CREDIT',
        'U68'   => 'CREDIT TIMEOUT',
        'U31'   => 'CREDIT HAS BEEN FAILED',
        // Response Codes
        'BT'    => 'Transaction is pending (BT).',
        'XY'    => 'REMITTER CBS OFFLINE',
        'XC'    => 'INVALID TRANSACTION OR IF MEMBER IS NOT ABLE TO FIND ANY APPROPRIATE RESPONSE CODE (BENEFICIARY)',
        'ZY'    => 'INACTIVE OR DORMANT ACCOUNT (BENEFICIARY)',
        'XI'    => 'ACCOUNT DOES NOT EXIST (BENEFICIARY)',
        'Z5'    => 'INVALID BENEFICIARY CREDENTIALS',
        'YF'    => 'BENEFICIARY ACCOUNT BLOCKED/FROZEN',
        'Y1'    => 'BENEFICIARY CBS OFFLINE',
        'UB'    => 'UNABLE TO PROCESS DUE TO INTERNAL EXCEPTION AT SERVER/CBS/ETC ON BENEFICIARY SIDE',
        'XW'    => 'TRANSACTION CANNOT BE COMPLETED. COMPLIANCE VIOLATION (BENEFICIARY)',
        'XQ'    => 'TRANSACTION NOT PERMITTED TO CARDHOLDER (BENEFICIARY)',
        'XM'    => 'EXPIRED CARD, DECLINE (BENEFICIARY)',
        'XB'    => 'INVALID TRANSACTION OR IF MEMBER IS NOT ABLE TO FIND ANY APPROPRIATE RESPONSE CODE (REMITTER)',
        'RB'    => 'CREDIT REVERSAL TIMEOUT(REVERSAL)',
        'ZD'    => 'VALIDATION ERROR',
        'NO'    => 'NO ORIGINAL REQUEST FOUND DURING DEBIT/CREDIT',
        'B3'    => 'TRANSACTION NOT PERMITTED TO THE ACCOUNT',
        'Z9'    => 'INSUFFICIENT FUNDS IN CUSTOMER (REMITTER) ACCOUNT',
        'ZI'    => 'SUSPECTED FRAUD, DECLINE / TRANSACTIONS DECLINED BASED ON RISK SCORE BY BENEFICIARY',
        'XU'    => 'CUT-OFF IS IN PROCESS (BENEFICIARY)',
        'LC'    => 'UNABLE TO PROCESS CREDIT FROM BANK\'S POOL/BGL ACCOUNT',
        'DF'    => 'DUPLICATE RRN FOUND IN THE TRANSACTION. (BENEFICIARY)',
        'YD'    => 'DO NOT HONOUR (BENEFICIARY)',
        'K1'    => 'SUSPECTED FRAUD, DECLINE / TRANSACTIONS DECLINED BASED ON RISK SCORE BY REMITTER',
        'NA'    => 'TRANSACTION FAILED',
        'RNF'   => 'TRANSACTION FAILED',
        '51'    => 'NOT SUFFICIENT FUNDS',
        '96'    => 'Reversal Failure',
        'AM'    => 'MPIN not set by customer',
        'B1'    => 'Registered Mobile number linked to the account has been changed/removed',
        'UT'    => 'REMITTER/ISSUER UNAVAILABLE (TIMEOUT)',
        'UX'    => 'EXPIRED VIRTUAL ADDRESS',
        'XH'    => 'ACCOUNT DOES NOT EXIST (REMITTER)',
        'XV'    => 'TRANSACTION CANNOT BE COMPLETED. COMPLIANCE VIOLATION (REMITTER)',
        'Z6'    => 'No of PIN tries exceeded',
        'Z7'    => 'TRANSACTION FREQUENCY LIMIT EXCEEDED AS SET BY REMITTING MEMBER',
        'Z8'    => 'PER TRANSACTION LIMIT EXCEEDED AS SET BY REMITTING MEMBER',
        'ZA'    => 'TRANSACTION DECLINED BY CUSTOMER',
        'ZE'    => 'TRANSACTION NOT PERMITTED TO VPA by the PSP',
        'ZG'    => 'VPA RESTRICTED BY CUSTOMER',
        'ZH'    => 'INVALID VIRTUAL ADDRESS',
        'ZM'    => 'Invalid / Incorrect MPIN',
        'ZX'    => 'INACTIVE OR DORMANT ACCOUNT (REMITTER)',
        'U03'   => 'Net debit CAP is exceeded',
        'U09'   => 'ReqAuth Time out for PAY',
        'U14'   => 'Encryption error',
        'U16'   => 'Risk threshold exceeded',
        'U17'   => 'PSP is not registered',
        'U18'   => 'Request authorisation acknowledgement is not received',
        'U19'   => 'Request authorisation is declined',
        'U29'   => 'Address resolution is failed',
        'U30'   => 'Debit has been failed',
        'U53'   => 'PSP Request Pay Debit Acknowledgement not received',
        'U54'   => 'Transaction Id or Amount in credential block does not match with that in ReqPay',
        'U66'   => 'Device Fingerprint mismatch',
        'U67'   => 'Debit TimeOut',
        'U69'   => 'Collect Expired',
        'U70'   => 'Mandate collect Expired',
        '61'    => 'EXCEEDS TRANSACTION AMOUNT LIMIT',
        'A01'   => 'Payer/Payee.Ac must be present',
        'B07'   => 'Payee.Code numeric of length 4',
        'B2'    => 'Account linked with multiple names',
        'HS'    => 'BANKS HSM IS DOWN(REMITTER)',
        'I01'   => 'Payer/Payee.Info must be present',
        'IR'    => 'UNABLE TO PROCESS DUE TO INTERNAL EXCEPTION AT SERVER/CBS/ETC ON REMITTER SIDE',
        'LD'    => 'UNABLE TO PROCESS DEBIT IN BANK’S POOL/BGL ACCOUNT',
        'R02'   => 'Payer.Addr must be valid VPA maxlength 255',
        'RM'    => 'Invalid MPIN ( Violation of policies while setting/changing MPIN )',
        'TM'    => 'Invalid/Incorrect ATM PIN',
        'U10'   => 'Illegal operation',
        'U26'   => 'PSP request credit pay acknowledgement is not received',
        'U85'   => 'Connection timeout in reqpay debit',
        'XF'    => 'FORMAT ERROR (INVALID FORMAT) (REMITTER)',
        'XJ'    => 'REQUESTED FUNCTION NOT SUPPORTED',
        'XN'    => 'NO CARD RECORD (REMITTER)',
        'XP'    => 'TRANSACTION NOT PERMITTED TO CARDHOLDER (REMITTER)',
        'XT'    => 'CUT-OFF IS IN PROCESS (REMITTER)',
        'YE'    => 'REMITTING ACCOUNT BLOCKED/FROZEN',
        'DT'    => 'DUPLICATE RRN FOUND IN THE TRANSACTION. (REMITTER)',
        '91'    => 'RESPONSE TIME OUT (DEEMED APPROVED)',
        'YC'    => 'DO NOT HONOUR (REMITTER)',
        'YG'    => 'MERCHANT ERROR (PAYEE PSP)',
        'XL'    => 'EXPIRED CARD, DECLINE (REMITTER)',
        'D01'   => 'Payer/Payee.Device must be present',
        'X1'    => 'RESPONSE NOT RECEIVED WITHIN TAT AS SET BY PAYEE',
        'BR'    => 'Mobile number registered with multiple customer IDs',
        'U78'   => 'Beneficiary bank offline',
        'B03'   => 'Payee.Addr must be valid VPA maxlength 255',
        'XG'    => 'FORMAT ERROR (INVALID FORMAT) (BENEFICIARY)',
        'M5'    => 'ACCOUNT CLOSED',
        'U01'   => 'The request is duplicate',
        'U21'   => 'Request authorisation is not found',
        '8'     => 'HOST (CBS) OFFLINE',
        'XD'    => 'INVALID AMOUNT (REMITTER)',
        'U96'   => 'DEBIT AND CREDIT FROM AND TO SAME ACCOUNT',
        'XK'    => 'REQUESTED FUNCTION NOT SUPPORTED',
        'T03'   => 'TXN.NOTE ALPHANUMERIC; MINLENGTH 1 MAXLENGTH 50',
        'L04'   => 'EXPIRY DATE ATTRIBUTE VALUE MUST BE PRESENT; NUMERIC; MINLENGTH 1 MAXLENGTH 255',
        'A09'   => 'PAYER/PAYEE .AC.DETAIL.VALUE INCORRECT FORMAT <NAME>',
        'L05'   => 'TECHNICAL ISSUE, PLEASE TRY AFTER SOME TIME',
        'U86'   => 'REMITTER BANK THROTTLING DECLINE',
        'U90'   => 'REMITTER BANK HIGH RESPONSE',
        'U91'   => 'BENEFICIARY BANK HIGH RESPONSE',
        'U92'   => 'PAYER PSP NOT AVAILABLE',
    ];
}