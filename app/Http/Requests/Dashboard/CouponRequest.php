<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CouponRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $optional = [];
        foreach (['max_discount', 'min_order_amount', 'usage_limit', 'per_user_limit'] as $field) {
            $optional[$field] = $this->filled($field) ? $this->input($field) : null;
        }

        $this->merge($optional + [
            'code' => strtoupper(trim((string) $this->code)),
            'is_active' => $this->boolean('is_active'),
        ]);
    }

    public function rules()
    {
        $coupon = $this->route('coupon');

        return [
            'code' => ['required', 'string', 'max:100', 'alpha_dash', Rule::unique('coupons', 'code')->ignore($coupon?->id)],
            'percentage' => 'required|numeric|min:1|max:100',
            'max_discount' => 'nullable|numeric|min:0',
            'min_order_amount' => 'nullable|numeric|min:0',
            'usage_limit' => 'nullable|integer|min:1',
            'per_user_limit' => 'nullable|integer|min:1',
            'starts_at' => 'required|date',
            'expires_at' => 'required|date|after:starts_at',
            'is_active' => 'boolean',
        ];
    }
}
