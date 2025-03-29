<?php

namespace App\Models;

use App\Traits\MorphFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\MorphOne;



class Store extends Model implements TranslatableContract
{
    use HasFactory, Translatable, MorphFile;
    protected $table = 'stores';
    public $translatedAttributes = ['title','description'];
    protected $guarded = [];
    public $timestamps = true;

    public function getImageAttribute(){
        return  $this->file?asset($this->file->url): asset('default.jpg');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'storeCategories');
    }

    public function brands()
    {
        return $this->belongsToMany(Brand::class, 'storeBrands');
    }

    public function sizes()
    {
        return $this->hasMany(Size::class);
    }

    public function colors()
    {
        return $this->hasMany(Color::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
    
}