<?php

namespace App\Models;

use App\Traits\MorphFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\MorphOne;



class Subcategory extends Model implements TranslatableContract
{
    use HasFactory, Translatable, MorphFile;
    protected $table = 'subcategories';
    public $translatedAttributes = ['title'];
    protected $guarded = [];
    public $timestamps = true;

    public function getImageAttribute(){
        return  $this->file?asset($this->file->url): asset('default.jpg');
   }

   
   public function category()
   {
       return $this->belongsTo(Category::class, 'category_id');
   }

   public function products()
   {
       return $this->hasMany(Product::class);
   }
    
}