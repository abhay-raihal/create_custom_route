<?php
# Generated by the protocol buffer compiler (protoc-gen-twirp_php ).  DO NOT EDIT!
# source: platform/obs/verification/v1/verification.proto

declare(strict_types=1);

namespace Rzp\Obs\Verification\V1;

use Google\Protobuf\Internal\GPBDecodeException;
use Google\Protobuf\Internal\Message;

/**
 * A JSON client that implements the {@see VerificationAPI} interface.
 * It communicates using JSON and can be configured with a custom HTTP Client.
 *
 * Generated from protobuf service <code>platform.obs.verification.v1.VerificationAPI</code>
 */
final class VerificationAPIJsonClient extends VerificationAPIAbstractClient implements VerificationAPI
{
    /**
     * @inheritDoc
     */
    protected function doRequest(array $ctx, string $url, Message $in, Message $out): void
    {
        $body = $in->serializeToJsonString();

        $req = $this->newRequest($ctx, $url, $body, 'application/json');

        try {
            $resp = $this->httpClient->sendRequest($req);
        } catch (\Throwable $e) {
            throw $this->clientError('failed to send request', $e);
        }

        if ($resp->getStatusCode() !== 200) {
            throw $this->errorFromResponse($resp);
        }

        try {
            $out->mergeFromJsonString((string)$resp->getBody());
        } catch (GPBDecodeException $e) {
            throw $this->clientError('failed to unmarshal json response', $e);
        }
    }
}
