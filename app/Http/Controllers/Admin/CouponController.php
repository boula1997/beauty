<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\CouponRequest;
use App\Models\Coupon;
use Exception;

class CouponController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:coupon-list|coupon-create|coupon-edit|coupon-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:coupon-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:coupon-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:coupon-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $coupons = Coupon::latest()->paginate(20);
        return view('admin.crud.coupons.index', compact('coupons'));
    }

    public function create()
    {
        return view('admin.crud.coupons.create');
    }

    public function store(CouponRequest $request)
    {
        try {
            Coupon::create($request->validated());
            return redirect()->route('coupons.index')->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withInput()->with(['error' => __('general.something_wrong')]);
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
            $coupon->update($request->validated());
            return redirect()->route('coupons.index')->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withInput()->with(['error' => __('general.something_wrong')]);
        }
    }

    public function destroy(Coupon $coupon)
    {
        try {
            $coupon->products()->detach();
            $coupon->delete();
            return redirect()->route('coupons.index')->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
