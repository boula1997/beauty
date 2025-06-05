<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\home\ProductResource as HomeProductResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\SubcategoryResource;
use App\Models\Category;
use App\Models\Subcategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{
    private $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        try {
            $data['categories'] = CategoryResource::collection($this->category->latest()->get());
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $category=$this->category->findorfail($id);
            $data['category'] = new CategoryResource($category);
            $data['products'] = ProductResource::collection($category->products);
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function categoryProducts(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'per_page' => 'integer|min:1|max:100',
                'category_id' => 'required|exists:categories,id',
            ]);
    
            if ($validator->fails()) {
                $errors = $validator->errors()->toArray();
                $errors['message'] = 'Validation Error';
                return response()->json(['errors' => $errors], 420);
            }
            
            $perPage = $request->input('per_page', 10);
            
            $category=$this->category->findorfail($request->category_id);
            $products = $category->products()->paginate($perPage);
            
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


    public function categorySubcategories(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'per_page' => 'integer|min:1|max:100',
                'category_id' => 'required|exists:categories,id',
            ]);
    
            if ($validator->fails()) {
                $errors = $validator->errors()->toArray();
                $errors['message'] = 'Validation Error';
                return response()->json(['errors' => $errors], 420);
            }
            
            $perPage = $request->input('per_page', 10);
            
            $category=$this->category->findorfail($request->category_id);
            $subcategories = $category->subcategories()->paginate($perPage);
            
            $data = SubcategoryResource::collection($subcategories);
            
            $pagination = [
                'current_page' => $subcategories->currentPage(),
                'per_page' => $subcategories->perPage(),
                'last_page' => $data->lastPage(),
                'total_items' => $subcategories->total(),
            ];
            
            return response()->json(['pagination' => $pagination, 'data' => $data], 200);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}