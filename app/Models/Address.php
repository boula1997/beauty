<?php

namespace App\Models;

use App\Traits\MorphFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\MorphOne;



class Address extends Model 
{
    use HasFactory;
    protected $table = 'addresses';
    protected $guarded = [];
    public $timestamps = true;

    public function getImageAttribute(){
        return  $this->file?asset($this->file->url): asset('default.jpg');
   }
    
}