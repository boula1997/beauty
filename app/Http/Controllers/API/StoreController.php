<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\StoreResource;
use App\Models\Store;
use Exception;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    private $store;
    public function __construct(Store $store)
    {
        $this->store = $store;
    }

    public function index()
    {
        try {
            $data['merchants'] = StoreResource::collection($this->store->latest()->get());
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['merchant'] = new StoreResource($this->store->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}