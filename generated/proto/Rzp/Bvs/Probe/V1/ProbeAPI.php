<?php
# Generated by the protocol buffer compiler (protoc-gen-twirp_php ).  DO NOT EDIT!
# source: platform/bvs/probe/v1/probe_api.proto

declare(strict_types=1);

namespace Rzp\Bvs\Probe\V1;

/**
 *
 *
 * Generated from protobuf service <code>platform.bvs.probe.v1.ProbeAPI</code>
 */
interface ProbeAPI
{
    /**
     *
     *
     * Generated from protobuf method <code>platform.bvs.probe.v1.ProbeAPI/GetCompanySearch</code>
     *
     * @throws \Twirp\Error
     */
    public function GetCompanySearch(array $ctx, \Rzp\Bvs\Probe\V1\CompanySearchRequest $req): \Rzp\Bvs\Probe\V1\CompanySearchResponse;

    /**
     *
     *
     * Generated from protobuf method <code>platform.bvs.probe.v1.ProbeAPI/AadhaarGetCaptcha</code>
     *
     * @throws \Twirp\Error
     */
    public function AadhaarGetCaptcha(array $ctx, \Rzp\Bvs\Probe\V1\AadhaarGetCaptchaRequest $req): \Rzp\Bvs\Probe\V1\AadhaarGetCaptchaResponse;

    /**
     *
     *
     * Generated from protobuf method <code>platform.bvs.probe.v1.ProbeAPI/AadhaarVerifyCaptchaAndSendOtp</code>
     *
     * @throws \Twirp\Error
     */
    public function AadhaarVerifyCaptchaAndSendOtp(array $ctx, \Rzp\Bvs\Probe\V1\AadhaarVerifyCaptchaAndSendOtpRequest $req): \Rzp\Bvs\Probe\V1\AadhaarVerifyCaptchaAndSendOtpResponse;

    /**
     *
     *
     * Generated from protobuf method <code>platform.bvs.probe.v1.ProbeAPI/AadhaarSubmitOtp</code>
     *
     * @throws \Twirp\Error
     */
    public function AadhaarSubmitOtp(array $ctx, \Rzp\Bvs\Probe\V1\AadhaarSubmitOtpRequest $req): \Rzp\Bvs\Probe\V1\AadhaarSubmitOtpResponse;

    /**
     *
     *
     * Generated from protobuf method <code>platform.bvs.probe.v1.ProbeAPI/GetGstDetails</code>
     *
     * @throws \Twirp\Error
     */
    public function GetGstDetails(array $ctx, \Rzp\Bvs\Probe\V1\GetGstDetailsRequest $req): \Rzp\Bvs\Probe\V1\GetGstDetailsResponse;
}
