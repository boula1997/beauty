<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\CouponRequest;
use App\Models\Coupon;
use Exception;
use Illuminate\Support\Facades\Log;

class CouponController extends Controller
{
    private const FIELDS = [
        'code',
        'percentage',
        'max_discount',
        'min_order_amount',
        'usage_limit',
        'per_user_limit',
        'starts_at',
        'expires_at',
        'is_active',
    ];

    public function __construct()
    {
        $this->middleware('permission:coupon-list|coupon-create|coupon-edit|coupon-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:coupon-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:coupon-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:coupon-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $coupons = Coupon::latest()->paginate(10);

        return view('admin.crud.coupons.index', compact('coupons'));
    }

    public function create()
    {
        return view('admin.crud.coupons.create');
    }

    public function store(CouponRequest $request)
    {
        try {
            Coupon::create($request->only(self::FIELDS));

            return redirect()->route('coupons.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')])->withInput();
        }
    }

    public function show(Coupon $coupon)
    {
        return view('admin.crud.coupons.show', compact('coupon'));
    }

    public function edit(Coupon $coupon)
    {
        return view('admin.crud.coupons.edit', compact('coupon'));
    }

    public function update(CouponRequest $request, Coupon $coupon)
    {
        try {
            $coupon->update($request->only(self::FIELDS));

            return redirect()->route('coupons.index')
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')])->withInput();
        }
    }

    public function destroy(Coupon $coupon)
    {
        try {
            $coupon->delete();

            return redirect()->route('coupons.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
