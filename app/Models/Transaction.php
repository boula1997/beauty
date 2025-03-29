<?php

namespace App\Models;

use App\Traits\MorphFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\MorphOne;



class Transaction extends Model 
{
    use HasFactory;
    protected $table = 'transactions';
    protected $guarded = [];
    public $timestamps = true;


    public function order(){
        return $this->belongsTo(Order::class,'order_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    
    
}