<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferTranslation extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getDescriptionAttribute($value)
    {
        return strip_tags($value);
    }
}