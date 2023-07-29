<?php

namespace RZP\Http\Controllers;

use Request;
use ApiResponse;

use RZP\Models\SubVirtualAccount;

/**
 * Class SubVirtualAccountController
 *
 * @package RZP\Http\Controllers
 */
class SubVirtualAccountController extends Controller
{
    use Traits\HasCrudMethods;

    protected $service = SubVirtualAccount\Service::class;

    public function listAdmin(string $id)
    {
        $subVirtualAccounts = $this->service()->fetchMultipleAdmin($id);

        return ApiResponse::json($subVirtualAccounts);
    }

    public function enableOrDisable(string $id)
    {
        $input = Request::all();

        $response = $this->service()->enableOrDisable($id, $input);

        return ApiResponse::json($response);
    }

    public function transferWithOtp()
    {
        $input = Request::all();

        $response = $this->service()->transferWithOtp($input);

        return ApiResponse::json($response);
    }

    public function listCreditTransfers()
    {
        $input = Request::all();

        $response = $this->service()->listCreditTransfers($input);

        return ApiResponse::json($response);
    }

    public function migrate($merchantId)
    {
        $input = Request::all();

        $input[SubVirtualAccount\Entity::MASTER_MERCHANT_ID] = $merchantId;

        $response = $this->service()->migrate($input);

        return ApiResponse::json();
    }
}
