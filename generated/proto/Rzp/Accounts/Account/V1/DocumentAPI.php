<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT! (protoc-gen-twirp_php )
# source: proto/accounts/account/v1/document_api.proto

declare(strict_types=1);

namespace Rzp\Accounts\Account\V1;

/**
 *
 *
 * Generated from protobuf service <code>rzp.accounts.account.v1.DocumentAPI</code>
 */
interface DocumentAPI
{
    /**
     *
     *
     * Generated from protobuf method <code>rzp.accounts.account.v1.DocumentAPI/Create</code>
     *
     * @throws \Twirp\Error
     */
    public function Create(array $ctx, \Rzp\Accounts\Account\V1\CreateDocumentsRequest $req): \Rzp\Accounts\Account\V1\DocumentFetchResponse;

    /**
     *
     *
     * Generated from protobuf method <code>rzp.accounts.account.v1.DocumentAPI/Fetch</code>
     *
     * @throws \Twirp\Error
     */
    public function Fetch(array $ctx, \Rzp\Accounts\Account\V1\FetchDocumentsRequest $req): \Rzp\Accounts\Account\V1\DocumentFetchResponse;

    /**
     *
     *
     * Generated from protobuf method <code>rzp.accounts.account.v1.DocumentAPI/Delete</code>
     *
     * @throws \Twirp\Error
     */
    public function Delete(array $ctx, \Rzp\Accounts\Account\V1\DeleteDocumentRequest $req): \Rzp\Accounts\Account\V1\DeleteDocumentResponse;

    /**
     *
     *
     * Generated from protobuf method <code>rzp.accounts.account.v1.DocumentAPI/FetchMerchantDocuments</code>
     *
     * @throws \Twirp\Error
     */
    public function FetchMerchantDocuments(array $ctx, \Rzp\Accounts\Account\V1\FetchMerchantDocumentsRequest $req): \Rzp\Accounts\Account\V1\FetchMerchantDocumentsResponse;
}