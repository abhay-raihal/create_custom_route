<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT! (protoc-gen-twirp_php )
# source: platform/bvs/artefactcurator/verify/v1/digilocker_api.proto

declare(strict_types=1);

namespace Rzp\Bvs\ArtefactCurator\Verify\V1;

use Google\Protobuf\Internal\GPBDecodeException;
use Google\Protobuf\Internal\Message;

/**
 * A Protobuf client that implements the {@see DigilockerAPI} interface.
 * It communicates using Protobuf and can be configured with a custom HTTP Client.
 *
 * Generated from protobuf service <code>platform.bvs.artefactcurator.verify.v1.DigilockerAPI</code>
 */
final class DigilockerAPIClientV2 extends DigilockerAPIAbstractClient implements DigilockerAPI
{
    protected $timeout;

    /**
     * @inheritDoc
     */

    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
    }

    protected function doRequest(array $ctx, string $url, Message $in, Message $out): void
    {
        $body = $in->serializeToString();

        $req = $this->newRequest($ctx, $url, $body, 'application/protobuf');

        try {
            $resp = $this->httpClient->sendRequest($req,["timeout"=>$this->timeout]);
        } catch (\Throwable $e) {
            throw $this->clientError('failed to send request', $e);
        }

        if ($resp->getStatusCode() !== 200) {
            throw $this->errorFromResponse($resp);
        }

        try {
            $out->mergeFromString((string)$resp->getBody());
        } catch (GPBDecodeException $e) {
            throw $this->clientError('failed to unmarshal proto response', $e);
        }
    }
}
