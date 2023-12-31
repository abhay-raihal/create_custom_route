<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT! (protoc-gen-twirp_php )
# source: proto/accounts/account/v1/account_api.proto

declare(strict_types=1);

namespace Rzp\Accounts\Account\V1;

/**
 *
 *
 * Generated from protobuf service <code>rzp.accounts.account.v1.AccountAPI</code>
 */
interface AccountAPI
{
    /**
     *
     *
     * Generated from protobuf method <code>rzp.accounts.account.v1.AccountAPI/Create</code>
     *
     * @throws \Twirp\Error
     */
    public function Create(array $ctx, \Rzp\Accounts\Account\V1\CreateAccountRequest $req): \Rzp\Accounts\Account\V1\Account;

    /**
     *
     *
     * Generated from protobuf method <code>rzp.accounts.account.v1.AccountAPI/Update</code>
     *
     * @throws \Twirp\Error
     */
    public function Update(array $ctx, \Rzp\Accounts\Account\V1\UpdateAccountRequest $req): \Rzp\Accounts\Account\V1\Account;

    /**
     *
     *
     * Generated from protobuf method <code>rzp.accounts.account.v1.AccountAPI/Fetch</code>
     *
     * @throws \Twirp\Error
     */
    public function Fetch(array $ctx, \Rzp\Accounts\Account\V1\FetchAccountRequest $req): \Rzp\Accounts\Account\V1\Account;

    /**
     *
     *
     * Generated from protobuf method <code>rzp.accounts.account.v1.AccountAPI/FetchMerchant</code>
     *
     * @throws \Twirp\Error
     */
    public function FetchMerchant(array $ctx, \Rzp\Accounts\Account\V1\FetchMerchantRequest $req): \Rzp\Accounts\Account\V1\FetchMerchantResponse;

    /**
     *
     *
     * Generated from protobuf method <code>rzp.accounts.account.v1.AccountAPI/DeleteAccountContact</code>
     *
     * @throws \Twirp\Error
     */
    public function DeleteAccountContact(array $ctx, \Rzp\Accounts\Account\V1\DeleteAccountContactRequest $req): \Rzp\Accounts\Account\V1\DeleteAccountContactResponse;
}
