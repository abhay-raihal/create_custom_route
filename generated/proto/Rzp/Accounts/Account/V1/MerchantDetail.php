<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/accounts/account/v1/account_api.proto

namespace Rzp\Accounts\Account\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rzp.accounts.account.v1.MerchantDetail</code>
 */
class MerchantDetail extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string merchant_id = 1;</code>
     */
    protected $merchant_id = '';
    /**
     * Generated from protobuf field <code>string contact_name = 2;</code>
     */
    protected $contact_name = '';
    /**
     * Generated from protobuf field <code>string contact_email = 3;</code>
     */
    protected $contact_email = '';
    /**
     * Generated from protobuf field <code>string contact_mobile = 4;</code>
     */
    protected $contact_mobile = '';
    /**
     * Generated from protobuf field <code>string contact_landline = 5;</code>
     */
    protected $contact_landline = '';
    /**
     * Generated from protobuf field <code>string business_type = 6;</code>
     */
    protected $business_type = '';
    /**
     * Generated from protobuf field <code>string business_name = 7;</code>
     */
    protected $business_name = '';
    /**
     * Generated from protobuf field <code>string business_description = 8;</code>
     */
    protected $business_description = '';
    /**
     * Generated from protobuf field <code>string business_dba = 9;</code>
     */
    protected $business_dba = '';
    /**
     * Generated from protobuf field <code>string business_website = 10;</code>
     */
    protected $business_website = '';
    /**
     * Generated from protobuf field <code>repeated string additional_websites = 11;</code>
     */
    private $additional_websites;
    /**
     * Generated from protobuf field <code>string business_registered_address = 12;</code>
     */
    protected $business_registered_address = '';
    /**
     * Generated from protobuf field <code>string business_registered_address_l2 = 13;</code>
     */
    protected $business_registered_address_l2 = '';
    /**
     * Generated from protobuf field <code>string business_registered_state = 14;</code>
     */
    protected $business_registered_state = '';
    /**
     * Generated from protobuf field <code>string business_registered_city = 15;</code>
     */
    protected $business_registered_city = '';
    /**
     * Generated from protobuf field <code>string business_registered_district = 16;</code>
     */
    protected $business_registered_district = '';
    /**
     * Generated from protobuf field <code>string business_registered_pin = 17;</code>
     */
    protected $business_registered_pin = '';
    /**
     * Generated from protobuf field <code>string business_registered_country = 18;</code>
     */
    protected $business_registered_country = '';
    /**
     * Generated from protobuf field <code>string business_operation_address = 19;</code>
     */
    protected $business_operation_address = '';
    /**
     * Generated from protobuf field <code>string business_operation_address_l2 = 20;</code>
     */
    protected $business_operation_address_l2 = '';
    /**
     * Generated from protobuf field <code>string business_operation_state = 21;</code>
     */
    protected $business_operation_state = '';
    /**
     * Generated from protobuf field <code>string business_operation_city = 22;</code>
     */
    protected $business_operation_city = '';
    /**
     * Generated from protobuf field <code>string business_operation_district = 23;</code>
     */
    protected $business_operation_district = '';
    /**
     * Generated from protobuf field <code>string business_operation_pin = 24;</code>
     */
    protected $business_operation_pin = '';
    /**
     * Generated from protobuf field <code>string business_operation_country = 25;</code>
     */
    protected $business_operation_country = '';
    /**
     * Generated from protobuf field <code>string gstin = 26;</code>
     */
    protected $gstin = '';
    /**
     * Generated from protobuf field <code>string company_cin = 27;</code>
     */
    protected $company_cin = '';
    /**
     * Generated from protobuf field <code>string company_pan = 28;</code>
     */
    protected $company_pan = '';
    /**
     * Generated from protobuf field <code>string company_pan_name = 29;</code>
     */
    protected $company_pan_name = '';
    /**
     * Generated from protobuf field <code>string business_category = 30;</code>
     */
    protected $business_category = '';
    /**
     * Generated from protobuf field <code>string business_subcategory = 31;</code>
     */
    protected $business_subcategory = '';
    /**
     * Generated from protobuf field <code>string business_model = 32;</code>
     */
    protected $business_model = '';
    /**
     * Generated from protobuf field <code>uint32 transaction_volume = 33;</code>
     */
    protected $transaction_volume = 0;
    /**
     * Generated from protobuf field <code>string bank_account_number = 34;</code>
     */
    protected $bank_account_number = '';
    /**
     * Generated from protobuf field <code>string bank_account_name = 35;</code>
     */
    protected $bank_account_name = '';
    /**
     * Generated from protobuf field <code>string bank_account_type = 36;</code>
     */
    protected $bank_account_type = '';
    /**
     * Generated from protobuf field <code>string bank_branch_ifsc = 37;</code>
     */
    protected $bank_branch_ifsc = '';
    /**
     * Generated from protobuf field <code>string department = 38;</code>
     */
    protected $department = '';
    /**
     * Generated from protobuf field <code>string internal_notes = 39;</code>
     */
    protected $internal_notes = '';
    /**
     * Generated from protobuf field <code>string authorized_signatory_residential_address = 40;</code>
     */
    protected $authorized_signatory_residential_address = '';
    /**
     * Generated from protobuf field <code>string authorized_signatory_dob = 41;</code>
     */
    protected $authorized_signatory_dob = '';
    /**
     * Generated from protobuf field <code>string platform = 42;</code>
     */
    protected $platform = '';
    /**
     * Generated from protobuf field <code>string date_of_establishment = 43;</code>
     */
    protected $date_of_establishment = '';
    /**
     * Generated from protobuf field <code>string shop_establishment_number = 44;</code>
     */
    protected $shop_establishment_number = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Struct client_applications = 45;</code>
     */
    protected $client_applications = null;
    /**
     * Generated from protobuf field <code>string iec_code = 46;</code>
     */
    protected $iec_code = '';
    /**
     * Generated from protobuf field <code>string audit_id = 47;</code>
     */
    protected $audit_id = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Struct custom_fields = 48;</code>
     */
    protected $custom_fields = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $merchant_id
     *     @type string $contact_name
     *     @type string $contact_email
     *     @type string $contact_mobile
     *     @type string $contact_landline
     *     @type string $business_type
     *     @type string $business_name
     *     @type string $business_description
     *     @type string $business_dba
     *     @type string $business_website
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $additional_websites
     *     @type string $business_registered_address
     *     @type string $business_registered_address_l2
     *     @type string $business_registered_state
     *     @type string $business_registered_city
     *     @type string $business_registered_district
     *     @type string $business_registered_pin
     *     @type string $business_registered_country
     *     @type string $business_operation_address
     *     @type string $business_operation_address_l2
     *     @type string $business_operation_state
     *     @type string $business_operation_city
     *     @type string $business_operation_district
     *     @type string $business_operation_pin
     *     @type string $business_operation_country
     *     @type string $gstin
     *     @type string $company_cin
     *     @type string $company_pan
     *     @type string $company_pan_name
     *     @type string $business_category
     *     @type string $business_subcategory
     *     @type string $business_model
     *     @type int $transaction_volume
     *     @type string $bank_account_number
     *     @type string $bank_account_name
     *     @type string $bank_account_type
     *     @type string $bank_branch_ifsc
     *     @type string $department
     *     @type string $internal_notes
     *     @type string $authorized_signatory_residential_address
     *     @type string $authorized_signatory_dob
     *     @type string $platform
     *     @type string $date_of_establishment
     *     @type string $shop_establishment_number
     *     @type \Google\Protobuf\Struct $client_applications
     *     @type string $iec_code
     *     @type string $audit_id
     *     @type \Google\Protobuf\Struct $custom_fields
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Accounts\Account\V1\AccountApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string merchant_id = 1;</code>
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchant_id;
    }

    /**
     * Generated from protobuf field <code>string merchant_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMerchantId($var)
    {
        GPBUtil::checkString($var, True);
        $this->merchant_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string contact_name = 2;</code>
     * @return string
     */
    public function getContactName()
    {
        return $this->contact_name;
    }

    /**
     * Generated from protobuf field <code>string contact_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setContactName($var)
    {
        GPBUtil::checkString($var, True);
        $this->contact_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string contact_email = 3;</code>
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contact_email;
    }

    /**
     * Generated from protobuf field <code>string contact_email = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setContactEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->contact_email = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string contact_mobile = 4;</code>
     * @return string
     */
    public function getContactMobile()
    {
        return $this->contact_mobile;
    }

    /**
     * Generated from protobuf field <code>string contact_mobile = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setContactMobile($var)
    {
        GPBUtil::checkString($var, True);
        $this->contact_mobile = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string contact_landline = 5;</code>
     * @return string
     */
    public function getContactLandline()
    {
        return $this->contact_landline;
    }

    /**
     * Generated from protobuf field <code>string contact_landline = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setContactLandline($var)
    {
        GPBUtil::checkString($var, True);
        $this->contact_landline = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_type = 6;</code>
     * @return string
     */
    public function getBusinessType()
    {
        return $this->business_type;
    }

    /**
     * Generated from protobuf field <code>string business_type = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessType($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_name = 7;</code>
     * @return string
     */
    public function getBusinessName()
    {
        return $this->business_name;
    }

    /**
     * Generated from protobuf field <code>string business_name = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessName($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_description = 8;</code>
     * @return string
     */
    public function getBusinessDescription()
    {
        return $this->business_description;
    }

    /**
     * Generated from protobuf field <code>string business_description = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_dba = 9;</code>
     * @return string
     */
    public function getBusinessDba()
    {
        return $this->business_dba;
    }

    /**
     * Generated from protobuf field <code>string business_dba = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessDba($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_dba = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_website = 10;</code>
     * @return string
     */
    public function getBusinessWebsite()
    {
        return $this->business_website;
    }

    /**
     * Generated from protobuf field <code>string business_website = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessWebsite($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_website = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string additional_websites = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdditionalWebsites()
    {
        return $this->additional_websites;
    }

    /**
     * Generated from protobuf field <code>repeated string additional_websites = 11;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdditionalWebsites($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->additional_websites = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_registered_address = 12;</code>
     * @return string
     */
    public function getBusinessRegisteredAddress()
    {
        return $this->business_registered_address;
    }

    /**
     * Generated from protobuf field <code>string business_registered_address = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessRegisteredAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_registered_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_registered_address_l2 = 13;</code>
     * @return string
     */
    public function getBusinessRegisteredAddressL2()
    {
        return $this->business_registered_address_l2;
    }

    /**
     * Generated from protobuf field <code>string business_registered_address_l2 = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessRegisteredAddressL2($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_registered_address_l2 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_registered_state = 14;</code>
     * @return string
     */
    public function getBusinessRegisteredState()
    {
        return $this->business_registered_state;
    }

    /**
     * Generated from protobuf field <code>string business_registered_state = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessRegisteredState($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_registered_state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_registered_city = 15;</code>
     * @return string
     */
    public function getBusinessRegisteredCity()
    {
        return $this->business_registered_city;
    }

    /**
     * Generated from protobuf field <code>string business_registered_city = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessRegisteredCity($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_registered_city = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_registered_district = 16;</code>
     * @return string
     */
    public function getBusinessRegisteredDistrict()
    {
        return $this->business_registered_district;
    }

    /**
     * Generated from protobuf field <code>string business_registered_district = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessRegisteredDistrict($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_registered_district = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_registered_pin = 17;</code>
     * @return string
     */
    public function getBusinessRegisteredPin()
    {
        return $this->business_registered_pin;
    }

    /**
     * Generated from protobuf field <code>string business_registered_pin = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessRegisteredPin($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_registered_pin = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_registered_country = 18;</code>
     * @return string
     */
    public function getBusinessRegisteredCountry()
    {
        return $this->business_registered_country;
    }

    /**
     * Generated from protobuf field <code>string business_registered_country = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessRegisteredCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_registered_country = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_operation_address = 19;</code>
     * @return string
     */
    public function getBusinessOperationAddress()
    {
        return $this->business_operation_address;
    }

    /**
     * Generated from protobuf field <code>string business_operation_address = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessOperationAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_operation_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_operation_address_l2 = 20;</code>
     * @return string
     */
    public function getBusinessOperationAddressL2()
    {
        return $this->business_operation_address_l2;
    }

    /**
     * Generated from protobuf field <code>string business_operation_address_l2 = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessOperationAddressL2($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_operation_address_l2 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_operation_state = 21;</code>
     * @return string
     */
    public function getBusinessOperationState()
    {
        return $this->business_operation_state;
    }

    /**
     * Generated from protobuf field <code>string business_operation_state = 21;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessOperationState($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_operation_state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_operation_city = 22;</code>
     * @return string
     */
    public function getBusinessOperationCity()
    {
        return $this->business_operation_city;
    }

    /**
     * Generated from protobuf field <code>string business_operation_city = 22;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessOperationCity($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_operation_city = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_operation_district = 23;</code>
     * @return string
     */
    public function getBusinessOperationDistrict()
    {
        return $this->business_operation_district;
    }

    /**
     * Generated from protobuf field <code>string business_operation_district = 23;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessOperationDistrict($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_operation_district = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_operation_pin = 24;</code>
     * @return string
     */
    public function getBusinessOperationPin()
    {
        return $this->business_operation_pin;
    }

    /**
     * Generated from protobuf field <code>string business_operation_pin = 24;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessOperationPin($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_operation_pin = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_operation_country = 25;</code>
     * @return string
     */
    public function getBusinessOperationCountry()
    {
        return $this->business_operation_country;
    }

    /**
     * Generated from protobuf field <code>string business_operation_country = 25;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessOperationCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_operation_country = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string gstin = 26;</code>
     * @return string
     */
    public function getGstin()
    {
        return $this->gstin;
    }

    /**
     * Generated from protobuf field <code>string gstin = 26;</code>
     * @param string $var
     * @return $this
     */
    public function setGstin($var)
    {
        GPBUtil::checkString($var, True);
        $this->gstin = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string company_cin = 27;</code>
     * @return string
     */
    public function getCompanyCin()
    {
        return $this->company_cin;
    }

    /**
     * Generated from protobuf field <code>string company_cin = 27;</code>
     * @param string $var
     * @return $this
     */
    public function setCompanyCin($var)
    {
        GPBUtil::checkString($var, True);
        $this->company_cin = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string company_pan = 28;</code>
     * @return string
     */
    public function getCompanyPan()
    {
        return $this->company_pan;
    }

    /**
     * Generated from protobuf field <code>string company_pan = 28;</code>
     * @param string $var
     * @return $this
     */
    public function setCompanyPan($var)
    {
        GPBUtil::checkString($var, True);
        $this->company_pan = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string company_pan_name = 29;</code>
     * @return string
     */
    public function getCompanyPanName()
    {
        return $this->company_pan_name;
    }

    /**
     * Generated from protobuf field <code>string company_pan_name = 29;</code>
     * @param string $var
     * @return $this
     */
    public function setCompanyPanName($var)
    {
        GPBUtil::checkString($var, True);
        $this->company_pan_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_category = 30;</code>
     * @return string
     */
    public function getBusinessCategory()
    {
        return $this->business_category;
    }

    /**
     * Generated from protobuf field <code>string business_category = 30;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessCategory($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_category = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_subcategory = 31;</code>
     * @return string
     */
    public function getBusinessSubcategory()
    {
        return $this->business_subcategory;
    }

    /**
     * Generated from protobuf field <code>string business_subcategory = 31;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessSubcategory($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_subcategory = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_model = 32;</code>
     * @return string
     */
    public function getBusinessModel()
    {
        return $this->business_model;
    }

    /**
     * Generated from protobuf field <code>string business_model = 32;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_model = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 transaction_volume = 33;</code>
     * @return int
     */
    public function getTransactionVolume()
    {
        return $this->transaction_volume;
    }

    /**
     * Generated from protobuf field <code>uint32 transaction_volume = 33;</code>
     * @param int $var
     * @return $this
     */
    public function setTransactionVolume($var)
    {
        GPBUtil::checkUint32($var);
        $this->transaction_volume = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string bank_account_number = 34;</code>
     * @return string
     */
    public function getBankAccountNumber()
    {
        return $this->bank_account_number;
    }

    /**
     * Generated from protobuf field <code>string bank_account_number = 34;</code>
     * @param string $var
     * @return $this
     */
    public function setBankAccountNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->bank_account_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string bank_account_name = 35;</code>
     * @return string
     */
    public function getBankAccountName()
    {
        return $this->bank_account_name;
    }

    /**
     * Generated from protobuf field <code>string bank_account_name = 35;</code>
     * @param string $var
     * @return $this
     */
    public function setBankAccountName($var)
    {
        GPBUtil::checkString($var, True);
        $this->bank_account_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string bank_account_type = 36;</code>
     * @return string
     */
    public function getBankAccountType()
    {
        return $this->bank_account_type;
    }

    /**
     * Generated from protobuf field <code>string bank_account_type = 36;</code>
     * @param string $var
     * @return $this
     */
    public function setBankAccountType($var)
    {
        GPBUtil::checkString($var, True);
        $this->bank_account_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string bank_branch_ifsc = 37;</code>
     * @return string
     */
    public function getBankBranchIfsc()
    {
        return $this->bank_branch_ifsc;
    }

    /**
     * Generated from protobuf field <code>string bank_branch_ifsc = 37;</code>
     * @param string $var
     * @return $this
     */
    public function setBankBranchIfsc($var)
    {
        GPBUtil::checkString($var, True);
        $this->bank_branch_ifsc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string department = 38;</code>
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Generated from protobuf field <code>string department = 38;</code>
     * @param string $var
     * @return $this
     */
    public function setDepartment($var)
    {
        GPBUtil::checkString($var, True);
        $this->department = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string internal_notes = 39;</code>
     * @return string
     */
    public function getInternalNotes()
    {
        return $this->internal_notes;
    }

    /**
     * Generated from protobuf field <code>string internal_notes = 39;</code>
     * @param string $var
     * @return $this
     */
    public function setInternalNotes($var)
    {
        GPBUtil::checkString($var, True);
        $this->internal_notes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string authorized_signatory_residential_address = 40;</code>
     * @return string
     */
    public function getAuthorizedSignatoryResidentialAddress()
    {
        return $this->authorized_signatory_residential_address;
    }

    /**
     * Generated from protobuf field <code>string authorized_signatory_residential_address = 40;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthorizedSignatoryResidentialAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->authorized_signatory_residential_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string authorized_signatory_dob = 41;</code>
     * @return string
     */
    public function getAuthorizedSignatoryDob()
    {
        return $this->authorized_signatory_dob;
    }

    /**
     * Generated from protobuf field <code>string authorized_signatory_dob = 41;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthorizedSignatoryDob($var)
    {
        GPBUtil::checkString($var, True);
        $this->authorized_signatory_dob = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string platform = 42;</code>
     * @return string
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Generated from protobuf field <code>string platform = 42;</code>
     * @param string $var
     * @return $this
     */
    public function setPlatform($var)
    {
        GPBUtil::checkString($var, True);
        $this->platform = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string date_of_establishment = 43;</code>
     * @return string
     */
    public function getDateOfEstablishment()
    {
        return $this->date_of_establishment;
    }

    /**
     * Generated from protobuf field <code>string date_of_establishment = 43;</code>
     * @param string $var
     * @return $this
     */
    public function setDateOfEstablishment($var)
    {
        GPBUtil::checkString($var, True);
        $this->date_of_establishment = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string shop_establishment_number = 44;</code>
     * @return string
     */
    public function getShopEstablishmentNumber()
    {
        return $this->shop_establishment_number;
    }

    /**
     * Generated from protobuf field <code>string shop_establishment_number = 44;</code>
     * @param string $var
     * @return $this
     */
    public function setShopEstablishmentNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->shop_establishment_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct client_applications = 45;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getClientApplications()
    {
        return $this->client_applications;
    }

    public function hasClientApplications()
    {
        return isset($this->client_applications);
    }

    public function clearClientApplications()
    {
        unset($this->client_applications);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct client_applications = 45;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setClientApplications($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->client_applications = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string iec_code = 46;</code>
     * @return string
     */
    public function getIecCode()
    {
        return $this->iec_code;
    }

    /**
     * Generated from protobuf field <code>string iec_code = 46;</code>
     * @param string $var
     * @return $this
     */
    public function setIecCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->iec_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string audit_id = 47;</code>
     * @return string
     */
    public function getAuditId()
    {
        return $this->audit_id;
    }

    /**
     * Generated from protobuf field <code>string audit_id = 47;</code>
     * @param string $var
     * @return $this
     */
    public function setAuditId($var)
    {
        GPBUtil::checkString($var, True);
        $this->audit_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct custom_fields = 48;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getCustomFields()
    {
        return $this->custom_fields;
    }

    public function hasCustomFields()
    {
        return isset($this->custom_fields);
    }

    public function clearCustomFields()
    {
        unset($this->custom_fields);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct custom_fields = 48;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setCustomFields($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->custom_fields = $var;

        return $this;
    }

}
