<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'percentage',
        'max_discount',
        'min_order_amount',
        'usage_limit',
        'used_count',
        'per_user_limit',
        'starts_at',
        'expires_at',
        'is_active',
    ];

    protected $casts = [
        'percentage' => 'float',
        'max_discount' => 'float',
        'min_order_amount' => 'float',
        'usage_limit' => 'integer',
        'used_count' => 'integer',
        'per_user_limit' => 'integer',
        'is_active' => 'boolean',
        'starts_at' => 'datetime',
        'expires_at' => 'datetime',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    // Coupon -> Products (Many to Many)
    public function products()
    {
        return $this->belongsToMany(Product::class, 'coupon_product');
    }

    // Coupon -> Orders (via pivot table)
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_coupons')
            ->withPivot('discount_amount')
            ->withTimestamps();
    }

    // Coupon -> Users usage tracking
    public function users()
    {
        return $this->belongsToMany(User::class, 'coupon_user')
            ->withPivot('usage_count')
            ->withTimestamps();
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Methods (VERY USEFUL)
    |--------------------------------------------------------------------------
    */

    public function isValid($total = null, $userId = null)
    {
        if (!$this->is_active) {
            return false;
        }

        if ($this->starts_at && now()->lt($this->starts_at)) {
            return false;
        }

        if ($this->expires_at && now()->gt($this->expires_at)) {
            return false;
        }

        if ($this->usage_limit && $this->used_count >= $this->usage_limit) {
            return false;
        }

        if ($total && $this->min_order_amount && $total < $this->min_order_amount) {
            return false;
        }

        if ($userId && $this->per_user_limit) {
            $usage = $this->users()
                ->where('user_id', $userId)
                ->first()?->pivot?->usage_count ?? 0;

            if ($usage >= $this->per_user_limit) {
                return false;
            }
        }

        return true;
    }

    public function calculateDiscount($total)
    {
        $discount = ($total * $this->percentage) / 100;

        if ($this->max_discount && $discount > $this->max_discount) {
            $discount = $this->max_discount;
        }

        return $discount;
    }
}