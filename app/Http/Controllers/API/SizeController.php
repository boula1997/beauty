<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\SizeResource;
use App\Models\Size;
use Exception;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    private $size;
    public function __construct(Size $size)
    {
        $this->size = $size;
    }

    public function index()
    {
        try {
            $data['sizes'] = SizeResource::collection($this->size->get());
            return successResponse($data,trans('general.sent_successfully'));
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['size'] = new SizeResource($this->size->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}
