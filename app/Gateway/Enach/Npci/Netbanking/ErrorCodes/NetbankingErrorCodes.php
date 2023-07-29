<?php

namespace RZP\Gateway\Enach\Npci\Netbanking\ErrorCodes;

use RZP\Error\Error;
use RZP\Error\ErrorCode;
use RZP\Exception\GatewayErrorException;

class NetbankingErrorCodes
{
    //NPCI emandate register error codes
    const R151 = '151';
    const R152 = '152';
    const R153 = '153';
    const R154 = '154';
    const R155 = '155';
    const R156 = '156';
    const R157 = '157';
    const R158 = '158';
    const R159 = '159';
    const R160 = '160';
    const R161 = '161';
    const R162 = '162';
    const R163 = '163';
    const R164 = '164';
    const R165 = '165';
    const R166 = '166';
    const R167 = '167';
    const R168 = '168';
    const R169 = '169';
    const R170 = '170';
    const R171 = '171';
    const R172 = '172';
    const R173 = '173';
    const R174 = '174';
    const R175 = '175';
    const R176 = '176';
    const R177 = '177';
    const R178 = '178';
    const R179 = '179';
    const R180 = '180';
    const R181 = '181';
    const R182 = '182';
    const R183 = '183';
    const R184 = '184';
    const R185 = '185';
    const R186 = '186';
    const R187 = '187';
    const R188 = '188';
    const R189 = '189';
    const R190 = '190';
    const R191 = '191';
    const R192 = '192';
    const R193 = '193';
    const R194 = '194';
    const R195 = '195';
    const R196 = '196';
    const R197 = '197';
    const R198 = '198';
    const R199 = '199';
    const R200 = '200';
    const R201 = '201';
    const R202 = '202';
    const R203 = '203';
    const R204 = '204';
    const R205 = '205';
    const R206 = '206';
    const R207 = '207';
    const R208 = '208';
    const R209 = '209';
    const R210 = '210';
    const R211 = '211';
    const R212 = '212';
    const R213 = '213';
    const R214 = '214';
    const R215 = '215';
    const R216 = '216';
    const R217 = '217';
    const R218 = '218';
    const R219 = '219';
    const R220 = '220';
    const R221 = '221';
    const R222 = '222';
    const R251 = '251';
    const R252 = '252';
    const R253 = '253';
    const R254 = '254';
    const R255 = '255';
    const R256 = '256';
    const R257 = '257';
    const R258 = '258';
    const R259 = '259';
    const R260 = '260';
    const R261 = '261';
    const R262 = '262';
    const R263 = '263';
    const R264 = '264';
    const R265 = '265';
    const R266 = '266';
    const R267 = '267';
    const R268 = '268';
    const R269 = '269';
    const R270 = '270';
    const R271 = '271';
    const R272 = '272';
    const R273 = '273';
    const R274 = '274';
    const R275 = '275';
    const R276 = '276';
    const R277 = '277';
    const R278 = '278';
    const R279 = '279';
    const R280 = '280';
    const R281 = '281';
    const R282 = '282';
    const R283 = '283';
    const R284 = '284';
    const R285 = '285';
    const R286 = '286';
    const R287 = '287';
    const R288 = '288';
    const R289 = '289';
    const R290 = '290';
    const R291 = '291';
    const R292 = '292';
    const R293 = '293';
    const R294 = '294';
    const R295 = '295';
    const R296 = '296';
    const R297 = '297';
    const R298 = '298';
    const R299 = '299';
    const R300 = '300';
    const R301 = '301';
    const R302 = '302';
    const R303 = '303';
    const R305 = '305';
    const R310 = '310';
    const R234 = '234';
    const R223 = '223';
    const R235 = '235';
    const R236 = '236';
    const R306 = '306';
    const R307 = '307';
    const R237 = '237';
    const R239 = '239';
    const R238 = '238';
    const R308 = '308';
    const R240 = '240';
    const R455 = '455';
    const R457 = '457';
    const R453 = '453';
    const R465 = '465';
    const R451 = '451';
    const R456 = '456';
    const R452 = '452';
    const R454 = '454';
    const R459 = '459';
    const R460 = '460';
    const R458 = '458';
    const R461 = '461';
    const R462 = '462';
    const R463 = '463';
    const R464 = '464';
    const R466 = '466';
    const R467 = '467';
    const R470 = '470';
    const R471 = '471';
    const R472 = '472';
    const R473 = '473';
    const R474 = '474';
    const R475 = '475';
    const R477 = '477';
    const R478 = '478';
    const R476 = '476';
    const R479 = '479';
    const R480 = '480';
    const R481 = '481';
    const R486 = '486';
    const R487 = '487';
    const R535 = '535';
    const R536 = '536';
    const R539 = '539';
    const R543 = '543';
    const R601 = '601';
    const R602 = '602';
    const R603 = '603';
    const R604 = '604';
    const R605 = '605';
    const R606 = '606';
    const R607 = '607';
    const R608 = '608';

    const R263264 = '263,264';
    const R270277 = '270,277';
    const R274275 = '274,275';
    const R282283 = '282,283';
    const R302303 = '302,303';
    const R302306 = '302,306';
    const R303308 = '303,308';
    const R306303 = '306,303';
    const R306308 = '306,308';
    const R470471 = '470,471';

    const R263264265 = '263,264,265';
    const R282283284 = '282,283,284';
    const R306303308 = '306,303,308';

    const AP01 = 'AP01';
    const AP02 = 'AP02';
    const AP03 = 'AP03';
    const AP04 = 'AP04';
    const AP05 = 'AP05';
    const AP06 = 'AP06';
    const AP07 = 'AP07';
    const AP08 = 'AP08';
    const AP09 = 'AP09';
    const AP10 = 'AP10';
    const AP11 = 'AP11';
    const AP12 = 'AP12';
    const AP13 = 'AP13';
    const AP14 = 'AP14';
    const AP15 = 'AP15';
    const AP16 = 'AP16';
    const AP17 = 'AP17';
    const AP18 = 'AP18';
    const AP19 = 'AP19';
    const AP20 = 'AP20';
    const AP21 = 'AP21';
    const AP22 = 'AP22';
    const AP23 = 'AP23';
    const AP24 = 'AP24';
    const AP25 = 'AP25';
    const AP26 = 'AP26';
    const AP27 = 'AP27';
    const AP28 = 'AP28';
    const AP29 = 'AP29';
    const AP30 = 'AP30';
    const AP31 = 'AP31';
    const AP33 = 'AP33';
    const AP34 = 'AP34';
    const AP35 = 'AP35';
    const AP36 = 'AP36';
    const AP37 = 'AP37';
    const AP38 = 'AP38';
    const AP39 = 'AP39';
    const AP40 = 'AP40';
    const AP41 = 'AP41';
    const AP42 = 'AP42';
    const AP43 = 'AP43';
    const AP44 = 'AP44';
    const AP45 = 'AP45';
    const AP46 = 'AP46';
    const AP47 = 'AP47';

    protected static $emandateregisterErrorCodeDescMappings = [
        self::R151 => 'Merchant Xmlns name empty or incorrect',
        self::R152 => 'Merchant MsgId empty or incorrect',
        self::R153 => 'Merchant CreDtTm empty or incorrect',
        self::R154 => 'Merchant ReqInitPty Id empty or incorrect',
        self::R155 => 'Merchant CatCode empty or incorrect',
        self::R156 => 'Merchant UtilCode empty or incorrect',
        self::R157 => 'Merchant CatDesc empty or incorrect',
        self::R158 => 'Merchant ReqInitPty name empty or incorrect',
        self::R159 => 'Merchant MndtReqId empty or incorrect',
        self::R160 => 'Merchant SeqTp empty or incorrect',
        self::R161 => 'Merchant Frqcy empty or incorrect',
        self::R162 => 'Merchant FrstColltnDt empty or incorrect',
        self::R163 => 'Merchant FnlColltnDt empty or incorrect',
        self::R164 => 'Merchant ColltnAmt ccy type empty or incorrect',
        self::R165 => 'Merchant ColltnAmt empty or incorrect',
        self::R166 => 'Merchant MaxAmt ccy type empty or incorrect',
        self::R167 => 'Merchant MaxAmt empty or incorrect',
        self::R168 => 'Merchant Creditor name empty or incorrect',
        self::R169 => 'Merchant Creditor Acc No empty or incorrect',
        self::R170 => 'Merchant Creditot MmbId empty or incorrect',
        self::R171 => 'Merchant MnadateReqId empty or incorrect',
        self::R172 => 'Merchant Creditor Acc No empty',
        self::R173 => 'Merchant Info not available',
        self::R174 => 'Merchant ReqInitPty not available',
        self::R175 => 'Merchant Creditor Acc Details not available',
        self::R176 => 'Merchant GrpHdr not available',
        self::R177 => 'Merchant Mndt not available',
        self::R178 => 'Merchant MndtAuthReq empty or not available',
        self::R179 => 'Merchant CheckSum validation failed',
        self::R180 => 'Merchant Signature validation failed',
        self::R181 => 'Error in decrypting Creditor Acc No',
        self::R182 => 'Error in decrypting FrstColltnDt',
        self::R183 => 'Error in decrypting FnlColltnDt',
        self::R184 => 'Error in decrypting ColltnAmt',
        self::R185 => 'Error in decrpting MaxAmt',
        self::R186 => 'Merchant Invalid request',
        self::R187 => 'Merchant Id empty or incorrect',
        self::R188 => 'Merchant ManReqDoc incorrect',
        self::R189 => 'Merchant CheckSum empty or not available',
        self::R190 => 'Merchant Signature not found',
        self::R191 => 'Merchant GrpHdr missing some tag',
        self::R192 => 'Merchant ReqInitPty missing some tag',
        self::R193 => 'Merchant Mndt missing some tag',
        self::R194 => 'Merchant CrAccDtl missing some tag',
        self::R195 => 'Merchant Certificate not found',
        self::R196 => 'Merchant Signature algorithm incorrect',
        self::R197 => 'Merchant Signature Digest algorithm incorrect',
        self::R198 => 'Merchant first date is after final date',
        self::R199 => 'Merchant CrAccDtl not available',
        self::R200 => 'Merchant first date not available',
        self::R201 => 'Merchant final date not available',
        self::R202 => 'Merchant first date empty',
        self::R203 => 'Merchant final date empty',
        self::R204 => 'Merchant ManReqDoc empty not available',
        self::R206 => 'Merchant ColltnAmt and MaxAmt empty',
        self::R207 => 'Merchant ColltnAmt and MaxAmt exist',
        self::R252 => 'Bank xmlns is empty or incorrect',
        self::R253 => 'Bank Response type is not available or empty',
        self::R254 => 'Bank Check sum is not available or empty',
        self::R255 => 'Bank Mandate request document is incorrect',
        self::R256 => 'Bank id not available or empty',
        self::R257 => 'Error in decrypting Accepted value',
        self::R258 => 'Error in decrypting Accepted Ref  Number',
        self::R259 => 'Error in decrypting Reason Code',
        self::R260 => 'Error in decrypting Reason Discription',
        self::R261 => 'Error in decrypting Rejected By',
        self::R263 => 'Error code not available in Error Xml',
        self::R264 => 'Error description not available in Error Xml',
        self::R265 => 'Rejected By not available in Error Xml',
        self::R266 => 'Mandate Error Resp not available in Error Xml',
        self::R267 => 'CheckSum validation failed',
        self::R268 => 'Bank UndrlygAccptncDtls not available',
        self::R269 => 'Bank GrpHdr empty or not available',
        self::R270 => 'Bank MsgId empty or incorrect',
        self::R205 => 'MerchantId not in approved list',
        self::R271 => 'Bank CreDtTm empty or incorrect',
        self::R272 => 'Bank ReqInitPty empty or incorrect',
        self::R273 => 'Bank OrgnlMsgInf not available',
        self::R274 => 'Bank MndtReqId empty or incorrect',
        self::R275 => 'Bank UndrlygAccptncDtls CreDtTm empty or incorrect',
        self::R276 => 'Bank  Accptd empty',
        self::R277 => 'Bank AccptRefNo empty or incorrect',
        self::R278 => 'Bank RjctRsn not available',
        self::R279 => 'Bank RjctRsn ReasonCode not empty',
        self::R280 => 'Bank RjctRsn ReasonDesc not empty',
        self::R281 => 'Bank RjctRsn RejectBy not empty',
        self::R282 => 'Bank RjctRsn ReasonCode empty or incorrect',
        self::R283 => 'Bank RjctRsn ReasonDesc empty or incorrect',
        self::R284 => 'Bank RjctRsn RejectBy empty or incorrect',
        self::R285 => 'Bank Certificate  not found',
        self::R286 => 'Bank IFSC Code incorrect',
        self::R287 => 'Bank RespType is incorrect',
        self::R288 => 'Bank GrpHdr missing some tags',
        self::R289 => 'Bank UndrlygAccptncDtls missing some tags',
        self::R290 => 'Bank OrgnlMsgInf missing some tags',
        self::R291 => 'Bank IFSC tag is missing',
        self::R292 => 'Bank DBTR not available',
        self::R293 => 'Bank AccptncRslt not available',
        self::R294 => 'Bank RjctRsn missing some tags',
        self::R295 => 'Bank ManReqDoc not available or empty',
        self::R296 => 'Bank Accptd type incorrect',
        self::R297 => 'Bank Signature not available',
        self::R298 => 'Bank Signature Digest algorithm incorrect',
        self::R299 => 'Bank Signature validation failed',
        self::R300 => 'Bank Signature algorithm incorrect',
        self::R262 => 'Bank NPCI Ref id empty or incorrect',
        self::R301 => 'BankId not in approved list',
        self::R208 => 'Merchant Catcode not in approved list',
        self::R209 => 'Merchant MsgId is duplicate',
        self::R302 => 'Bank MsgId is duplicate',
        self::R210 => 'Merchant Frequency type is invlid',
        self::R211 => 'Merchant Sequence type is invlid',
        self::R212 => 'Merchant Cat Description is not approved list',
        self::R303 => 'Bank Accepted Ref number is duplicate',
        self::R213 => 'Merchant UtilCode is not in approved list',
        self::R214 => 'Merchant Req Pay ID not in approved list',
        self::R215 => 'Merchant Creditor Acc Details name not in approved list',
        self::R216 => 'Merchant Occurences is empty',
        self::R217 => 'Merchant Debitor name empty or incorrect',
        self::R218 => 'Merchant Debitor Account number empty or incorrect',
        self::R219 => 'Merchant Debitor is missing some tags',
        self::R220 => 'Merchant Debitor Acc No empty',
        self::R221 => 'Merchant Debitor Acc  not available',
        self::R222 => 'Merchant Creditor and Debitor account number is same',
        self::R305 => 'Bank Response time out',
        self::R234 => 'Merchant Creditor account number is not approved list',
        self::R223 => 'Merchant info id , util and creditor accont number  are not equals',
        self::R235 => 'Merchant Mandate ID is duplicate',
        self::R236 => 'Merchant Debitor Account number decrypt Error',
        self::R306 => 'Bank Mandate id is duplicate',
        self::R307 => 'Bank NPCI Ref id not valid',
        self::R237 => 'Merchant Decrypt Error',
        self::R239 => 'Merchant Bank id not in approved list',
        self::R238 => 'Merchant Bank id not available',
        self::R308 => 'Bank Reason code and description not in approved list',
        self::R240 => 'Merchant Bank debit flag error',
        self::R455 => 'No Details available for Requested MandateReqID',
        self::R457 => 'Invalid Json structure',
        self::R453 => 'Invalid Json structure',
        self::R465 => 'Mandatory Key fields Empty or Invalid',
        self::R451 => 'No Details available for Requested NpciRefId',
        self::R456 => 'Transaction Open Status',
        self::R452 => 'Transaction Open Status',
        self::R454 => 'Mandatory Key fields Empty or Invalid',
        self::R459 => 'Mandatory Key fields Empty or Invalid',
        self::R460 => 'Empty or Invalid parameters',
        self::R458 => 'Mandatory Param fields Empty or Invalid',
        self::R461 => 'No Details available for Requested NpciRefId',
        self::R462 => 'Transaction Open Status',
        self::R463 => 'Invalid Json structure',
        self::R464 => 'Mandatory Param fields Empty or Invalid',
        self::R466 => 'More than one request in input',
        self::R467 => 'Incorrect input combinations',
        self::R470 => 'Bank Mndt ReqId not same as NpciReq',
        self::R471 => 'Bank NpciRefId not same as NpciReq',
        self::R251 => 'INVALID BANK RESPONSE RECEIVED',
        self::R472 => 'INVALID AUTHMODE RECEIVED',
        self::R473 => 'BNK_INVALID_ID',
        self::R474 => 'BANK_RET_ERROR_XML',
        self::R475 => 'Invalid JSON Structure',
        self::R477 => 'SPNBANK_NOT_CERT',
        self::R478 => 'DESTBANK_NOT_CERT',
        self::R476 => 'Sponsor Bank Not in Approved List for Corporate',
        self::R479 => 'Bank Invalid XML structure',
        self::R310 => 'Cancelled as per customer request',
        self::R480 => 'SPN_DESTBANK_NOT_CERT',
        self::R481 => 'DEST_SPNBANK_NOT_CERT',
        self::R486 => 'No Variant is eligible for Selection',
        self::R487 => 'No Variant is eligible for Selection',
        self::R606 => 'Duplicate Request',
        self::R607 => 'Previous Request in Progress',
        self::R608 => 'Bank Restricts Duplicate request',
        self::R535 => 'Mandate Verification API Url null',
        self::R536 => 'Error in Posting Mandate Details',
        self::R539 => 'Mandate Verify Details Response is null',
        self::R543 => 'Otp Verification API Url null',
        self::R601 => 'Invalid Debit Card Number',
        self::R602 => 'Invalid Expiry / Validity',
        self::R603 => 'Invalid CVV',
        self::R604 => 'Account Details Does not Match',
        self::R605 => 'Otp Verification Failure',

        self::R263264 => 'Error code not available in Error Xml,Error description not available in Error Xml',
        self::R270277 => 'Bank MsgId empty or incorrect,Bank AccptRefNo empty or incorrect',
        self::R274275 => 'Bank MndtReqId empty or incorrect,Bank UndrlygAccptncDtls CreDtTm empty or incorrect',
        self::R282283 => 'Bank RjctRsn ReasonCode empty or incorrect,Bank RjctRsn ReasonDesc empty or incorrect',
        self::R302303 => 'Bank MsgId is duplicate,Bank Accepted Ref number is duplicate',
        self::R302306 => 'Bank MsgId is duplicate,Bank Mandate id is duplicate',
        self::R303308 => 'Bank Accepted Ref number is duplicate,Bank Reason code and description not in approved list',
        self::R306303 => 'Bank Mandate id is duplicate,Bank Accepted Ref number is duplicate',
        self::R306308 => 'Bank Mandate id is duplicate,Bank Reason code and description not in approved list',
        self::R470471 => 'Bank Mndt ReqId not same as NpciReq,Bank NpciRefId not same as NpciReq',

        self::R263264265 => 'Multiple errors occured',
        self::R282283284 => 'Multiple errors occured',
        self::R306303308 => 'Multiple errors occured',

        self::AP01 => 'Account blocked',
        self::AP02 => 'Account closed',
        self::AP03 => 'Account frozen',
        self::AP04 => 'Account Inoperative',
        self::AP05 => 'No such account',
        self::AP06 => 'Not a CBS act no.or old act no.representwithCBS no',
        self::AP07 => 'Refer to the branch_KYC not completed',
        self::AP08 => 'Account Holder Name Mismatch with CBS',
        self::AP09 => 'Account type in mandate is different from CBS',
        self::AP10 => 'Amount Exceeds E mandate Limit',
        self::AP11 => 'Authentication Failed',
        self::AP12 => 'Amount of EMI more than limit allowed for the acct',
        self::AP13 => 'Invalid monthly EMI amount.Full loan amt mentioned',
        self::AP14 => 'Invalid User Credentials',
        self::AP15 => 'Mandate Not Registered_ not maintaining req balance',
        self::AP16 => 'Mandate Not Registered_Minor Account',
        self::AP17 => 'Mandate Not Registered_NRE Account',
        self::AP18 => 'Mandate registration not allowed for CC account',
        self::AP19 => 'Mandate registration not allowed for PF account',
        self::AP20 => 'Mandate registration not allowed for PPF account',
        self::AP21 => 'Payment stopped by attachment order',
        self::AP22 => 'Payment stopped by court order',
        self::AP23 => 'Rejected as per customer confirmation',
        self::AP24 => 'Account not in regular Status',
        self::AP25 => 'Withdrawal stopped owing to insolvency of account',
        self::AP26 => 'Withdrawal stopped owing to lunacy of account hold',
        self::AP27 => 'Invalid frequency',
        self::AP28 => 'Mandate Registration Failed',
        self::AP29 => 'Technical issues at bank end',
        self::AP30 => 'Browser closed by customer in mid transaction',
        self::AP31 => 'Mandate registration not allowed for Joint account',
        self::AP33 => 'User rejected the transaction on pre-Login page',
        self::AP34 => 'Account Number not registered with net banking facility',
        self::AP35 => 'Debit card validation failed due to_Invalid card number',
        self::AP36 => 'Debit card validation failed due to_Invalid expiry date',
        self::AP37 => 'Debit Card validation failed due to_Invalid PIN',
        self::AP38 => 'Debit card validation failed due to Invalid CVV',
        self::AP39 => 'OTP Invalid',
        self::AP40 => 'Maximum tries exceeded for OTP',
        self::AP41 => 'Time expired for OTP',
        self::AP42 => 'Debit card not activated',
        self::AP43 => 'Debit card blocked',
        self::AP44 => 'Debit card hot listed',
        self::AP45 => 'Debit card expired',
        self::AP46 => 'No response received from the customer while performing the mandate registration.',
        self::AP47 => 'Account number registered for only view rights in net-banking facility',
    ];

    protected static $emandateRegisterErrorCodeMappings = [
        self::R151 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R152 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R153 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R154 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R155 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R156 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R157 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R158 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R159 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R160 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R161 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R162 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R163 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R164 => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_CURRENCY,
        self::R165 => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_AMOUNT,
        self::R166 => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_CURRENCY,
        self::R167 => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_AMOUNT,
        self::R168 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R169 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R170 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R171 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R172 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R173 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R174 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R175 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R176 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R177 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R178 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R179 => ErrorCode::GATEWAY_ERROR_CHECKSUM_MATCH_FAILED,
        self::R180 => ErrorCode::GATEWAY_ERROR_SIGNATURE_VALIDATION_FAILED,
        self::R181 => ErrorCode::GATEWAY_ERROR_DECRYPTION_FAILED,
        self::R182 => ErrorCode::GATEWAY_ERROR_DECRYPTION_FAILED,
        self::R183 => ErrorCode::GATEWAY_ERROR_DECRYPTION_FAILED,
        self::R184 => ErrorCode::GATEWAY_ERROR_DECRYPTION_FAILED,
        self::R185 => ErrorCode::GATEWAY_ERROR_DECRYPTION_FAILED,
        self::R186 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R187 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R188 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R189 => ErrorCode::GATEWAY_ERROR_CHECKSUM_MATCH_FAILED,
        self::R190 => ErrorCode::GATEWAY_ERROR_SIGNATURE_VALIDATION_FAILED,
        self::R191 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R192 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R193 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R194 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R195 => ErrorCode::GATEWAY_ERROR_CERTIFICATE_VALIDATION_FAILED,
        self::R196 => ErrorCode::GATEWAY_ERROR_SIGNATURE_VALIDATION_FAILED,
        self::R197 => ErrorCode::GATEWAY_ERROR_SIGNATURE_VALIDATION_FAILED,
        self::R198 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R199 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R200 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R201 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R202 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R203 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R204 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R206 => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_AMOUNT,
        self::R207 => ErrorCode::GATEWAY_ERROR_PAYMENT_INVALID_AMOUNT,
        self::R205 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R208 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R209 => ErrorCode::GATEWAY_ERROR_PAYMENT_DUPLICATE_REQUEST,
        self::R210 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R211 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R212 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R213 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R214 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R215 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R216 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R217 => ErrorCode::BAD_REQUEST_INVALID_ACCOUNT_HOLDER_NAME,
        self::R218 => ErrorCode::BAD_REQUEST_PAYMENT_INVALID_ACCOUNT,
        self::R219 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R220 => ErrorCode::BAD_REQUEST_PAYMENT_INVALID_ACCOUNT,
        self::R221 => ErrorCode::BAD_REQUEST_PAYMENT_INVALID_ACCOUNT,
        self::R222 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R305 => ErrorCode::GATEWAY_ERROR_TIMED_OUT,
        self::R234 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R223 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R235 => ErrorCode::GATEWAY_ERROR_PAYMENT_DUPLICATE_REQUEST,
        self::R236 => ErrorCode::GATEWAY_ERROR_DECRYPTION_FAILED,
        self::R237 => ErrorCode::GATEWAY_ERROR_DECRYPTION_FAILED,
        self::R239 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R238 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R240 => ErrorCode::GATEWAY_ERROR_UNKNOWN_ERROR,
        self::R455 => ErrorCode::GATEWAY_ERROR_PAYMENT_NOT_FOUND,
        self::R457 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R453 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R465 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R451 => ErrorCode::GATEWAY_ERROR_PAYMENT_NOT_FOUND,
        self::R456 => ErrorCode::GATEWAY_ERROR_UNKNOWN_ERROR,
        self::R452 => ErrorCode::GATEWAY_ERROR_UNKNOWN_ERROR,
        self::R454 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R459 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R460 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R458 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R461 => ErrorCode::GATEWAY_ERROR_PAYMENT_NOT_FOUND,
        self::R462 => ErrorCode::GATEWAY_ERROR_UNKNOWN_ERROR,
        self::R463 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R464 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R466 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R467 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R470 => ErrorCode::GATEWAY_ERROR_INVALID_RESPONSE_BY_DESTINATION_BANK,
        self::R471 => ErrorCode::GATEWAY_ERROR_INVALID_RESPONSE_BY_DESTINATION_BANK,
        self::R472 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R473 => ErrorCode::GATEWAY_ERROR_UNKNOWN_ERROR,
        self::R474 => ErrorCode::GATEWAY_ERROR_UNKNOWN_ERROR,
        self::R475 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R477 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R478 => ErrorCode::BAD_REQUEST_INVALID_BANK_FOR_EMANDATE,
        self::R476 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R479 => ErrorCode::GATEWAY_ERROR_INVALID_RESPONSE_BY_DESTINATION_BANK,
        self::R310 => ErrorCode::BAD_REQUEST_PAYMENT_CANCELLED_BY_USER,
        self::R480 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R481 => ErrorCode::BAD_REQUEST_INVALID_BANK_FOR_EMANDATE,
        self::R486 => ErrorCode:: GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R487 => ErrorCode:: GATEWAY_ERROR_INVALID_PARAMETERS,
        self::R606 => ErrorCode::BAD_REQUEST_EMANDATE_REGISTRATION_DUPLICATE_REQUEST,
        self::R607 => ErrorCode::BAD_REQUEST_EMANDATE_REGISTRATION_ALREADY_IN_PROGRESS,
        self::R608 => ErrorCode::BAD_REQUEST_EMANDATE_REGISTRATION_ALREADY_DECLINED_BY_BANK,
        self::R535 => ErrorCode::GATEWAY_ERROR_PAYMENT_FAILED,
        self::R536 => ErrorCode::GATEWAY_ERROR_PAYMENT_FAILED,
        self::R539 => ErrorCode::GATEWAY_ERROR_PAYMENT_FAILED,
        self::R543 => ErrorCode::GATEWAY_ERROR_PAYMENT_FAILED,
        self::R601 => ErrorCode::BAD_REQUEST_PAYMENT_CARD_NUMBER_POSSIBLY_INVALID,
        self::R602 => ErrorCode::BAD_REQUEST_PAYMENT_CARD_INVALID_EXPIRY_DATE,
        self::R603 => ErrorCode::BAD_REQUEST_PAYMENT_CARD_INVALID_CVV,
        self::R604 => ErrorCode::BAD_REQUEST_VALIDATION_FAILURE,
        self::R605 => ErrorCode::BAD_REQUEST_PAYMENT_OTP_INCORRECT,

        self::R263264 => ErrorCode::GATEWAY_ERROR_PAYMENT_FAILED,
        self::R270277 => ErrorCode::GATEWAY_ERROR_PAYMENT_FAILED,
        self::R274275 => ErrorCode::GATEWAY_ERROR_PAYMENT_FAILED,
        self::R282283 => ErrorCode::GATEWAY_ERROR_PAYMENT_FAILED,
        self::R302303 => ErrorCode::GATEWAY_ERROR_PAYMENT_DUPLICATE_REQUEST,
        self::R302306 => ErrorCode::GATEWAY_ERROR_PAYMENT_DUPLICATE_REQUEST,
        self::R303308 => ErrorCode::GATEWAY_ERROR_PAYMENT_DUPLICATE_REQUEST,
        self::R306303 => ErrorCode::GATEWAY_ERROR_PAYMENT_DUPLICATE_REQUEST,
        self::R306308 => ErrorCode::GATEWAY_ERROR_PAYMENT_DUPLICATE_REQUEST,
        self::R470471 => ErrorCode::GATEWAY_ERROR_PAYMENT_DUPLICATE_REQUEST,

        self::R263264265 => ErrorCode::GATEWAY_ERROR_PAYMENT_FAILED,
        self::R282283284 => ErrorCode::GATEWAY_ERROR_PAYMENT_FAILED,
        self::R306303308 => ErrorCode::GATEWAY_ERROR_PAYMENT_FAILED,

        self::AP01 => ErrorCode::BAD_REQUEST_ACCOUNT_BLOCKED,
        self::AP02 => ErrorCode::BAD_REQUEST_ACCOUNT_CLOSED,
        self::AP03 => ErrorCode::BAD_REQUEST_PAYMENT_ACCOUNT_WITHDRAWAL_FROZEN,
        self::AP04 => ErrorCode::BAD_REQUEST_PAYMENT_INVALID_ACCOUNT,
        self::AP05 => ErrorCode::BAD_REQUEST_PAYMENT_INVALID_ACCOUNT,
        self::AP06 => ErrorCode::BAD_REQUEST_PAYMENT_INVALID_ACCOUNT,
        self::AP07 => ErrorCode::BAD_REQUEST_PAYMENT_KYC_PENDING,
        self::AP08 => ErrorCode::BAD_REQUEST_INVALID_ACCOUNT_HOLDER_NAME,
        self::AP09 => ErrorCode::BAD_REQUEST_PAYMENT_INVALID_ACCOUNT,
        self::AP10 => ErrorCode::BAD_REQUEST_EMANDATE_AMOUNT_LIMIT_EXCEEDED,
        self::AP11 => ErrorCode::BAD_REQUEST_AUTHENTICATION_FAILED,
        self::AP12 => ErrorCode::GATEWAY_ERROR_UNKNOWN_ERROR,
        self::AP13 => ErrorCode::GATEWAY_ERROR_UNKNOWN_ERROR,
        self::AP14 => ErrorCode::BAD_REQUEST_INVALID_USER_CREDENTIALS,
        self::AP15 => ErrorCode::BAD_REQUEST_PAYMENT_ACCOUNT_INSUFFICIENT_BALANCE,
        self::AP16 => ErrorCode::BAD_REQUEST_PAYMENT_INVALID_ACCOUNT,
        self::AP17 => ErrorCode::BAD_REQUEST_PAYMENT_INVALID_ACCOUNT,
        self::AP18 => ErrorCode::BAD_REQUEST_PAYMENT_INVALID_ACCOUNT,
        self::AP19 => ErrorCode::BAD_REQUEST_PAYMENT_INVALID_ACCOUNT,
        self::AP20 => ErrorCode::BAD_REQUEST_PAYMENT_INVALID_ACCOUNT,
        self::AP21 => ErrorCode::BAD_REQUEST_PAYMENT_CANCELLED_AT_EMANDATE_REGISTRATION,
        self::AP22 => ErrorCode::GATEWAY_ERROR_UNKNOWN_ERROR,
        self::AP23 => ErrorCode::BAD_REQUEST_PAYMENT_CANCELLED_AT_EMANDATE_REGISTRATION,
        self::AP24 => ErrorCode::BAD_REQUEST_ACCOUNT_BLOCKED,
        self::AP25 => ErrorCode::BAD_REQUEST_PAYMENT_ACCOUNT_WITHDRAWAL_FROZEN,
        self::AP26 => ErrorCode::BAD_REQUEST_PAYMENT_ACCOUNT_WITHDRAWAL_FROZEN,
        self::AP27 => ErrorCode::GATEWAY_ERROR_INVALID_PARAMETERS,
        self::AP28 => ErrorCode::BAD_REQUEST_EMANDATE_REGISTRATION_FAILED,
        self::AP29 => ErrorCode::GATEWAY_ERROR_COMMUNICATION_ERROR,
        self::AP30 => ErrorCode::BAD_REQUEST_PAYMENT_CANCELLED_AT_EMANDATE_REGISTRATION,
        self::AP31 => ErrorCode::BAD_REQUEST_EMANDATE_REGISTRATION_FAILED_JOINT_ACCOUNT,
        self::AP33 => ErrorCode::BAD_REQUEST_PAYMENT_CANCELLED_AT_EMANDATE_REGISTRATION,
        self::AP34 => ErrorCode::BAD_REQUEST_NETBANKING_USER_NOT_REGISTERED,
        self::AP35 => ErrorCode::BAD_REQUEST_PAYMENT_CARD_NUMBER_POSSIBLY_INVALID,
        self::AP36 => ErrorCode::BAD_REQUEST_PAYMENT_CARD_INVALID_EXPIRY_DATE,
        self::AP37 => ErrorCode::BAD_REQUEST_PAYMENT_CARD_INVALID_PIN,
        self::AP38 => ErrorCode::BAD_REQUEST_PAYMENT_CARD_INVALID_CVV,
        self::AP39 => ErrorCode::BAD_REQUEST_PAYMENT_OTP_INCORRECT,
        self::AP40 => ErrorCode::BAD_REQUEST_PAYMENT_OTP_VALIDATION_ATTEMPT_LIMIT_EXCEEDED,
        self::AP41 => ErrorCode::BAD_REQUEST_PAYMENT_OTP_VALIDATION_ATTEMPT_LIMIT_EXCEEDED,
        self::AP42 => ErrorCode::BAD_REQUEST_CARD_INACTIVE,
        self::AP43 => ErrorCode::BAD_REQUEST_PAYMENT_DECLINED_BY_BANK_DUE_TO_BLOCKED_CARD,
        self::AP44 => ErrorCode::BAD_REQUEST_PAYMENT_DECLINED_BY_BANK_DUE_TO_BLOCKED_CARD,
        self::AP45 => ErrorCode::BAD_REQUEST_PAYMENT_CARD_EXPIRED,
        self::AP46 => ErrorCode::BAD_REQUEST_PAYMENT_CANCELLED_AT_EMANDATE_REGISTRATION,
        self::AP47 => ErrorCode::BAD_REQUEST_NETBANKING_USER_NOT_REGISTERED,
    ];

    public static function getEmandateRegisterErrorDescriptionFromCode($code)
    {
        $defaultErrorCode = ErrorCode::GATEWAY_ERROR_TOKEN_REGISTRATION_FAILED;

        $errorCode = self::$emandateRegisterErrorCodeMappings[$code] ?? $defaultErrorCode;

        return self::getDescriptionFromErrorCode($errorCode);
    }

    protected static function throwInvalidResponseErrorIfCodeNotMapped($errorCode, array $mapping, array $content)
    {
        if (isset($mapping[$errorCode]) === false)
        {
            // Log the whole row, that way it'd be easier to debug based on token id or
            // payment id in case it fails
            throw new GatewayErrorException(
                ErrorCode::GATEWAY_ERROR_INVALID_RESPONSE,
                '',
                'Gateway response code mapping not found.',
                $content);
        }
    }

    protected static function getDescriptionFromErrorCode($code)
    {
        $error = new Error($code);

        return $error->getDescription();
    }

    public static function getInternalErrorCode($errorCode)
    {
        $default = ErrorCode::GATEWAY_ERROR_UNKNOWN_ERROR;

        $errorCode = self::$emandateRegisterErrorCodeMappings[$errorCode] ?? $default;

        return $errorCode;
    }
}