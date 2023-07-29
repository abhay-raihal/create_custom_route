<?php
# Generated by the protocol buffer compiler (protoc-gen-twirp_php ).  DO NOT EDIT!
# source: platform/obs/verification/v1/verification.proto

declare(strict_types=1);

namespace Rzp\Obs\Verification\V1;

/**
 *
 *
 * Generated from protobuf service <code>platform.obs.verification.v1.VerificationAPI</code>
 */
interface VerificationAPI
{
    /**
     * Creates auto verification rule
     *
     * Generated from protobuf method <code>platform.obs.verification.v1.VerificationAPI/CreateAutoVerificationRule</code>
     *
     * @throws \Twirp\Error
     */
    public function CreateAutoVerificationRule(array $ctx, \Rzp\Obs\Verification\V1\CreateAutoVerificationRuleRequest $req): \Rzp\Obs\Verification\V1\CreateAutoVerificationRuleResponse;

    /**
     * returns all verification requests for a given workflow
     *
     * Generated from protobuf method <code>platform.obs.verification.v1.VerificationAPI/GetVerificationRequests</code>
     *
     * @throws \Twirp\Error
     */
    public function GetVerificationRequests(array $ctx, \Rzp\Obs\Verification\V1\GetVerificationRequest $req): \Rzp\Obs\Verification\V1\GetVerificationResponse;

    /**
     *
     *
     * Generated from protobuf method <code>platform.obs.verification.v1.VerificationAPI/UpdateVerification</code>
     *
     * @throws \Twirp\Error
     */
    public function UpdateVerification(array $ctx, \Rzp\Obs\Verification\V1\UpdateVerificationRequest $req): \Rzp\Obs\Verification\V1\UpdateVerificationResponse;
}
