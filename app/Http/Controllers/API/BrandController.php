<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\BrandResource;
use App\Http\Resources\home\ProductResource as HomeProductResource;
use App\Http\Resources\ProductResource;
use App\Models\Brand;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    private $brand;
    public function __construct(Brand $brand)
    {
        $this->brand = $brand;
    }

    public function index()
    {
        try {
            $data['brands'] = BrandResource::collection($this->brand->latest()->get());
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['brand'] = new BrandResource($this->brand->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function brandProducts(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'per_page' => 'integer|min:1|max:100',
                'brand_id' => 'required|exists:brands,id',
            ]);
    
            if ($validator->fails()) {
                $errors = $validator->errors()->toArray();
                $errors['message'] = 'Validation Error';
                return response()->json(['errors' => $errors], 420);
            }
            
            $perPage = $request->input('per_page', 10);
            
            $brand=$this->brand->findorfail($request->brand_id);
            $products = $brand->products()->paginate($perPage);
            
            $data = HomeProductResource::collection($products);
            
            $pagination = [
                'current_page' => $products->currentPage(),
                'per_page' => $products->perPage(),
                'last_page' => $data->lastPage(),
                'total_items' => $products->total(),
            ];
            
            return response()->json(['pagination' => $pagination, 'data' => $data], 200);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}