<?php

namespace App\Models;

use App\Traits\MorphFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Http\UploadedFile;




class ProductVariation extends Model implements TranslatableContract
{
    use HasFactory, Translatable, MorphFile;
    protected $table = 'productVariations';
    public $translatedAttributes = [];
    protected $guarded = [];
    public $timestamps = true;

    public function getImageAttribute(){

        return  $this->file?asset($this->file->url): asset('default.jpg');
    }
    public function getOfferPriceAttribute()
    {
        $offer = $this->product->productOffer;
    
        // Check if an offer exists and if it's within the valid date range
        if ($offer && now()->between($offer->startDate, $offer->endDate)) {
            return number_format($this->price - ($this->price * $offer->percentage / 100), 2, '.', '');
        }
    
        return number_format($this->price, 2, '.', '');
    }

    public function getPriceAttribute($value)
{
    return number_format($value, 2, '.', '');
}
    
    

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    
    public function size()
    {
        return $this->belongsTo(Size::class, 'size_id');
    }

    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id');
    }



    
}