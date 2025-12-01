<?php

namespace App\Models;

use App\Traits\MorphFile;
use App\Traits\MorphFiles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Support\Facades\DB;
class Product extends Model implements TranslatableContract
{
    use HasFactory, Translatable, MorphFile,MorphFiles;
    protected $table = 'products';
    public $translatedAttributes = ['title','description',];
    protected $guarded = [];
    public $timestamps = true;


    public function getPriceAttribute($value)
    {
        $originalPrice = $value;

        if ($this->discount && $this->discount > 0) {
            return $originalPrice - $this->discount;
        }

        
        return $originalPrice;
    }


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }

    public function productVariations()
    {
        return $this->hasMany(ProductVariation::class, 'product_id');
    }

    public function productOffer()
    {
        return $this->belongsTo(ProductOffer::class, 'productOffer_id');
    }


    public function getImageAttribute(){
        return  $this->file? asset($this->file->url): asset('default.jpg');
   }


   public function getImagesAttribute()
   {
       return  count($this->files)>0?$this->files->pluck('url'):["default.jpg"];
   }



   public function getVariationAttribute()
   {
       // Find the first variation with quantity > 0
       $variation = $this->productVariations->first();

       // Return the price of the found variation, or null if no such variation exists
       return $variation;
   }

   public function getSizesWithColors()
{
    return $this->productVariations
        ->groupBy('size_id')
        ->map(function ($variations, $sizeId) {
            $size = $variations->first()->size;

            return [
                'id'     => $size->id,
                'title'  => $size->title,
                'colors' => $variations->map(function ($variation) {
                    return [
                        'id'       => $variation->color->id,
                        'hexCode'    => $variation->color->hexCode,
                        'quantity' => $variation->quantity,
                    ];
                })->values(),
            ];
        })
        ->values();
}



   public function scopeSearch($query)
   {
       $query->when(request()->title, function ($q) {
            return $q->whereHas('translations', function ($q2) {
                 $q2->where('title', 'like', '%' . request()->title . '%');
            });
            })->when(request()->category_id, function ($q) {
                return $q->where('category_id', request()->category_id);
            })->when(request()->sku, function ($q) {
                return $q->where('sku', request()->sku);
            })->when(request()->quantity_alert, function ($q) {
                return $q->where('quantity_alert', request()->quantity_alert);
            })->when(request()->discount_percentage, function ($q) {
                return $q->where('discount_percentage', request()->discount_percentage);
            })->when(request()->bonus_count, function ($q) {
                return $q->where('bonus_count', request()->bonus_count);
            });
    }

    /**
     * to get favourite relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function favoritedBy()
    {
        return $this->belongsToMany(User::class, 'favorites');
    }

    /**
     * to check if the product is favourite by specific user
     *
     * @param $userId
     * @return bool
     */
    public function isFavoritedByUser($userId)
    {
        return $this->favoritedBy()->where('user_id', $userId)->exists();
    }


}