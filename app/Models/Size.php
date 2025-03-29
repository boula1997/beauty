<?php

namespace App\Models;

use App\Traits\MorphFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\MorphOne;



class Size extends Model implements TranslatableContract
{
    use HasFactory, Translatable, MorphFile;
    protected $table = 'sizes';
    public $translatedAttributes = ['title'];
    protected $guarded = [];
    public $timestamps = true;

    public function getImageAttribute(){
        return  $this->file?asset($this->file->url): asset('default.jpg');
   }
   
   public function store(){
    return $this->belongsTo(Store::class,'store_id');
    }
    
}
