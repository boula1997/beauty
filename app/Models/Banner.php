<?php

namespace App\Models;

use App\Traits\MorphFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\MorphOne;


class Banner extends Model implements TranslatableContract
{
    use HasFactory, Translatable, MorphFile;

    protected $table = 'banners';
    public $translatedAttributes = [];
    protected $guarded = [];
    public $timestamps = true;

    public function getImageAttribute()
    {
        return $this->file ? asset($this->file->url) : asset('default.jpg');
    }

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }


    /**
     * get category relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getCategory()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

}
