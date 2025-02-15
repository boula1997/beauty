<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\ServiceRequestRequest;
use App\Models\ServiceRequest;
use Exception;
use Illuminate\Http\Request;

class ServiceRequestController extends Controller
{
    public function store(ServiceRequestRequest $request)
    {

        try {
            $data = ServiceRequest::create($request->all());
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}
