<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChooseUsTranslation extends Model
{
    use HasFactory;
    protected $table = 'chooseUs_translations';
    protected $guarded = [];

    public function getDescriptionAttribute($value)
    {
        return strip_tags($value);
    }
}