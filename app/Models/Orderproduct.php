<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
class Orderproduct extends Model
{
    use HasFactory;

    protected $table = 'orderproducts';
    protected $guarded = [];
    public $translatedAttributes = ['title'];
    public $timestamps = true;
   

    public function file(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable');
    }

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
    public function order(){
        return $this->belongsTo(Order::class,'order_id');
    }

    public function variation(){
        return $this->belongsTo(ProductVariation::class,'variation_id');
    }


    
}