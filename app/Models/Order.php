<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $guarded = [];
    public $timestamps = true;

    public function orderproducts(){
        return $this->hasMany(Orderproduct::class);
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function address(){
        return $this->belongsTo(Address::class,'address_id');
    }
    
}