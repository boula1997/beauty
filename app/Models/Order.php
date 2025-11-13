<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\MorphFile;


class Order extends Model
{
    use HasFactory,MorphFile;
    protected $table = 'orders';
    protected $guarded = [];
    public $timestamps = true;

    public function getImageAttribute(){
        return  $this->file? asset($this->file->url): asset('default.jpg');
    }

    public function orderproducts(){
        return $this->hasMany(Orderproduct::class);
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    
}