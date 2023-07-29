<?php

use Carbon\Carbon;

return [
    'testAutoPaymentWithoutCustomer' => [
        'request' => [
            'content' => [],
            'method'    => 'POST',
            'url'       => '/reminders/send/test/payment/card_auto_recurring/%s',
        ],
        'response' => [
            'content' => [],
        ],
    ],
    'testAutoPaymentCardWithDCC' => [
        'request' => [
            'content' => [],
            'method'    => 'POST',
            'url'       => '/reminders/send/test/payment/card_auto_recurring/%s',
        ],
        'response' => [
            'content' => [],
        ],
    ],
    'testAutoPaymentCardWithDCCAfterCardChange' => [
        'request' => [
            'content' => [],
            'method'    => 'POST',
            'url'       => '/reminders/send/test/payment/card_auto_recurring/%s',
        ],
        'response' => [
            'content' => [],
        ],
    ],
    'testAutoPaymentCard' => [
        'request' => [
            'content' => [],
            'method'    => 'POST',
            'url'       => '/reminders/send/test/payment/card_auto_recurring/%s',
        ],
        'response' => [
            'content' => [],
        ],
    ],
    'sample_subscription_data' => [
        'id' => 'FW8kR7QWp6AyB0',
        'merchant_id' => '10000000000000',
        'plan_id' => 'FUVFqbwxI0Gq3i',
        'schedule_id' => 'FW8kR9CRbE0EhD',
        'customer_id' => NULL,
        'global_customer' => true,
        'customer_email' => NULL,
        'token_id' => NULL,
        'current_payment_id' => NULL,
        'current_invoice_id' => 'FW8kRScTig1uq0',
        'current_invoice_amount' => 99900,
        'version_id' => 'FW8kRCMkGsYgAq',
        'has_scheduled_changes' => false,
        'change_scheduled_at' => NULL,
        'status' => 'created',
        'error_status' => NULL,
        'quantity' => 1,
        'total_count' => 6,
        'paid_count' => 0,
        'issued_invoices_count' => 1,
        'auth_attempts' => 0,
        'customer_notify' => true,
        'type' => 3,
        'cancel_at' => NULL,
        'current_start' => NULL,
        'current_end' => NULL,
        'start_at' => NULL,
        'end_at' => Carbon::now()->addYear()->timestamp,
        'charge_at' => NULL,
        'activated_at' => NULL,
        'cancelled_at' => NULL,
        'authenticated_at' => NULL,
        'ended_at' => NULL,
        'failed_at' => NULL,
        'created_at' => 1598608392,
        'updated_at' => 1598608412,
        'expire_by' => NULL,
        'short_url' => 'http://dwarf.razorpay.in/mvibrzw',
        'source' => 'api',
        'customer_name' => NULL,
        'customer_contact' => NULL,
        'payment_method' => NULL,
        'addons' => [
            0 => [
                'id' => 'ao_FW8kRL0LaiO1bd',
                'entity' => 'addon',
                'quantity' => 1,
                'created_at' => 1598608392,
                'subscription_id' => 'sub_FW8kR7QWp6AyB0',
                'invoice_id' => 'inv_FW8kRScTig1uq0',
            ]
        ],
        'cancel_at_cycle_end' => false,
        'plan' =>
            [
                'id' => 'FUVFqbwxI0Gq3i',
                'merchant_id' => '10000000000000',
                'item_id' => 'FUVFniY9LUdUrj',
                'period' => 'weekly',
                'interval' => 1,
                'created_at' => 1598250971,
                'updated_at' => 1598250971,
                'item' =>[
                    'id' => 'FUVFniY9LUdUrj',
                    'active' => true,
                    'merchant_id' => '10000000000000',
                    'name' => 'Test plan - Weekly',
                    'description' => 'Description for the test plan - Weekly',
                    'amount' => 69900,
                    'currency' => 'INR',
                    'type' => 'plan',
                    'unit' => NULL,
                    'tax_inclusive' => false,
                    'hsn_code' => NULL,
                    'sac_code' => NULL,
                    'tax_rate' => NULL,
                    'tax_id' => NULL,
                    'tax_group_id' => NULL,
                    'created_at' => 1598250968,
                    'updated_at' => 1598250968,
                    'deleted_at' => NULL,
                    'unit_amount' => 69900
                ],
            ],
        'schedule' => [
            'id' => 'FW8kR9CRbE0EhD',
            'name' => '1/weekly',
            'merchant_id' => '100000Razorpay',
            'type' => 'subscription',
            'period' => 'weekly',
            'interval' => 1,
            'anchor' => 1,
            'hour' => 0,
            'delay' => 0,
            'created_at' => 1598608392,
            'updated_at' => 1598608392,
            'deleted_at' => NULL
        ],
        'recurring_type' => 'initial',
    ],
    'sample_subscription_data_MY_merchant' => [
        'id' => 'FW8kR7QWp6AyB0',
        'merchant_id' => '10000000000000',
        'plan_id' => 'FUVFqbwxI0Gq3i',
        'schedule_id' => 'FW8kR9CRbE0EhD',
        'customer_id' => NULL,
        'global_customer' => true,
        'customer_email' => NULL,
        'token_id' => NULL,
        'current_payment_id' => NULL,
        'current_invoice_id' => 'FW8kRScTig1uq0',
        'current_invoice_amount' => 99900,
        'version_id' => 'FW8kRCMkGsYgAq',
        'has_scheduled_changes' => false,
        'change_scheduled_at' => NULL,
        'status' => 'created',
        'error_status' => NULL,
        'quantity' => 1,
        'total_count' => 6,
        'paid_count' => 0,
        'issued_invoices_count' => 1,
        'auth_attempts' => 0,
        'customer_notify' => true,
        'type' => 3,
        'cancel_at' => NULL,
        'current_start' => NULL,
        'current_end' => NULL,
        'start_at' => NULL,
        'end_at' => Carbon::now()->addYear()->timestamp,
        'charge_at' => NULL,
        'activated_at' => NULL,
        'cancelled_at' => NULL,
        'authenticated_at' => NULL,
        'ended_at' => NULL,
        'failed_at' => NULL,
        'created_at' => 1598608392,
        'updated_at' => 1598608412,
        'expire_by' => NULL,
        'short_url' => 'http://dwarf.razorpay.in/mvibrzw',
        'source' => 'api',
        'customer_name' => NULL,
        'customer_contact' => NULL,
        'payment_method' => NULL,
        'addons' => [
            0 => [
                'id' => 'ao_FW8kRL0LaiO1bd',
                'entity' => 'addon',
                'quantity' => 1,
                'created_at' => 1598608392,
                'subscription_id' => 'sub_FW8kR7QWp6AyB0',
                'invoice_id' => 'inv_FW8kRScTig1uq0',
            ]
        ],
        'cancel_at_cycle_end' => false,
        'plan' =>
            [
                'id' => 'FUVFqbwxI0Gq3i',
                'merchant_id' => '10000000000000',
                'item_id' => 'FUVFniY9LUdUrj',
                'period' => 'weekly',
                'interval' => 1,
                'created_at' => 1598250971,
                'updated_at' => 1598250971,
                'item' =>[
                    'id' => 'FUVFniY9LUdUrj',
                    'active' => true,
                    'merchant_id' => '10000000000000',
                    'name' => 'Test plan - Weekly',
                    'description' => 'Description for the test plan - Weekly',
                    'amount' => 69900,
                    'currency' => 'MYR',
                    'type' => 'plan',
                    'unit' => NULL,
                    'tax_inclusive' => false,
                    'hsn_code' => NULL,
                    'sac_code' => NULL,
                    'tax_rate' => NULL,
                    'tax_id' => NULL,
                    'tax_group_id' => NULL,
                    'created_at' => 1598250968,
                    'updated_at' => 1598250968,
                    'deleted_at' => NULL,
                    'unit_amount' => 69900
                ],
            ],
        'schedule' => [
            'id' => 'FW8kR9CRbE0EhD',
            'name' => '1/weekly',
            'merchant_id' => '100000Razorpay',
            'type' => 'subscription',
            'period' => 'weekly',
            'interval' => 1,
            'anchor' => 1,
            'hour' => 0,
            'delay' => 0,
            'created_at' => 1598608392,
            'updated_at' => 1598608392,
            'deleted_at' => NULL
        ],
        'recurring_type' => 'initial',
    ],
];
