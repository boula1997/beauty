<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\BrandResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\GoalResource;
use App\Http\Resources\home\ProductResource as HomeProductResource;
use App\Http\Resources\IngredientResource;
use App\Http\Resources\ProductCategoriesResource;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    private $product;
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        try {
            $query = $this->product
                ->whereHas('productVariations', function ($q) {
                    $q->where('quantity', '>', 0);
                });
 
            // Search filters
            $query->search();
 
            // Additional filters
            if (request()->has('min_price') && request()->min_price) {
                $query->where('price', '>=', request()->min_price);
            }
 
            if (request()->has('max_price') && request()->max_price) {
                $query->where('price', '<=', request()->max_price);
            }
 
            if (request()->has('brand_id') && request()->brand_id) {
                $query->where('brand_id', request()->brand_id);
            }
 
            if (request()->has('subcategory_id') && request()->subcategory_id) {
                $query->where('subcategory_id', request()->subcategory_id);
            }
 
            if (request()->has('store_id') && request()->store_id) {
                $query->where('store_id', request()->store_id);
            }
 
            // Sorting
            $sortBy = request()->get('sort_by', 'latest');
            $query = $this->applySorting($query, $sortBy);
 
            $products = $query->paginate(request()->get('per_page', 6));
 
            $data['products'] = ProductResource::collection($products);
            $data['pagination'] = [
                'total' => $products->total(),
                'per_page' => $products->perPage(),
                'current_page' => $products->currentPage(),
                'last_page' => $products->lastPage(),
                'from' => $products->firstItem(),
                'to' => $products->lastItem(),
            ];
 
            return successResponse($data);
 
        } catch (Exception $e) {
            return failedResponse($e->getMessage());
        }
    }

    public function isAdditionndex()
    {
        try {
            $data['products'] = ProductResource::collection($this->product->latest()->get());
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

        public function show($id)
        {
            try {
                // Eager load only what is a real relation
                $product = $this->product->findOrFail($id);

                $data['product'] = new ProductResource($product);

                return successResponse($data);
            } catch (Exception $e) {
                return failedResponse($e->getMessage());
            }
        }



    public function flashSale(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'per_page' => 'integer|min:1|max:100',
                'category_id' => 'nullable|exists:categories,id' 
            ]);
    
            if ($validator->fails()) {
                $errors = $validator->errors()->toArray();
                $errors['message'] = 'Validation Error';
                return response()->json(['errors' => $errors], 420);
            }
    
            $perPage = $request->input('per_page', 10);
            $categoryId = $request->input('category_id'); 
    
            $flashSales = $this->product->whereHas('productOffer', function ($query) use ($categoryId) {
                $query->whereDate('startDate', '<=', now()) 
                 ->whereDate('endDate', '>=', now());
                if ($categoryId) {
                    $query->where('category_id', $categoryId);
                }
            })->paginate($perPage);
    
            $categories = CategoryResource::collection(Category::all());
    
            $data = HomeProductResource::collection($flashSales);
    
            $pagination = [
                'current_page' => $flashSales->currentPage(),
                'per_page' => $flashSales->perPage(),
                'last_page' => $flashSales->lastPage(),
                'total_items' => $flashSales->total(),
            ];
    
            return response()->json([
                'pagination' => $pagination,
                'categories' => $categories, 
                'data' => $data
            ], 200);
    
        } catch (Exception $e) {
            return failedResponse($e->getMessage());
        }
    }
    

    public function search(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'per_page' => 'integer|min:1|max:100',
            ]);
    
            if ($validator->fails()) {
                $errors = $validator->errors()->toArray();
                $errors['message'] = 'Validation Error';
                return response()->json(['errors' => $errors], 420);
            }
            
            $perPage = $request->input('per_page', 10);
            
            
            $products = Product :: whereHas('translations', function ($q) use ($request) {
                $searchTerm = '%' . replaceCharsAR($request['search']) . '%';
                
                $q->where('title', 'LIKE', $searchTerm)
                  ->orWhere('title', 'LIKE', '%' . strtolower($request['search']) . '%')
                  ->orWhere('title', 'LIKE', '%' . strtoupper($request['search']) . '%');
            })->paginate($perPage);
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