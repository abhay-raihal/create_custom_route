<?php

namespace RZP\Models\Merchant\Acs\AsvSdkIntegration\Utils\ProtoToEntityConverter;

use Rzp\Accounts\Merchant\V1 as MerchantV1;
use RZP\Models\Merchant\Detail\Entity as MerchantDetailEntity;
use RZP\Models\Merchant\Detail\Constants as MerchantDetailConstant;

class MerchantDetail
{
    protected MerchantV1\MerchantDetail $proto;

    function __construct(MerchantV1\MerchantDetail $proto)
    {
        $this->proto = $proto;
    }

    public function ToEntity(): MerchantDetailEntity
    {
        $merchantDetailRawAttributes = [
            MerchantDetailEntity::MERCHANT_ID => $this->proto->getMerchantId(),
            MerchantDetailEntity::CONTACT_NAME => $this->proto->getContactNameUnwrapped(),
            MerchantDetailEntity::CONTACT_EMAIL => $this->proto->getContactEmailUnwrapped(),
            MerchantDetailEntity::CONTACT_MOBILE => $this->proto->getContactMobileUnwrapped(),
            MerchantDetailEntity::CONTACT_LANDLINE => $this->proto->getContactLandlineUnwrapped(),
            MerchantDetailEntity::BUSINESS_TYPE => $this->proto->getBusinessTypeUnwrapped(),
            MerchantDetailEntity::BUSINESS_NAME => $this->proto->getBusinessNameUnwrapped(),
            MerchantDetailEntity::BUSINESS_DESCRIPTION => $this->proto->getBusinessDescriptionUnwrapped(),
            MerchantDetailEntity::BUSINESS_DBA => $this->proto->getBusinessDbaUnwrapped(),
            MerchantDetailEntity::BUSINESS_WEBSITE => $this->proto->getBusinessWebsiteUnwrapped(),
            MerchantDetailEntity::ADDITIONAL_WEBSITES => $this->proto->getAdditionalWebsitesUnwrapped(),
            MerchantDetailEntity::BUSINESS_INTERNATIONAL => $this->proto->getBusinessInternational(),
            MerchantDetailEntity::BUSINESS_PAYMENTDETAILS => $this->proto->getBusinessPaymentdetailsUnwrapped(),
            MerchantDetailEntity::BUSINESS_MODEL => $this->proto->getBusinessModelUnwrapped(),
            MerchantDetailEntity::BUSINESS_REGISTERED_ADDRESS => $this->proto->getBusinessRegisteredAddressUnwrapped(),
            MerchantDetailEntity::BUSINESS_REGISTERED_ADDRESS_L2 => $this->proto->getBusinessRegisteredAddressL2Unwrapped(),
            MerchantDetailEntity::BUSINESS_REGISTERED_COUNTRY => $this->proto->getBusinessRegisteredCountryUnwrapped(),
            MerchantDetailEntity::BUSINESS_REGISTERED_STATE => $this->proto->getBusinessRegisteredStateUnwrapped(),
            MerchantDetailEntity::BUSINESS_REGISTERED_CITY => $this->proto->getBusinessRegisteredCityUnwrapped(),
            MerchantDetailEntity::BUSINESS_REGISTERED_DISTRICT => $this->proto->getBusinessRegisteredDistrictUnwrapped(),
            MerchantDetailEntity::BUSINESS_REGISTERED_PIN => $this->proto->getBusinessRegisteredPinUnwrapped(),
            MerchantDetailEntity::BUSINESS_OPERATION_ADDRESS => $this->proto->getBusinessOperationAddressUnwrapped(),
            MerchantDetailEntity::BUSINESS_OPERATION_ADDRESS_L2 => $this->proto->getBusinessOperationAddressL2Unwrapped(),
            MerchantDetailEntity::BUSINESS_OPERATION_COUNTRY => $this->proto->getBusinessOperationCountryUnwrapped(),
            MerchantDetailEntity::BUSINESS_OPERATION_STATE => $this->proto->getBusinessOperationStateUnwrapped(),
            MerchantDetailEntity::BUSINESS_OPERATION_CITY => $this->proto->getBusinessOperationCityUnwrapped(),
            MerchantDetailEntity::BUSINESS_OPERATION_DISTRICT => $this->proto->getBusinessOperationDistrictUnwrapped(),
            MerchantDetailEntity::BUSINESS_OPERATION_PIN => $this->proto->getBusinessOperationPinUnwrapped(),
            MerchantDetailEntity::BUSINESS_DOE => $this->proto->getBusinessDoeUnwrapped(),
            MerchantDetailEntity::GSTIN => $this->proto->getGstinUnwrapped(),
            MerchantDetailEntity::P_GSTIN => $this->proto->getPGstinUnwrapped(),
            MerchantDetailEntity::COMPANY_CIN => $this->proto->getCompanyCinUnwrapped(),
            MerchantDetailEntity::COMPANY_PAN => $this->proto->getCompanyPanUnwrapped(),
            MerchantDetailEntity::COMPANY_PAN_NAME => $this->proto->getCompanyPanNameUnwrapped(),
            MerchantDetailEntity::BUSINESS_CATEGORY => $this->proto->getBusinessCategoryUnwrapped(),
            MerchantDetailEntity::BUSINESS_SUBCATEGORY => $this->proto->getBusinessSubcategoryUnwrapped(),
            MerchantDetailEntity::TRANSACTION_VOLUME => $this->proto->getTransactionVolumeUnwrapped(),
            MerchantDetailEntity::TRANSACTION_VALUE => $this->proto->getTransactionValueUnwrapped(),
            MerchantDetailEntity::PROMOTER_PAN => $this->proto->getPromoterPanUnwrapped(),
            MerchantDetailEntity::PROMOTER_PAN_NAME => $this->proto->getPromoterPanNameUnwrapped(),
            MerchantDetailEntity::DATE_OF_BIRTH => $this->proto->getDateOfBirthUnwrapped(),
            MerchantDetailEntity::BANK_NAME => $this->proto->getBankNameUnwrapped(),
            MerchantDetailEntity::BANK_ACCOUNT_NUMBER => $this->proto->getBankAccountNumberUnwrapped(),
            MerchantDetailEntity::BANK_ACCOUNT_NAME => $this->proto->getBankAccountNameUnwrapped(),
            MerchantDetailEntity::BANK_ACCOUNT_TYPE => $this->proto->getBankAccountTypeUnwrapped(),
            MerchantDetailEntity::BANK_BRANCH_CODE_TYPE => $this->proto->getBankBranchCodeTypeUnwrapped(),
            MerchantDetailEntity::BANK_BRANCH_CODE => $this->proto->getBankBranchCodeUnwrapped(),
            MerchantDetailEntity::INDUSTRY_CATEGORY_CODE_TYPE => $this->proto->getIndustryCategoryCodeTypeUnwrapped(),
            MerchantDetailEntity::INDUSTRY_CATEGORY_CODE => $this->proto->getIndustryCategoryCodeUnwrapped(),
            MerchantDetailEntity::BANK_BRANCH => $this->proto->getBankBranchUnwrapped(),
            MerchantDetailEntity::BANK_BRANCH_IFSC => $this->proto->getBankBranchIfscUnwrapped(),
            MerchantDetailEntity::BANK_BENEFICIARY_ADDRESS1 => $this->proto->getBankBeneficiaryAddress1Unwrapped(),
            MerchantDetailEntity::BANK_BENEFICIARY_ADDRESS2 => $this->proto->getBankBeneficiaryAddress2Unwrapped(),
            MerchantDetailEntity::BANK_BENEFICIARY_ADDRESS3 => $this->proto->getBankBeneficiaryAddress3Unwrapped(),
            MerchantDetailEntity::BANK_BENEFICIARY_CITY => $this->proto->getBankBeneficiaryCityUnwrapped(),
            MerchantDetailEntity::BANK_BENEFICIARY_STATE => $this->proto->getBankBeneficiaryStateUnwrapped(),
            MerchantDetailEntity::BANK_BENEFICIARY_PIN => $this->proto->getBankBeneficiaryPinUnwrapped(),
            MerchantDetailEntity::WEBSITE_ABOUT => $this->proto->getWebsiteAboutUnwrapped(),
            MerchantDetailEntity::WEBSITE_CONTACT => $this->proto->getWebsiteContactUnwrapped(),
            MerchantDetailEntity::WEBSITE_PRIVACY => $this->proto->getWebsitePrivacyUnwrapped(),
            MerchantDetailEntity::WEBSITE_TERMS => $this->proto->getWebsiteTermsUnwrapped(),
            MerchantDetailEntity::WEBSITE_REFUND => $this->proto->getWebsiteRefundUnwrapped(),
            MerchantDetailEntity::WEBSITE_PRICING => $this->proto->getWebsitePriCingUnwrapped(),
            MerchantDetailEntity::WEBSITE_LOGIN => $this->proto->getWebsiteLoginUnwrapped(),
            MerchantDetailEntity::BUSINESS_PROOF_URL => $this->proto->getBusinessProofUrlUnwrapped(),
            MerchantDetailEntity::BUSINESS_OPERATION_PROOF_URL => $this->proto->getBusinessOperationProofUrlUnwrapped(),
            MerchantDetailEntity::BUSINESS_PAN_URL => $this->proto->getBusinessPanUrlUnwrapped(),
            MerchantDetailEntity::ADDRESS_PROOF_URL => $this->proto->getAddressProofUrlUnwrapped(),
            MerchantDetailEntity::PROMOTER_PROOF_URL => $this->proto->getPromoterProofUrlUnwrapped(),
            MerchantDetailEntity::PROMOTER_PAN_URL => $this->proto->getPromoterPanUrlUnwrapped(),
            MerchantDetailEntity::PROMOTER_ADDRESS_URL => $this->proto->getPromoterAddressUrlUnwrapped(),
            MerchantDetailEntity::FORM_12A_URL => $this->proto->getForm12AUrlUnwrapped(),
            MerchantDetailEntity::FORM_80G_URL => $this->proto->getForm80GUrlUnwrapped(),
            MerchantDetailEntity::TRANSACTION_REPORT_EMAIL => $this->proto->getTransactionReportEmailUnwrapped(),
            MerchantDetailEntity::COMMENT => $this->proto->getCommentUnwrapped(),
            MerchantDetailEntity::ROLE => $this->proto->getRoleUnwrapped(),
            MerchantDetailEntity::DEPARTMENT => $this->proto->getDepartmentUnwrapped(),
            MerchantDetailEntity::STEPS_FINISHED => $this->proto->getStepsFinishedUnwrapped(),
            MerchantDetailEntity::ACTIVATION_PROGRESS => $this->proto->getActivationProgressUnwrapped(),
            MerchantDetailEntity::LOCKED => $this->proto->getLocked(),
            MerchantDetailEntity::ACTIVATION_STATUS => $this->proto->getActivationStatusUnwrapped(),
            MerchantDetailEntity::BANK_DETAILS_VERIFICATION_STATUS => $this->proto->getBankDetailsVerificationStatusUnwrapped(),
            MerchantDetailEntity::POI_VERIFICATION_STATUS => $this->proto->getPoiVerificationStatusUnwrapped(),
            MerchantDetailEntity::COMPANY_PAN_VERIFICATION_STATUS => $this->proto->getCompanyPanVerificationStatusUnwrapped(),
            MerchantDetailEntity::POA_VERIFICATION_STATUS => $this->proto->getPoaVerificationStatusUnwrapped(),
            MerchantDetailEntity::CIN_VERIFICATION_STATUS => $this->proto->getCinVerificationStatusUnwrapped(),
            MerchantDetailEntity::CLARIFICATION_MODE => $this->proto->getClarificationModeUnwrapped(),
            MerchantDetailEntity::ARCHIVED_AT => $this->proto->getArchivedAtUnwrapped(),
            MerchantDetailEntity::REVIEWER_ID => $this->proto->getReviewerIdUnwrapped(),
            MerchantDetailEntity::ISSUE_FIELDS => $this->proto->getIssueFieldsUnwrapped(),
            MerchantDetailEntity::ISSUE_FIELDS_REASON => $this->proto->getIssueFieldsReasonUnwrapped(),
            MerchantDetailEntity::INTERNAL_NOTES => $this->proto->getInternalNotesUnwrapped(),
            MerchantDetailEntity::CUSTOM_FIELDS => $this->proto->getCustomFieldsUnwrapped(),
            MerchantDetailEntity::CLIENT_APPLICATIONS => $this->proto->getClientApplicationsUnwrapped(),
            MerchantDetailEntity::MARKETPLACE_ACTIVATION_STATUS => $this->proto->getMarketplaceActivationStatusUnwrapped(),
            MerchantDetailEntity::VIRTUAL_ACCOUNTS_ACTIVATION_STATUS => $this->proto->getVirtualAccountsActivationStatusUnwrapped(),
            MerchantDetailEntity::SUBSCRIPTIONS_ACTIVATION_STATUS => $this->proto->getSubscriptionsActivationStatusUnwrapped(),
            MerchantDetailEntity::SUBMITTED => $this->proto->getSubmitted(),
            MerchantDetailEntity::SUBMITTED_AT => $this->proto->getSubmittedAtUnwrapped(),
            MerchantDetailEntity::CREATED_AT => $this->proto->getCreatedAt(),
            MerchantDetailEntity::UPDATED_AT => $this->proto->getUpdatedAt(),
            MerchantDetailEntity::AUDIT_ID => $this->proto->getAuditIdUnwrapped(),
            MerchantDetailEntity::FUND_ACCOUNT_VALIDATION_ID => $this->proto->getFundAccountValidationIdUnwrapped(),
            MerchantDetailEntity::GSTIN_VERIFICATION_STATUS => $this->proto->getGstinVerificationStatusUnwrapped(),
            MerchantDetailEntity::PERSONAL_PAN_DOC_VERIFICATION_STATUS => $this->proto->getPersonalPanDocVerificationStatusUnwrapped(),
            MerchantDetailEntity::COMPANY_PAN_DOC_VERIFICATION_STATUS => $this->proto->getCompanyPanDocVerificationStatusUnwrapped(),
            MerchantDetailEntity::BANK_DETAILS_DOC_VERIFICATION_STATUS => $this->proto->getBankDetailsDocVerificationStatusUnwrapped(),
            MerchantDetailEntity::MSME_DOC_VERIFICATION_STATUS => $this->proto->getMsmeDocVerificationStatusUnwrapped(),
            MerchantDetailEntity::ACTIVATION_FLOW => $this->proto->getActivationFlowUnwrapped(),
            MerchantDetailEntity::INTERNATIONAL_ACTIVATION_FLOW => $this->proto->getInternationalActivationFlowUnwrapped(),
            MerchantDetailEntity::LIVE_TRANSACTION_DONE => $this->proto->getLiveTransactionDoneUnwrapped(),
            MerchantDetailEntity::KYC_CLARIFICATION_REASONS => $this->proto->getKycClarificationReasonsUnwrapped(),
            MerchantDetailEntity::KYC_ADDITIONAL_DETAILS => $this->proto->getKycAdditionalDetailsUnwrapped(),
            MerchantDetailEntity::KYC_ID => $this->proto->getKycIdUnwrapped(),
            MerchantDetailEntity::ESTD_YEAR => $this->proto->getEstdYearUnwrapped(),
            MerchantDetailEntity::DATE_OF_ESTABLISHMENT => $this->proto->getDateOfEstablishmentUnwrapped(),
            MerchantDetailEntity::AUTHORIZED_SIGNATORY_RESIDENTIAL_ADDRESS => $this->proto->getAuthorizedSignatoryResidentialAddressUnwrapped(),
            MerchantDetailEntity::AUTHORIZED_SIGNATORY_DOB => $this->proto->getAuthorizedSignatoryDobUnwrapped(),
            MerchantDetailEntity::PLATFORM => $this->proto->getPlatformUnwrapped(),
            MerchantDetailEntity::PENNY_TESTING_UPDATED_AT => $this->proto->getPennyTestingUpdatedAtUnwrapped(),
            MerchantDetailEntity::SHOP_ESTABLISHMENT_NUMBER => $this->proto->getShopEstablishmentNumberUnwrapped(),
            MerchantDetailEntity::SHOP_ESTABLISHMENT_VERIFICATION_STATUS => $this->proto->getShopEstablishmentVerificationStatusUnwrapped(),
            MerchantDetailEntity::BUSINESS_SUGGESTED_PIN => $this->proto->getBusinessSuggestedPinUnwrapped(),
            MerchantDetailEntity::BUSINESS_SUGGESTED_ADDRESS => $this->proto->getBusinessSuggestedAddressUnwrapped(),
            MerchantDetailEntity::FRAUD_TYPE => $this->proto->getFraudTypeUnwrapped(),
            MerchantDetailEntity::IEC_CODE => $this->proto->getIecCodeUnwrapped(),
            MerchantDetailEntity::BAS_BUSINESS_ID => $this->proto->getBasBusinessIdUnwrapped(),
            MerchantDetailEntity::ACTIVATION_FORM_MILESTONE => $this->proto->getActivationFormMilestoneUnwrapped(),
            MerchantDetailConstant::ONBOARDING_MILESTONE => $this->proto->getOnboardingMilestoneUnwrapped(),
            MerchantDetailEntity::FUND_ADDITION_VA_IDS => $this->proto->getFundAdditionVaIdsUnwrapped(),
        ];

        $merchantDetailEntity = new MerchantDetailEntity();
        $merchantDetailEntity->setRawAttributes($merchantDetailRawAttributes);
        return $merchantDetailEntity;
    }
}