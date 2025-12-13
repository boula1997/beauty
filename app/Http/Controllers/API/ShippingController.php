<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ShippingResource;
use App\Models\Shipping;
use Exception;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    private $shipping;
    public function __construct(Shipping $shipping)
    {
        $this->shipping = $shipping;
    }

    public function index()
    {
        try {
            $data['shippings'] = ShippingResource::collection($this->shipping->latest()->get());
            return successResponse($data,trans('general.sent_successfully'));
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['shipping'] = new ShippingResource($this->shipping->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}