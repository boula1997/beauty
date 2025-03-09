<?php

namespace App\Models;

use App\Traits\MorphFile;
use App\Traits\MorphFiles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;


class Feature extends Model implements TranslatableContract
{
    use HasFactory,MorphFile,MorphFiles,Translatable;
    protected $table = 'features';
    protected $guarded = [];
    public $translatedAttributes = ['title','subtitle','description'];
    public $timestamps = true;
    
    
    public function getImagesAttribute()
    {
        return  count($this->files)>0?$this->files:["default.jpg"];
    }
    
    public function getImageAttribute(){
        return  $this->file? asset($this->file->url): asset('default.jpg');
   }


   public function category(){ return $this->belongsTo(Category::class,'category_id'); }
}
