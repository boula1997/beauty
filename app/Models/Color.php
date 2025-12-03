<?php

namespace App\Models;

use App\Traits\MorphFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


class Color extends Model implements TranslatableContract
{
    use HasFactory, MorphFile,Translatable;
    protected $table = 'colors';
    public $translatedAttributes = ['title',];

    protected $guarded = [];
    public $timestamps = true;

    public function getImageAttribute(){
        return  $this->file?asset($this->file->url): asset('default.jpg');
   }

   public function store(){
    return $this->belongsTo(Store::class,'store_id');
    }
    
}