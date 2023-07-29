<?php

namespace RZP\Gateway\Card\Fss\ErrorCodes;

use RZP\Gateway\Base\ErrorCodes\Cards;

class ErrorCodeDescriptions extends Cards\ErrorCodeDescriptions
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

    public static $errorDescMap = [
        'IPAY0100001' => 'Missing error url.',
        'IPAY0100002' => 'Invalid error url.',
        'IPAY0100003' => 'Missing response url.',
        'IPAY0100004' => 'Invalid response url.',
        'IPAY0100005' => 'Missing tranportal id.',
        'IPAY0100006' => 'Invalid tranportal id.',
        'IPAY0100007' => 'Missing transaction data.',
        'IPAY0100008' => 'Terminal not enabled.',
        'IPAY0100009' => 'Institution not enabled.',
        'IPAY0100010' => 'Institution has not enabled for the encryption process.',
        'IPAY0100011' => 'Merchant has not enabled for encryption process.',
        'IPAY0100013' => 'Invalid transaction data.',
        'IPAY0100014' => 'Terminal Authentication requested with invalid tranportal id data.',
        'IPAY0100015' => 'Invalid tranportal password.',
        'IPAY0100016' => 'Password security not enabled.',
        'IPAY0100017' => 'Inactive terminal.',
        'IPAY0100018' => 'Terminal password expired.',
        'IPAY0100019' => 'Invalid login attempt.',
        'IPAY0100020' => 'Invalid action type.',
        'IPAY0100021' => 'Missing currency.',
        'IPAY0100022' => 'Invalid currency.',
        'IPAY0100023' => 'Missing amount.',
        'IPAY0100024' => 'Invalid amount.',
        'IPAY0100025' => 'Invalid amount or currency.',
        'IPAY0100026' => 'Invalid language id.',
        'IPAY0100027' => 'Invalid track id.',
        'IPAY0100028' => 'Invalid user defined field1.',
        'IPAY0100029' => 'Invalid user defined field2.',
        'IPAY0100030' => 'Invalid user defined field3.',
        'IPAY0100031' => 'Invalid user defined field4.',
        'IPAY0100032' => 'Invalid user defined field5.',
        'IPAY0100033' => 'Terminal action not enabled.',
        'IPAY0100034' => 'Currency code not enabled.',
        'IPAY0100035' => 'Problem occured during merchant hashing process.',
        'IPAY0100036' => 'UDF MISMATCHED',
        'IPAY0100045' => 'DENIED BY RISK',
        'IPAY0100037' => 'Payment id missing.',
        'IPAY0100038' => 'Unable to process the request.',
        'IPAY0100039' => 'Invalid payment id .',
        'IPAY0100041' => 'Payment details missing.',
        'IPAY0100042' => 'Transaction time limit exceeds.',
        'IPAY0100043' => 'IP address is blocked already',
        'IPAY0100044' => 'Problem occured while loading payment page.',
        'IPAY0100046' => 'Payment option not enabled.',
        'IPAY0100048' => 'CANCELLED',
        'IPAY0100049' => 'Transaction Declined Due To Exceeding OTP Attempts',
        'IPAY0100050' => 'Invalid terminal key.',
        'IPAY0100051' => 'Missing terminal key.',
        'IPAY0100052' => 'Problem occured during merchant response encryption.',
        'IPAY0100053' => 'Problem occured while processing direct debit.',
        'IPAY0100054' => 'Payment details not available.',
        'IPAY0100056' => 'Instrument not allowed in Terminal and Brand.',
        'IPAY0100057' => 'Transaction denied due to invalid processing option action code.',
        'IPAY0100058' => 'Transaction denied due to invalid instrument',
        'IPAY0100059' => 'Transaction denied due to invalid currency code.',
        'IPAY0100060' => 'Transaction denied due to missing amount.',
        'IPAY0100061' => 'Transaction denied due to invalid amount.',
        'IPAY0100062' => 'Transaction denied due to invalid Amount/Currency.',
        'IPAY0100063' => 'Transaction denied due to invalid trackID',
        'IPAY0100064' => 'Transaction denied due to invalid UDF1',
        'IPAY0100065' => 'Transaction denied due to invalid UDF2',
        'IPAY0100066' => 'Transaction denied due to invalid UDF3',
        'IPAY0100067' => 'Transaction denied due to invalid UDF4',
        'IPAY0100068' => 'Transaction denied due to invalid UDF5',
        'IPAY0100069' => 'Missing payment instrument.',
        'IPAY0100070' => 'Transaction denied due to failed card check digit calculation.',
        'IPAY0100071' => 'Transaction denied due to missing CVD2.',
        'IPAY0100072' => 'Transaction denied due to invalid CVD2 for rupay card.',
        'IPAY0100073' => 'Transaction denied due to invalid CVV.',
        'IPAY0100074' => 'Transaction denied due to missing expiry year.',
        'IPAY0100075' => 'Transaction denied due to invalid expiry year.',
        'IPAY0100076' => 'Transaction denied due to missing expiry month.',
        'IPAY0100077' => 'Transaction denied due to invalid expiry month.',
        'IPAY0100078' => 'Transaction denied due to missing expiry day.',
        'IPAY0100079' => 'Transaction denied due to invalid expiry day.',
        'IPAY0100080' => 'Transaction denied due to invalid expiration date.',
        'IPAY0100081' => 'Card holder name is not present',
        'IPAY0100082' => 'Card address is not present',
        'IPAY0100083' => 'Card postal code is not present',
        'IPAY0100084' => 'AVS Check : Fail',
        'IPAY0100085' => 'Electronic Commerce Indicator is invalid.',
        'IPAY0100086' => 'Transaction denied due to missing CVV.',
        'IPAY0100087' => 'Card pin number is not present',
        'IPAY0100088' => 'Empty mobile number.',
        'IPAY0100089' => 'Invalid mobile number.',
        'IPAY0100090' => 'Empty MMID.',
        'IPAY0100091' => 'Invalid MMID.',
        'IPAY0100092' => 'Empty OTP number.',
        'IPAY0100093' => 'Invalid OTP number.',
        'IPAY0100094' => 'Sorry, this instrument is not handled',
        'IPAY0100095' => 'Terminal inactive.',
        'IPAY0100096' => 'IMPS for Institution Not Active for Transaction request, Institution',
        'IPAY0100097' => 'IMPS for Terminal Not Active for Transaction request, Terminal',
        'IPAY0100100' => 'Problem occured while authorize.',
        'IPAY0100101' => 'Denied by risk : Risk Profile does not exist.',
        'IPAY0100102' => 'Denied by risk : Maximum Floor Limit Check - Fail',
        'IPAY0100103' => 'Transaction denied due to Risk : Maximum transaction count',
        'IPAY0100104' => 'Transaction denied due to Risk : Maximum processing amount',
        'IPAY0100105' => 'Action type not supported by maestro brand.',
        'IPAY0100106' => 'Invalid payment instrument.',
        'IPAY0100107' => 'Instrument not enabled.',
        'IPAY0100108' => 'Perform risk check : Failed',
        'IPAY0100109' => 'Invalid subsequent transaction, payment id is null or empty.',
        'IPAY0100110' => 'Invalid subsequent transaction, Tran Ref id is null or empty.',
        'IPAY0100111' => 'Card decryption failed.',
        'IPAY0100112' => 'Problem occurred in method loading original transaction data(card number, exp month / year)
        for orig_tran_id',
        'IPAY0100114' => 'Duplicate Record',
        'IPAY0100115' => 'Transaction denied due to missing original transaction id.',
        'IPAY0100116' => 'Transaction denied due to invalid original transaction id.',
        'IPAY0100117' => 'Transaction denied due to missing card number.',
        'IPAY0100118' => 'Transaction denied due to card number length error.',
        'IPAY0100119' => 'Transaction denied due to invalid card number',
        'IPAY0100120' => 'Transaction denied due to invalid payment instrument for brand data.',
        'IPAY0100121' => 'Transaction denied due to invalid card holder name.',
        'IPAY0100122' => 'Transaction denied due to invalid address.',
        'IPAY0100123' => 'Transaction denied due to invalid postal code.',
        'IPAY0100124' => 'Problem occured while validating transaction data',
        'IPAY0100125' => 'Payment instrument not enabled.',
        'IPAY0100126' => 'Brand not enabled.',
        'IPAY0100257' => 'Brand rules not enabled.',
        'IPAY0100127' => 'Problem occured while doing validate original transaction',
        'IPAY0100128' => 'Transaction denied due to Institution ID mismatch',
        'IPAY0100129' => 'Transaction denied due to Merchant ID mismatch',
        'IPAY0100130' => 'Transaction denied due to Terminal ID mismatch',
        'IPAY0100131' => 'Transaction denied due to Payment Instrument mismatch',
        'IPAY0100132' => 'Transaction denied due to Currency Code mismatch',
        'IPAY0100133' => 'Transaction denied due to Card Number mismatch',
        'IPAY0100134' => 'Transaction denied due to invalid Result Code',
        'IPAY0100136' => 'Transaction denied due to previous capture check failure ( Validate Original Transaction )',
        'IPAY0100137' => 'Transaction denied due to credit amount greater than debit amount check failure ( Validate,
        Original Transaction )',
        'IPAY0100138' => 'Transaction denied due to capture amount versus auth amount check failure ( Validate Original
        Transaction )',
        'IPAY0100139' => 'Transaction denied due to void amount versus original amount check failure (Validate Original
         Transaction )',
        'IPAY0100140' => 'Transaction denied due to previous void check failure ( Validate Original Transaction )',
        'IPAY0100141' => 'Transaction denied due to authorization already captured ( Validate Original Transaction )',
        'IPAY0100142' => 'Problem occurred while validating original transaction.',
        'IPAY0100143' => 'Transaction action is null',
        'IPAY0100144' => 'ISO MSG is null. See log for more details!',
        'IPAY0100145' => 'Problem occurred while loading default messages in ISO Formatter',
        'IPAY0100146' => 'Problem occurred while encrypting PIN',
        'IPAY0100147' => 'Problem occurred while formatting purchase request in B24 ISO Message Formatter',
        'IPAY0100148' => 'Problem occurred while hashing ecom pin.',
        'IPAY0100149' => 'Invalid PIN Type',
        'IPAY0100150' => 'Problem occurred while formatting Reverse purchase request in B24 ISO Message Formatter',
        'IPAY0100151' => 'Problem occurred while formatting Credit request in B24 ISO Message Formatter',
        'IPAY0100152' => 'Problem occurred while formatting authorization request in B24 ISO Message Formatter',
        'IPAY0100153' => 'Problem occurred while formatting Capture request in B24 ISO Message Formatter',
        'IPAY0100154' => 'Problem occurred while formatting Reverse Credit request in B24 ISO Message Formatter',
        'IPAY0100155' => 'Problem occurred while formatting reverse authorization request in B24 ISO Message Formatter',
        'IPAY0100156' => 'Problem occurred while formatting Reverse Capture request in B24 ISO Message Formatter',
        'IPAY0100157' => 'Problem occurred while formatting vpas capture request in B24 ISO Message Formatter',
        'IPAY0100158' => 'Host timeout',
        'IPAY0100159' => 'External message system error',
        'IPAY0100160' => 'Unable to process the transaction.',
        'IPAY0100162' => 'Merchant is not allowed for encryption process.',
        'IPAY0100163' => 'Problem occured during transaction.',
        'IPAY0100164' => 'Transaction Not Processed due to Invalid ECI value',
        'IPAY0100165' => 'Transaction Not Processed due to Empty ECI value',
        'IPAY0100166' => 'Transaction Not Processed due to Empty Authentication Status',
        'IPAY0100167' => 'Transaction Not Processed due to Invalid Authentication Status',
        'IPAY0100168' => 'Transaction Not Processed due to Empty Enrollment Status',
        'IPAY0100169' => 'Transaction Not Processed due to Invalid Enrollment Status',
        'IPAY0100170' => 'Transaction Not Processed due to Invalid Cavv',
        'IPAY0100171' => 'Transaction Not Processed due to Empty Cavv',
        'IPAY0100176' => 'Decrypting transaction data failed.',
        'IPAY0100178' => 'Invalid input data received.',
        'IPAY0100180' => 'Authentication not available.',
        'IPAY0100181' => 'Card encryption failed.',
        'IPAY0100182' => 'Vpas merchant not enabled.',
        'IPAY0100183' => 'Error Occured Due to bytePAReq is null',
        'IPAY0100184' => 'Error Occured while Parsing PAReq',
        'IPAY0100185' => 'Problem occured while authentication',
        'IPAY0100270' => 'pares not successfull',
        'IPAY0100186' => 'Encryption enabled.',
        'IPAY0100187' => 'Customer ID is missing for Faster Checkout',
        'IPAY0100188' => 'Transaction Mode(FC) is missing for Faster Checkout',
        'IPAY0100189' => 'Transaction denied due to brand directory unavailable',
        'IPAY0100190' => 'Transaction denied due to Risk : Maximum floor limit transaction count',
        'IPAY0100191' => 'Denied by risk : Negative Card check - Fail.',
        'IPAY0100192' => 'Transaction Not Processed due to Empty Xid',
        'IPAY0100193' => 'Transaction Not Processed due to Invalid Xid',
        'IPAY0100194' => 'Transaction denied due to Risk : Minimum Transaction Amount processing.',
        'IPAY0100195' => 'Transaction denied due to Risk : Maximum credit processing amount',
        'IPAY0100196' => 'Transaction denied due to Risk : Maximum processing amount',
        'IPAY0100197' => 'Transaction denied due to Risk : Maximum debit amount',
        'IPAY0100198' => 'Transaction denied due to Risk : Transaction count limit exceeded for the IP',
        'IPAY0100199' => 'Transaction denied due to previous credit check failure ( Validate Original Transaction )',
        'IPAY0100200' => 'Denied by risk : Negative BIN check - Fail.',
        'IPAY0100201' => 'Denied by risk : Declined Card check - Fail',
        'IPAY0100203' => 'Problem occured while doing perform transaction.',
        'IPAY0100204' => 'Missing payment details.',
        'IPAY0100205' => 'Problem occurred while getting enstage response details.',
        'IPAY0100206' => 'Problem occurred while getting currency minor digits.',
        'IPAY0100207' => 'Bin range not enabled.',
        'IPAY0100208' => 'Action not enabled.',
        'IPAY0100209' => 'Institution config not enabled.',
        'IPAY0100210' => 'Problem occured during veres process.',
        'IPAY0100211' => 'Problem occured during EnStage process.',
        'IPAY0100212' => 'Problem occured while getting veres.',
        'IPAY0100213' => 'Problem occured while processing the hosted transaction request.',
        'IPAY0100214' => 'Problem occurred while verifying tranportal id.',
        'IPAY0100215' => 'Invalid tranportal id.',
        'IPAY0100216' => 'Invalid data received.',
        'IPAY0100217' => 'Invalid payment detail.',
        'IPAY0100218' => 'Invalid brand id.',
        'IPAY0100219' => 'Missing card number.',
        'IPAY0100220' => 'Invalid card number.',
        'IPAY0100221' => 'Missing card holder name.',
        'IPAY0100222' => 'Invalid card holder name.',
        'IPAY0100223' => 'Missing cvv.',
        'IPAY0100224' => 'Invalid cvv.',
        'IPAY0100225' => 'Missing card expiry year.',
        'IPAY0100226' => 'Invalid card expiry year.',
        'IPAY0100227' => 'Missing card expiry month.',
        'IPAY0100228' => 'Invalid card expiry month.',
        'IPAY0100229' => 'Invalid card expiry day.',
        'IPAY0100230' => 'Card expired.',
        'IPAY0100231' => 'Invalid user defined field.',
        'IPAY0100232' => 'Missing original transaction id',
        'IPAY0100233' => 'Invalid original transaction id.',
        'IPAY0100234' => 'Problem occurred while formatting Reverse Capture request in VISA ISO Message Formatter',
        'IPAY0100235' => 'Problem occurred while formatting reverse authorization request in VISA ISO MessageFormatter',
        'IPAY0100236' => 'Problem occurred while formatting Reverse Credit request in VISA ISO Message Formatter',
        'IPAY0100237' => 'Problem occurred while formatting Reverse purchase request in VISA ISO Message Formatter',
        'IPAY0100238' => 'Problem occurred while formatting Capture request in VISA ISO Message Formatter',
        'IPAY0100239' => 'Problem occurred while formatting authorization request in VISA ISO Message Formatter',
        'IPAY0100240' => 'Problem occurred while formatting Credit request in VISA ISO Message Formatter',
        'IPAY0100241' => 'Problem occurred while formatting purchase request in VISA ISO Message Formatter',
        'IPAY0100242' => 'RC_UNAVAILABLE',
        'IPAY0100243' => 'NOT SUPPORTED',
        'IPAY0100245' => 'Problem occurred while sending/receivinig ISO message',
        'IPAY0100246' => 'Problem occurred while doing perform ip risk check.',
        'IPAY0100247' => 'PARES message format is invalid',
        'IPAY0100248' => 'Problem occured while validating PARES message format.',
        'IPAY0100249' => 'Merchant response url is down.',
        'IPAY0100250' => 'Payment details verification failed.',
        'IPAY0100251' => 'Invalid payment data.',
        'IPAY0100252' => 'Missing veres.',
        'IPAY0100253' => 'Problem occured while cancelling the transaction.',
        'IPAY0100254' => 'Merchant not enabled for performing transaction.',
        'IPAY0100255' => 'External connection not enabled.',
        'IPAY0100256' => 'Payment encryption failed.',
        'IPAY0100258' => 'Certification verification failed.',
        'IPAY0100259' => 'Problem occured during merchant hashing process.',
        'IPAY0100260' => 'Payment option(s) not enabled.',
        'IPAY0100261' => 'Payment hashing failed.',
        'IPAY0100262' => 'Problem occured during VEREQ process.',
        'IPAY0100263' => 'Transaction details not available.',
        'IPAY0100264' => 'Signature validation failed.',
        'IPAY0100265' => 'Enstage Response validation failed.',
        'IPAY0100266' => 'Brand directory unavailable.',
        'IPAY0100267' => 'Enstage Response status not sucessfull.',
        'IPAY0100268' => '3d secure not enabled for the brand',
        'IPAY0100269' => 'Invalid card check digit',
        'IPAY0100271' => 'Problem occurred while formatting purchase request in MASTER ISO Message Formatter',
        'IPAY0100272' => 'Problem occured while validating xml message format.',
        'IPAY0100273' => 'Problem occured while validation VERES message format',
        'IPAY0100274' => 'VERES message format is invalid',
        'IPAY0100275' => 'Problem occurred while formatting Credit request in MASTER ISO Message Formatter',
        'IPAY0100276' => 'Problem occurred while formatting Reverse purchase request in MASTER ISO Message Formatter',
        'IPAY0100277' => 'Problem occurred while formatting Reverse Credit request in MASTER ISO Message Formatter',
        'IPAY0100278' => 'Problem occurred while formatting reverse authorization request in MASTER ISO
        Message Formatter',
        'IPAY0100279' => 'Problem occurred while formatting Reverse Capture request in MASTER ISO Message Formatter',
        'IPAY0100280' => 'Problem occurred while formatting Capture request in MASTER ISO Message Formatter',
        'IPAY0100281' => 'Transaction Denied due to missing Master Brand',
        'IPAY0100282' => 'Transaction Denied due to missing Visa Brand',
        'IPAY0100283' => 'Problem occured in determine payment instrument.',
        'IPAY0100284' => 'Invalid subsequent transaction, track id is null or empty.',
        'IPAY0100285' => 'Transaction denied due to invalid original transaction',
        'IPAY0100286' => 'Unknown IMPS Tran Action Code encountered',
        'IPAY0100287' => 'Terminal Action not enabled for Transaction request, Terminal',
        'IPAY0100288' => 'Terminal Payment Instrument not enabled for Transaction request, Terminal',
        'IPAY0100289' => 'Transaction denied due to Risk : Maximum credit amount ',
        'IPAY0100290' => 'Problem occured while validating original transaction',
        'IPAY0100291' => 'Transaction denied due to invalid PIN.',
        'IPAY0100292' => 'Transaction denied due to missing PIN.',
        'IPAY0100293' => 'Transaction denied due to duplicate Merchant trackid',
        'IPAY0100294' => 'Transaction denied due to missing Merchant trackid',
        'IPAY0200001' => 'Problem occured while getting terminal.',
        'IPAY0200002' => 'Problem occurred while getting institution details.',
        'IPAY0200003' => 'Problem occurred while getting merchant details.',
        'IPAY0200004' => 'Problem occured while getting password security rules.',
        'IPAY0200006' => 'Problem occurred while verifying tranportal password.',
        'IPAY0200007' => 'Problem occured while validating payment details',
        'IPAY0200008' => 'Problem occured while verifying payment details.',
        'IPAY0200009' => 'Problem occurred while getting payment details.',
        'IPAY0200011' => 'Problem occured while getting ipblock details.',
        'IPAY0200012' => 'Problem occured while updating payment log ip details.',
        'IPAY0200014' => 'Problem occured during merchant response.',
        'IPAY0200015' => 'Problem occured while getting terminal details.',
        'IPAY0200016' => 'Problem occured while getting payment instrument.',
        'IPAY0200017' => 'Problem occurred while getting payment instrument list.',
        'IPAY0200018' => 'Problem occurred while getting transaction details.',
        'IPAY0200019' => 'Problem occurred while getting risk profile details',
        'IPAY0200020' => 'Problem occurred while performing transaction risk check',
        'IPAY0200021' => 'Problem occurred while performing risk check.',
        'IPAY0200022' => 'Problem occured while getting currency.',
        'IPAY0200023' => 'Problem occured while determining payment instrument.',
        'IPAY0200024' => 'Problem occurred while getting brand rules details.',
        'IPAY0200025' => 'Problem occurred while getting terminal details.',
        'IPAY0200026' => 'Problem occured while getting transaction log details.',
        'IPAY0200027' => 'Missing encrypted card number.',
        'IPAY0200028' => 'Problem occurred while loading default institution configuration (Validate Original
        Transaction)',
        'IPAY0200029' => 'Problem occured while getting external connection details.',
        'IPAY0200030' => 'No external connection details for extr conn id :',
        'IPAY0200031' => 'Alternate external connection details not found for the alt extr conn id :',
        'IPAY0200032' => 'Problem occurred while getting external connection details for extr conn id :',
        'IPAY0200033' => 'Problem occured while getting vpas log details.',
        'IPAY0200034' => 'Problem occurred while getting details from VPASLOG table for payment id : null',
        'IPAY0200037' => 'Error Occured while getting Merchant ID',
        'IPAY0200038' => 'Problem occurred while getting vpas merchant details.',
        'IPAY0200039' => 'Problem occured while getting Faster Checkout details',
        'IPAY0200040' => 'Problem occurred while performing card risk check',
        'IPAY0200041' => 'Problem occured while getting institution configuration.',
        'IPAY0200042' => 'Problem occured while getting brand.',
        'IPAY0200043' => 'Problem occured while getting bin range details.',
        'IPAY0200044' => 'Problem occured while adding transaction log details.',
        'IPAY0200045' => 'Problem occurred while updating VPASLOG table',
        'IPAY0200046' => 'Unable to update VPASLOG table, payment id is null',
        'IPAY0200047' => 'Problem occurred while getting details from VPASLOG table for payment id',
        'IPAY0200048' => 'Problem occurred while getting details from VPASLOG table',
        'IPAY0200049' => 'Card number is null. Unable to update risk factors in negative card table &
        declined card table',
        'IPAY0200050' => 'Problem occurred while updating risk in negative card details',
        'IPAY0200051' => 'Problem occurred while updating risk in declined card table',
        'IPAY0200052' => 'Problem occurred while updating risk factor',
        'IPAY0200053' => 'Problem occured while updating payment log currency details.',
        'IPAY0200054' => 'Problem occured while inserting currency conversion currency details.',
        'IPAY0200055' => 'Problem occured while updating currency conversion currency details.',
        'IPAY0200056' => 'Problem occurred while getting brand details.',
        'IPAY0200057' => 'Problem occurred while getting external connection details.',
        'IPAY0200058' => 'Problem occured while updating message log 2fa details.',
        'IPAY0200059' => 'Problem occured while updating vpas details.',
        'IPAY0200060' => 'Problem occured while adding vpas details.',
        'IPAY0200061' => 'Problem occured during batch 2fa process.',
        'IPAY0200062' => 'Problem occured while getting brand rules details.',
        'IPAY0200063' => 'Problem occured while updating payment log process code details.',
        'IPAY0200064' => 'Problem occured while updating payment log process code and ip details.',
        'IPAY0200065' => 'Problem occured while updating payment log description details.',
        'IPAY0200066' => 'Problem occured while updating payment log instrument details.',
        'IPAY0200067' => 'Problem occured while updating payment log udf Fields.',
        'IPAY0200068' => 'Problem occured while validating IP address blocking',
        'IPAY0200069' => 'Problem occured while updating payment log card details.',
        'IPAY0200070' => 'Problem occured while updating ipblock details.',
        'IPAY0200071' => 'Probelm occured during authentication.',
        'IPAY0200072' => 'Payment log details not available.',
        'IPAY0200073' => 'Country Code not available for the Card.',
        'IPAY0200074' => 'Restricted Country Code for the Transaction.',
        'IPAY0200075' => 'Problem occured while getting Original transaction log details.',
        'IPAY0200079' => 'Chargeback transaction not allowed.',

        // Fss ErrorCodes List
        'GW00150'     => 'Missing required data.',
        'GW00151'     => 'Invalid Action type',
        'GW00152'     => 'Invalid Transaction Amount',
        'GW00153'     => 'Invalid Transaction ID',
        'GW00154'     => 'Invalid Terminal ID',
        'GW00181'     => 'Failed Credit Greater Than Debit check',
        'GW00205'     => 'Invalid Subsequent Transaction',
        'GW00157'     => 'Invalid Payment Instrument',
        'GW00165'     => 'Invalid Track ID data',
        'GW00166'     => 'Invalid Card Number data',
        'GW00167'     => 'Invalid Currency Code data',
        'GW00168'     => 'Institution ID mismatch',
        'GW00169'     => 'Merchant ID mismatch.',
        'GW00170'     => 'Terminal ID mismatch',
        'GW00171'     => 'Payment Instrument mismatch',
        'GW00160'     => 'Invalid Brand.',
        'GW00161'     => 'Invalid Card/Member Name data',
        'GW00162'     => 'Invalid User Defined data',
        'GW00163'     => 'Invalid Address data',
        'GW00164'     => 'Invalid Zip Code data',
        'GW00183'     => 'Card Verification Digit Required',
        'GW00258'     => 'Transaction denied: Negative BIN',
        'GW00259'     => 'Transaction denied: Declined Card',
        'GW00458'     => 'Invalid transaction data.',
        'GV00005'     => 'Certificate chain validation failed',
        'GV00006'     => 'Certificate chain validation error',
        'GV00011'     => 'Invalid expiration date',
        'PY20006'     => 'Invalid Brand',
        'PY20001'     => 'Invalid Action Type',
        'PY20002'     => 'Invalid amount',

        //Defined by us
        'RP00001' => 'Aggregator is down',
        'RP00002' => 'Bank ID is not enabled in Aggregator Terminal',
        'RP00003' => 'CAF status= 0 or 9',
        'RP00004' => 'NOT CAPTURED',
        'RP00005' => 'Error while connecting Payment Gateway',
        'RP00006' => 'FAILURE',
        'RP00007' => 'HOST TIMEOUT',
        'RP00008' => 'Invalid expiration date',
        'RP00009' => 'NOT CAPTURED',
        'RP00010' => 'Transaction time limit exceeds.',
        'RP00011' => 'card not supported',
        'RP00012' => 'exceeds withdrawal frequency',
        'RP00013' => 'incorrect PIN',
        'RP00014' => 'issuer down',
        'RP00015' => 'lost card',
        'RP00016' => 'no card record',
        'RP00017' => 'not sufficient fund',
        'RP00018' => 'over daily limit',
        'RP00019' => 'pin tries exceeded',
        'RP00020' => 'reserved for private use',
        'RP00021' => 'suspect fraud',
        'RP00022' => 'tran not permitted',
        'RP00023' => self::ISSUER_AUTHENTICATION_SERVER_FAILURE,
        'RP00024' => self::CHECKBIN_FAILURE,
        'RP00025' => self::AUTHORIZE_PARSE_ERROR,
        'RP00026' => self::SQL_EXCEPTION,
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