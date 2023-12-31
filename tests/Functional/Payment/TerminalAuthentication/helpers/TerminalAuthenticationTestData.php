<?php

return [
    'testAuthenticationGateway3ds' => [
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hitachi',
            'type'          => 'filter',
            'filter_type'   => 'select',
            'min_amount'    => 0,
            'group'         => 'authentication',
            'auth_type'     => '3ds',
            'network'       => null,
            'step'          => 'authentication',
            'authentication_gateway' => 'mpi_blade',
        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hitachi',
            'type'          => 'filter',
            'filter_type'   => 'select',
            'min_amount'    => 0,
            'group'         => 'authentication',
            'auth_type'     => 'headless_otp',
            'network'       => null,
            'step'          => 'authentication',
            'authentication_gateway' => 'mpi_blade',
        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hitachi',
            'type'          => 'sorter',
            'filter_type'   => 'select',
            'load'          => 100,
            'group'         => 'authentication',
            'auth_type'     => '3ds',
            'network'       => null,
            'authentication_gateway' => 'mpi_blade',
            'step'          => 'authentication',
        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hitachi',
            'type'          => 'sorter',
            'filter_type'   => 'select',
            'load'          => 50,
            'group'         => 'authentication',
            'auth_type'     => 'headless_otp',
            'network'       => null,
            'authentication_gateway' => 'mpi_blade',
            'step'          => 'authentication',
        ],
    ],
    'testAuthenticationGatewayHeadlessOtp' => [
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hitachi',
            'type'          => 'filter',
            'filter_type'   => 'select',
            'min_amount'    => 0,
            'group'         => 'authentication',
            'auth_type'     => '3ds',
            'network'       => null,
            'step'          => 'authentication',
            'authentication_gateway' => 'mpi_blade',
        ],

        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hitachi',
            'type'          => 'filter',
            'filter_type'   => 'select',
            'min_amount'    => 0,
            'group'         => 'authentication',
            'auth_type'     => 'headless_otp',
            'network'       => null,
            'step'          => 'authentication',
            'authentication_gateway' => 'mpi_blade',
        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hitachi',
            'type'          => 'sorter',
            'filter_type'   => 'select',
            'load'          => 50,
            'group'         => 'authentication',
            'auth_type'     => '3ds',
            'network'       => null,
            'authentication_gateway' => 'mpi_blade',
            'step'          => 'authentication',
        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hitachi',
            'type'          => 'sorter',
            'filter_type'   => 'select',
            'load'          => 200,
            'group'         => 'authentication',
            'auth_type'     => 'headless_otp',
            'network'       => null,
            'authentication_gateway' => 'mpi_blade',
            'step'          => 'authentication',
        ],
    ],
    'testAuthenticationGatewayMigsHeadlessOtp' => [
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'migs',
            'type'          => 'filter',
            'filter_type'   => 'select',
            'min_amount'    => 0,
            'group'         => 'authentication',
            'auth_type'     => '3ds',
            'network'       => null,
            'step'          => 'authentication',
            'authentication_gateway' => 'mpi_blade',
        ],

        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'migs',
            'type'          => 'filter',
            'filter_type'   => 'select',
            'min_amount'    => 0,
            'group'         => 'authentication',
            'auth_type'     => 'headless_otp',
            'network'       => null,
            'step'          => 'authentication',
            'authentication_gateway' => 'mpi_blade',
        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'migs',
            'type'          => 'sorter',
            'filter_type'   => 'select',
            'load'          => 50,
            'group'         => 'authentication',
            'auth_type'     => '3ds',
            'network'       => null,
            'authentication_gateway' => 'mpi_blade',
            'step'          => 'authentication',
        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'migs',
            'type'          => 'sorter',
            'filter_type'   => 'select',
            'load'          => 200,
            'group'         => 'authentication',
            'auth_type'     => 'headless_otp',
            'network'       => null,
            'authentication_gateway' => 'mpi_blade',
            'step'          => 'authentication',
        ],
    ],
    'testAuthenticationGatewayIvr' => [
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hitachi',
            'type'          => 'filter',
            'filter_type'   => 'select',
            'min_amount'    => 0,
            'group'         => 'authentication',
            'auth_type'     => '3ds',
            'network'       => null,
            'step'          => 'authentication',
            'authentication_gateway' => 'mpi_blade',
        ],

        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hitachi',
            'type'          => 'filter',
            'filter_type'   => 'select',
            'min_amount'    => 0,
            'group'         => 'authentication',
            'auth_type'     => 'headless_otp',
            'network'       => null,
            'step'          => 'authentication',
            'authentication_gateway' => 'mpi_blade',
        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hitachi',
            'type'          => 'filter',
            'filter_type'   => 'select',
            'min_amount'    => 0,
            'group'         => 'authentication',
            'auth_type'     => 'ivr',
            'network'       => null,
            'step'          => 'authentication',
            'authentication_gateway' => 'mpi_blade',
        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hitachi',
            'type'          => 'sorter',
            'filter_type'   => 'select',
            'load'          => 50,
            'group'         => 'authentication',
            'auth_type'     => '3ds',
            'network'       => null,
            'authentication_gateway' => 'mpi_blade',
            'step'          => 'authentication',
        ],

        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hitachi',
            'type'          => 'sorter',
            'filter_type'   => 'select',
            'load'          => 200,
            'group'         => 'authentication',
            'auth_type'     => 'headless_otp',
            'network'       => null,
            'authentication_gateway' => 'mpi_blade',
            'step'          => 'authentication',
        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hitachi',
            'type'          => 'sorter',
            'filter_type'   => 'select',
            'load'          => 400,
            'group'         => 'authentication',
            'auth_type'     => 'ivr',
            'network'       => null,
            'authentication_gateway' => 'mpi_blade',
            'step'          => 'authentication',
        ],
    ],
    'testAuthenticationGatewayExpressPay' => [
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hitachi',
            'type'          => 'filter',
            'filter_type'   => 'select',
            'min_amount'    => 0,
            'group'         => 'authentication',
            'auth_type'     => '3ds',
            'network'       => null,
            'step'          => 'authentication',
            'authentication_gateway' => 'mpi_blade',
        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hitachi',
            'type'          => 'filter',
            'filter_type'   => 'select',
            'min_amount'    => 0,
            'group'         => 'authentication',
            'auth_type'     => 'headless_otp',
            'network'       => null,
            'step'          => 'authentication',
            'authentication_gateway' => 'mpi_blade',

        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hitachi',
            'type'          => 'filter',
            'filter_type'   => 'select',
            'min_amount'    => 0,
            'group'         => 'authentication',
            'auth_type'     => 'ivr',
            'network'       => 'MC',
            'step'          => 'authentication',
            'authentication_gateway' => 'mpi_blade',

        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hitachi',
            'type'          => 'filter',
            'filter_type'   => 'select',
            'min_amount'    => 0,
            'group'         => 'authentication',
            'auth_type'     => 'otp',
            'network'       => null,
            'issuer'        => 'UTIB',
            'step'          => 'authentication',
            'authentication_gateway' => 'mpi_enstage',

        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hitachi',
            'type'          => 'sorter',
            'filter_type'   => 'select',
            'load'          => 50,
            'group'         => 'authentication',
            'auth_type'     => '3ds',
            'network'       => null,
            'authentication_gateway' => 'mpi_blade',
            'step'          => 'authentication',
        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hitachi',
            'type'          => 'sorter',
            'filter_type'   => 'select',
            'load'          => 200,
            'group'         => 'authentication',
            'auth_type'     => 'headless_otp',
            'network'       => 'MC',
            'authentication_gateway' => 'mpi_blade',
            'step'          => 'authentication',
        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hitachi',
            'type'          => 'sorter',
            'filter_type'   => 'select',
            'load'          => 500,
            'group'         => 'authentication',
            'auth_type'     => 'otp',
            'network'       => null,
            'issuer'        => 'UTIB',
            'authentication_gateway' => 'mpi_blade',
            'step'          => 'authentication',
        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hitachi',
            'type'          => 'sorter',
            'filter_type'   => 'select',
            'load'          => 400,
            'group'         => 'authentication',
            'auth_type'     => 'ivr',
            'network'       => null,
            'authentication_gateway' => 'mpi_enstage',
            'step'          => 'authentication',
        ],
    ],

    'testAuthenticationGatewayPin' => [
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'card_fss',
            'type'          => 'filter',
            'filter_type'   => 'select',
            'min_amount'    => 0,
            'group'         => 'authentication',
            'auth_type'     => '3ds',
            'network'       => null,
            'step'          => 'authentication',
        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'card_fss',
            'type'          => 'filter',
            'filter_type'   => 'select',
            'min_amount'    => 0,
            'group'         => 'authentication',
            'auth_type'     => 'pin',
            'network'       => null,
            'step'          => 'authentication',

        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'card_fss',
            'type'          => 'sorter',
            'filter_type'   => 'select',
            'min_amount'    => 0,
            'group'         => 'authentication',
            'auth_type'     => '3ds',
            'network'       => null,
            'step'          => 'authentication',
            'load'          => 100,
        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'card_fss',
            'type'          => 'sorter',
            'filter_type'   => 'select',
            'min_amount'    => 0,
            'group'         => 'authentication',
            'auth_type'     => 'pin',
            'network'       => null,
            'step'          => 'authentication',
            'load'          => 200

        ],
    ],

    'testAuthenticationGateway3dsAndHeadless' => [
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hitachi',
            'type'          => 'filter',
            'filter_type'   => 'select',
            'min_amount'    => 0,
            'group'         => 'authentication',
            'auth_type'     => '3ds',
            'network'       => null,
            'step'          => 'authentication',
            'authentication_gateway' => 'mpi_blade',
        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hitachi',
            'type'          => 'filter',
            'filter_type'   => 'select',
            'min_amount'    => 0,
            'group'         => 'authentication',
            'auth_type'     => 'headless_otp',
            'step'          => 'authentication',
            'authentication_gateway' => 'mpi_blade',
        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hitachi',
            'type'          => 'sorter',
            'filter_type'   => 'select',
            'load'          => 1000,
            'group'         => 'authentication',
            'auth_type'     => '3ds',
            'network'       => null,
            'authentication_gateway' => 'mpi_blade',
            'step'          => 'authentication',
        ],
    ],

    'testAuthenticationGatewayCyberSource' => [
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'cybersource',
            'type'          => 'filter',
            'filter_type'   => 'select',
            'min_amount'    => 0,
            'group'         => 'authentication',
            'auth_type'     => '3ds',
            'network'       => null,
            'step'          => 'authentication',
        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'cybersource',
            'type'          => 'filter',
            'filter_type'   => 'select',
            'min_amount'    => 0,
            'group'         => 'authentication',
            'auth_type'     => '3ds',
            'network'       => null,
            'step'          => 'authentication',
            'authentication_gateway' => 'mpi_blade',
        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'cybersource',
            'type'          => 'sorter',
            'filter_type'   => 'select',
            'load'          => 10000,
            'group'         => 'authentication',
            'auth_type'     => '3ds',
            'network'       => null,
            'authentication_gateway' => 'mpi_blade',
            'step'          => 'authentication',
        ],
    ],

    'testAuthenticationGatewayFirstdata' => [
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'first_data',
            'type'          => 'filter',
            'filter_type'   => 'select',
            'group'         => 'authentication',
            'auth_type'     => '3ds',
            'step'          => 'authentication',
            'authentication_gateway' => 'mpi_blade',
        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'first_data',
            'type'          => 'sorter',
            'load'          => 10000,
            'auth_type'     => '3ds',
            'step'          => 'authentication',
            'authentication_gateway' => 'mpi_blade',
        ],
    ],

    'testAuthenticationGatewayHdfcAuthCapabilityFilter' => [
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hdfc',
            'type'          => 'sorter',
            'filter_type'   => 'select',
            'load'          => 1,
            'group'         => 'authentication',
            'auth_type'     => '3ds',
            'network'       => null,
            'authentication_gateway' => 'mpi_blade',
            'step'          => 'authentication',
        ],
        [
            'method'        => 'card',
            'merchant_id'   => '100000Razorpay',
            'gateway'       => 'hdfc',
            'type'          => 'sorter',
            'filter_type'   => 'select',
            'load'          => 9,
            'group'         => 'authentication',
            'auth_type'     => '3ds',
            'network'       => null,
            'step'          => 'authentication',
            'capability'    => 2
        ],

    ],
];

