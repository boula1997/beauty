<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Http\Resources\SubcategoryResource;
use App\Models\Subcategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class SubcategoryController extends Controller
{
    private $subcategory;
    public function __construct(Subcategory $subcategory)
    {
        $this->subcategory = $subcategory;
    }

    public function index()
    {
        try {
            $data['subcategories'] = SubcategoryResource::collection($this->subcategory->latest()->get());
            return successResponse($data,trans('general.sent_successfully'));
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['subcategory'] = new SubcategoryResource($this->subcategory->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
    public function subcategoryProducts(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'per_page' => 'integer|min:1|max:100',
                'subcategory_id' => 'required|exists:subcategories,id',
            ]);
    
            if ($validator->fails()) {
                $errors = $validator->errors()->toArray();
                $errors['message'] = 'Validation Error';
                return response()->json(['errors' => $errors], 420);
            }
            
            $perPage = $request->input('per_page', 10);
            
            $subcategory=$this->subcategory->findorfail($request->subcategory_id);
            $products = $subcategory->products()->paginate($perPage);
            
            $data = ProductResource::collection($products);
            
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