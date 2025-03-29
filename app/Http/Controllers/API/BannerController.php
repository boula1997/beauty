<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\BannerResource;
use App\Http\Resources\ProductResource;
use App\Models\Banner;
use Exception;
use Illuminate\Http\Request;
 
class BannerController extends Controller
{
    private $banner;
    public function __construct(Banner $banner)
    {
        $this->banner = $banner;
    }

    public function index()
    {
        try {
            $data['banners'] = BannerResource::collection($this->banner->latest()->get());
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['banner'] = new BannerResource($this->banner->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function bannerProducts(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'per_page' => 'integer|min:1|max:100',
                'banner_id' => 'required|exists:banners,id',
            ]);
    
            if ($validator->fails()) {
                $errors = $validator->errors()->toArray();
                $errors['message'] = 'Validation Error';
                return response()->json(['errors' => $errors], 420);
            }
            
            $perPage = $request->input('per_page', 10);
            
            $banner=$this->banner->findorfail($request->banner_id);
            $products = $banner->products()->paginate($perPage);
            
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
