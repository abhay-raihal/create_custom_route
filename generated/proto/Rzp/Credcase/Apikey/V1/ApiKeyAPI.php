<?php
# Generated by the protocol buffer compiler (protoc-gen-twirp_php ).  DO NOT EDIT!
# source: credcase/apikey/v1/api_key_api.proto

declare(strict_types=1);

namespace Rzp\Credcase\Apikey\V1;

/**
 * Defines the RPCs for API keys.
 *
 * Generated from protobuf service <code>rzp.credcase.apikey.v1.ApiKeyAPI</code>
 */
interface ApiKeyAPI
{
    /**
     * Create a new api key.
     *
     * Generated from protobuf method <code>rzp.credcase.apikey.v1.ApiKeyAPI/Create</code>
     *
     * @throws \Twirp\Error
     */
    public function Create(array $ctx, \Rzp\Credcase\Apikey\V1\ApiKeyCreateRequest $req): \Rzp\Credcase\Apikey\V1\ApiKeyCreateResponse;

    /**
     * Get an single api key.
     *
     * Generated from protobuf method <code>rzp.credcase.apikey.v1.ApiKeyAPI/Get</code>
     *
     * @throws \Twirp\Error
     */
    public function Get(array $ctx, \Rzp\Credcase\Apikey\V1\ApiKeyGetRequest $req): \Rzp\Credcase\Apikey\V1\ApiKeyResponse;

    /**
     * Get an api key with decrypted secret!
     * Not for public exposure, use with caution.
     *
     * Generated from protobuf method <code>rzp.credcase.apikey.v1.ApiKeyAPI/GetWithSecret</code>
     *
     * @throws \Twirp\Error
     */
    public function GetWithSecret(array $ctx, \Rzp\Credcase\Apikey\V1\ApiKeyGetWithSecretRequest $req): \Rzp\Credcase\Apikey\V1\ApiKeyCreateResponse;

    /**
     * Get a list of api keys, filtered by provided params.
     *
     * Generated from protobuf method <code>rzp.credcase.apikey.v1.ApiKeyAPI/List</code>
     *
     * @throws \Twirp\Error
     */
    public function List(array $ctx, \Rzp\Credcase\Apikey\V1\ApiKeyListRequest $req): \Rzp\Credcase\Apikey\V1\ApiKeyListResponse;

    /**
     * Update an api key.
     *
     * Generated from protobuf method <code>rzp.credcase.apikey.v1.ApiKeyAPI/Update</code>
     *
     * @throws \Twirp\Error
     */
    public function Update(array $ctx, \Rzp\Credcase\Apikey\V1\ApiKeyUpdateRequest $req): \Rzp\Credcase\Apikey\V1\ApiKeyResponse;

    /**
     * Delete an api key.
     *
     * Generated from protobuf method <code>rzp.credcase.apikey.v1.ApiKeyAPI/Delete</code>
     *
     * @throws \Twirp\Error
     */
    public function Delete(array $ctx, \Rzp\Credcase\Apikey\V1\ApiKeyDeleteRequest $req): \Rzp\Credcase\Apikey\V1\ApiKeyDeleteResponse;

    /**
     * Rotate an api key.
     *
     * Generated from protobuf method <code>rzp.credcase.apikey.v1.ApiKeyAPI/Rotate</code>
     *
     * @throws \Twirp\Error
     */
    public function Rotate(array $ctx, \Rzp\Credcase\Apikey\V1\ApiKeyRotateRequest $req): \Rzp\Credcase\Apikey\V1\ApiKeyRotateResponse;
}