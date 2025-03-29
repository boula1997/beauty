<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductSizeResource;
use App\Models\ProductSize;
use Exception;
use Illuminate\Http\Request;

class ProductSizeController extends Controller
{
    private $productSize;
    public function __construct(ProductSize $productSize)
    {
        $this->productSize = $productSize;
    }

    public function index()
    {
        try {
            $data['productSizes'] = ProductSizeResource::collection($this->productSize->get());
            return successResponse($data,trans('general.sent_successfully'));
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['productSize'] = new ProductSizeResource($this->productSize->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}
