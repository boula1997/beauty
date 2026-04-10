<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HyperpayController;
use App\Http\Requests\API\OrderRequest;
use App\Http\Resources\OrderDetailsResource;
use App\Http\Resources\OrderProductResource;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Models\Coupon;
use App\Models\Orderproduct;
use App\Models\ProductVariation;
use App\Models\Product;
use App\Models\Shipping;
use App\Models\Transaction;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Traits\HandlesOrders;
use App\Traits\FCMNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;



class CouponController extends Controller
{
    use HandlesOrders;
    use FCMNotification;

    private $order;
    private $orderproduct;


    public function __construct(Order $order, Orderproduct $orderproduct)
    {
        $this->middleware('auth:api', ['except' => ['apply','coupons']]);
        $this->order = $order;
        $this->orderproduct = $orderproduct;
    }



    public function apply(Request $request)
    {
        $request->validate([
            'coupon_code' => 'required|string',
            'total' => 'required|numeric|min:0'
        ]);

        $coupon = Coupon::where('code', $request->coupon_code)
            ->where('is_active', 1)
            ->first();

        if (!$coupon) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid coupon code'
            ], 400);
        }

        // Expiry check
        if ($coupon->expires_at && now()->gt($coupon->expires_at)) {
            return response()->json([
                'success' => false,
                'message' => 'Coupon expired'
            ], 400);
        }

        // Usage limit
        if ($coupon->usage_limit && $coupon->used_count >= $coupon->usage_limit) {
            return response()->json([
                'success' => false,
                'message' => 'Coupon usage limit reached'
            ], 400);
        }

        // Min order check
        if ($coupon->min_order_amount && $request->total < $coupon->min_order_amount) {
            return response()->json([
                'success' => false,
                'message' => 'Minimum order amount not reached'
            ], 400);
        }

        // Per-user limit (if logged in)
        if (auth()->check() && $coupon->per_user_limit) {
            $usage = DB::table('coupon_user')
                ->where('coupon_id', $coupon->id)
                ->where('user_id', auth()->id())
                ->value('usage_count');

            if ($usage && $usage >= $coupon->per_user_limit) {
                return response()->json([
                    'success' => false,
                    'message' => 'You already used this coupon maximum times'
                ], 400);
            }
        }

        // Calculate discount
        $discount = ($request->total * $coupon->percentage) / 100;

        if ($coupon->max_discount && $discount > $coupon->max_discount) {
            $discount = $coupon->max_discount;
        }

        $finalTotal = max(0, $request->total - $discount);

        return response()->json([
            'success' => true,
            'message' => 'Coupon applied successfully',
            'data' => [
                'coupon_id' => $coupon->id,
                'coupon_code' => $coupon->code,
                'percentage' => $coupon->percentage,
                'discount' => round($discount, 2),
                'final_total' => round($finalTotal, 2),
            ]
        ]);
    }


    public function coupons()
    {
        try {
            $coupons = Coupon::where('is_active', 1)
                ->where('expires_at', '>=', now())
                ->where('starts_at', '<=', now())
                ->get();

            return response()->json([
                'success' => true,
                'message' => 'Coupons fetched successfully',
                'data' => $coupons
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch coupons',
                'error' => $e->getMessage()
            ], 500);
        }
    }


}