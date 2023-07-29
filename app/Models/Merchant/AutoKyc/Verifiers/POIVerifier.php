<?php

namespace RZP\Models\Merchant\AutoKyc\Verifiers;

use RZP\Models\Merchant\Detail\POIStatus;

class POIVerifier implements Verifier
{
    use PanVerifier;

    protected function getIncorrectDetailsStatus()
    {
        return POIStatus::INCORRECT_DETAILS;
    }

    protected function getFailedStatus()
    {
        return POIStatus::FAILED;
    }

    protected function getNotMatchedStatus()
    {
        return POIStatus::NOT_MATCHED;
    }

    protected function getVerifiedStatus()
    {
        return POIStatus::VERIFIED;
    }

    protected function getExpectedMatchPercentage()
    {
        return POIStatus::POI_VERIFICATION_THRESHOLD;
    }
}
