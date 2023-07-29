<?php

return [
    'upiAxis' => [
        'RRN'                  => '822012050352',
        'TXNID'                => 'AXIS00090439839',
        'ORDER_ID'             => 'AiuZGLBpFIMuT3',
        'AMOUNT'               => '500.00',
        'MOBILE_NO'            => '',
        'BANKNAME'             => '',
        'MASKEDACCOUNTNUMBER'  => '',
        'IFSC'                 => '',
        'VPA'                  => 'vishnu@icici',
        'ACCOUNT_CUST_NAME'    => 'SANDIP SURESH NIKAM',
        'RESPCODE'             => '00',
        'RESPONSE'             => 'Success',
        'TRANSACTION_DATE'     => '08-AUG-18 12:29',
        'CREDITVPA'            => 'razaorpay@axis',
        'REMARKS'              => 'A',
    ],

    'upiAxisNew' => [
        'RRN'                  => '822012050352',
        'TXNID'                => 'AXIS00090439839',
        'ORDERID'              => 'AiuZGLBpFIMuT3',
        'AMOUNT'               => '500.00',
        'MOBILE_NO'            => '',
        'BANKNAME'             => '',
        'MASKEDACCOUNTNUMBER'  => '',
        'IFSC'                 => '',
        'VPA'                  => 'vishnu@icici',
        'ACCOUNT_CUST_NAME'    => 'SANDIP SURESH NIKAM',
        'RESPCODE'             => '00',
        'RESPONSE'             => 'Success',
        'TXN_DATE'             => '08-AUG-18 12:29',
        'CREDITVPA'            => 'razaorpay@axis',
        'REMARKS'              => 'A',
    ],

    // we get few extra columns here as compared to upiAxisNew
    'upi_axis_payment_format_v2' => [
        'RRN'                  => '822012050352',
        'TXNID'                => 'AXIS00090439839',
        'ORDERID'              => 'AiuZGLBpFIMuT3',
        'AMOUNT'               => '500.00',
        'MOBILE_NO'            => '',
        'BANKNAME'             => '',
        'MASKEDACCOUNTNUMBER'  => '',
        'IFSC'                 => '',
        'VPA'                  => 'vishnu@icici',
        'ACCOUNT_CUST_NAME'    => 'SANDIP SURESH NIKAM',
        'RESPCODE'             => '00',
        'RESPONSE'             => 'Success',
        'TXN_DATE'             => '08-AUG-18 12:29',
        'CREDITVPA'            => 'razaorpay@axis',
        'REMARKS'              => 'A',
        'SURCHARGE'            => '',
        'TAX'                  => '',
        'DEBIT_AMOUNT'         => '500.00',
        'MDR_TAX'              => '',
        'MERCHANT_ID'          => 'AIRTELPROD0010999999',
        'UNQ_CUST_ID'          => '',
    ],

    'upiAxisRefund' => [
        'RRN'                  => '822012050352',
        'TXN_ID'               => 'AXIS00090439839',
        'ORDER_ID'             => 'AiuZGLBpFIMuT3',
        'AMOUNT'               => '500.00',
        'MOBILE_NO'            => '',
        'VPA'                  => 'vishnu@icici',
        'ACNT_CUSTNAME'        => 'SANDIP SURESH NIKAM',
        'RESPCODE'             => '00',
        'RESPONSE'             => 'Success',
        'TRANSACTION_DATE'     => '08-AUG-18',
        'REFUND_AMOUNT'        => '500',
        'TXN_REF_DATE'         => '08-AUG-18',
    ],
];