<?php

namespace App\Models;

use App\Traits\MorphFile;
use App\Traits\MorphFiles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Support\Facades\DB;
class ItemRequest extends Model 
{
    use HasFactory, MorphFile,MorphFiles;
    protected $table = 'itemRequests';
    protected $guarded = [];
    public $timestamps = true;

    

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function reviewer(){
        return $this->belongsTo(Admin::class,'reviewer_id');
    }

  
}
