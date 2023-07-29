<?php

namespace RZP\Modules\Acs\Comparator;

class MerchantDetailComparator extends Base
{
    protected $excludedKeys = [
        "created_at" => true,
        "updated_at" => true,
        "business_international" => true,
        "business_paymentdetails" => true,
        "promoter_pan" => true,
        "promoter_pan_name" => true,
        "transaction_report_email" => true,
        "steps_finished" => true,
        "activation_progress" => true,
        "locked" => true,
        "activation_status" => true,
        "poi_verification_status" => true,
        "poa_verification_status" => true,
        "bank_details_verification_status" => true,
        "activation_flow" => true,
        "international_activation_flow" => true,
        "custom_fields->tos_acceptance" => true,
        "submitted" => true,
        "submitted_at" => true,
        "company_pan_verification_status" => true,
        "company_pan_doc_verification_status" => true,
        "activation_form_milestone" => true,
        "business_doe" => true,
        "p_gstin" => true,
        "transaction_value" => true,
        "date_of_birth" => true,
        "bank_name" => true,
        "bank_branch" => true,
        "bank_beneficiary_address1" => true,
        "bank_beneficiary_address2" => true,
        "bank_beneficiary_address3" => true,
        "bank_beneficiary_city" => true,
        "bank_beneficiary_state" => true,
        "bank_beneficiary_pin" => true,
        "website_about" => true,
        "website_contact" => true,
        "website_privacy" => true,
        "website_terms" => true,
        "website_refund" => true,
        "website_pricing" => true,
        "website_login" => true,
        "business_proof_url" => true,
        "business_operation_proof_url" => true,
        "business_pan_url" => true,
        "address_proof_url" => true,
        "promoter_proof_url" => true,
        "promoter_pan_url" => true,
        "promoter_address_url" => true,
        "form_12a_url" => true,
        "form_80g_url" => true,
        "role" => true,
        "comment" => true,
        "clarification_mode" => true,
        "kyc_id" => true,
        "issue_fields" => true,
        "issue_fields_reason" => true,
        "custom_fields" => true,
        "marketplace_activation_status" => true,
        "virtual_accounts_activation_status" => true,
        "subscriptions_activation_status" => true,
        "estd_year" => true,
        "fund_account_validation_id" => true,
        "penny_testing_updated_at" => true,
        "gstin_verification_status" => true,
        "cin_verification_status" => true,
        "personal_pan_doc_verification_status" => true,
        "bank_details_doc_verification_status" => true,
        "shop_establishment_verification_status" => true,
        "onboarding_milestone" => true,
        "business_suggested_pin" => true,
        "business_suggested_address" => true,
        "fraud_type" => true,
        "bas_business_id" => true,
        "msme_doc_verification_status" => true,
        "fund_addition_va_ids" => true,
        "bank_branch_code_type" => true,
        "bank_branch_code" => true,
        "industry_category_code" => true,
        "industry_category_code_type" => true,
        "pg_use_case" => true,
        "widget_trial_start_date" => true,
        'merchant' => true //Added temporarily as seen in some cases while testing.
    ];

    function __construct()
    {
        parent::__construct();
    }
}