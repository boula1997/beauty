<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\SliderResource;
use App\Http\Resources\ProductResource;
use App\Models\Slider;
use Exception;
use Illuminate\Http\Request;
 
class SliderController extends Controller
{
    private $slider;
    public function __construct(Slider $slider)
    {
        $this->slider = $slider;
    }

    public function index()
    {
        try {
            $data['sliders'] = SliderResource::collection($this->slider->latest()->get());
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['slider'] = new SliderResource($this->slider->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function sliderProducts(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'per_page' => 'integer|min:1|max:100',
                'slider_id' => 'required|exists:sliders,id',
            ]);
    
            if ($validator->fails()) {
                $errors = $validator->errors()->toArray();
                $errors['message'] = 'Validation Error';
                return response()->json(['errors' => $errors], 420);
            }
            
            $perPage = $request->input('per_page', 10);
            
            $slider=$this->slider->findorfail($request->slider_id);
            $products = $slider->products()->paginate($perPage);
            
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
