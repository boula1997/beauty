<?php

namespace App\Models;

use App\Traits\MorphFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;



class Color extends Model 
{
    use HasFactory, MorphFile;
    protected $table = 'colors';
    protected $guarded = [];
    public $timestamps = true;

    public function getImageAttribute(){
        return  $this->file?asset($this->file->url): asset('default.jpg');
   }

   public function store(){
    return $this->belongsTo(Store::class,'store_id');
    }
    
}