<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function toggleFavorite(Request $request, $productId)
    {
        $user = Auth::user();
        $product = Product::where('id', $productId)->first();
        if($product){
            if ($user->favorites()->where('product_id', $productId)->exists()) {
                $user->favorites()->detach($productId);
                return response()->json(['message' => 'Removed from favorites'], 200);
            } else {
                $user->favorites()->attach($productId);
                return response()->json(['message' => 'Added to favorites'], 200);
            }
        }
        return response()->json([
            'status' => 401,
            'errors' => [
                'message' => "Product not found"
            ]
        ], 401);
    }

    public function getFavorites(Request $request)
    {
        $perPage = $request->input('per_page', 10);

        $products = Auth::user()->favorites()->latest()->paginate($perPage);

        $data = ProductResource::collection($products);

        $pagination = [
            'current_page' => $products->currentPage(),
            'per_page' => $products->perPage(),
            'last_page' => $data->lastPage(),
            'total_items' => $products->total(),
        ];

        return response()->json(['pagination' => $pagination, 'data' => $data], 200);
    }

}
