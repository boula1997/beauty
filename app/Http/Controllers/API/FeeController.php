<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\FeeResource;
use App\Models\Fee;
use Exception;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    private $fee;
    public function __construct(Fee $fee)
    {
        $this->fee = $fee;
    }

    public function index()
    {
        try {
            $data['fees'] = FeeResource::collection($this->fee->get());
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['fee'] = new FeeResource($this->fee->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}
