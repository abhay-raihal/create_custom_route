<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT! (protoc-gen-twirp_php 0.8.1)
# source: custom-domain-service/app/v1/app_api.proto

declare(strict_types=1);

namespace Rzp\CustomDomainService\App\V1;

/**
 *
 *
 * Generated from protobuf service <code>rzp.custom_domain_service.app.v1.AppAPI</code>
 */
interface AppAPI
{
    /**
     *
     *
     * Generated from protobuf method <code>rzp.custom_domain_service.app.v1.AppAPI/Create</code>
     *
     * @throws \Twirp\Error
     */
    public function Create(array $ctx, \Rzp\CustomDomainService\App\V1\AppRequest $req): \Rzp\CustomDomainService\App\V1\AppResponse;
}
