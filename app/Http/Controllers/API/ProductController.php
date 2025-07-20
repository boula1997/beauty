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
    public $withRelated;
    public function __construct(Product $product, $withRelated = true)
    {
        $this->product = $product;
        $this->withRelated = $withRelated;
    }

    public function index()
    {
        try {
            $query=$this->product;
            $data['products'] = ProductResource::collection($this->product->where('is_addition',false)->latest()->get());
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function isAdditionndex()
    {
        try {
            $query=$this->product;
            $data['products'] = ProductResource::collection($this->product->where('is_addition',true)->latest()->get());
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
        
            $data['product'] = new ProductResource($this->product->with('category.products')->findorfail($id));
            
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