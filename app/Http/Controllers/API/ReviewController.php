<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReviewResource;
use App\Http\Requests\Dashboard\ReviewRequest;
use App\Models\Orderproduct;
use App\Models\Review;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    private $review;
    public function __construct(Review $review)
    {
        $this->middleware('auth:api', ['except' => ['index', 'show']]);

        $this->review = $review;
    }

    public function index()
    {
        try {
            $data['reviews'] = ReviewResource::collection($this->review->get());
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['review'] = new ReviewResource($this->review->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function store(ReviewRequest $request)
    {

        try {
            $data=$request->all();
            // dd(Auth::user()->id);
            $data['user_id']=Auth::user()->id;
            $review = Review::create($data);
            return successResponse($review);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function checkReview($id)
    {

        try {
            $userId = Auth::user()->id;

            // Check if the user has purchased the product
            $purchaseExists = Orderproduct::where('product_id', $id)
                    ->whereHas('order', function ($query) use ($userId) {
                        $query->where('user_id', $userId);
                    })
                ->exists();

                // dd($purchaseExists);
    
            if ($purchaseExists) {
                // If the purchase exists, return a success response
                return response()->json([
                    'status' => 'success',
                    'message' => 'yes',
                    'data' => true
                ]);
            } else {
                // If no purchase is found, return a response indicating the user has not purchased the product
                return response()->json([
                    'status' => 'error',
                    'message' => 'no',
                    'data' => false
                ]);
            }
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}
