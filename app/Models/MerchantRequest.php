<?php

namespace App\Models;

use App\Traits\MorphFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Notifications\Notifiable;



class MerchantRequest extends Model 
{
    use HasFactory, MorphFile,Notifiable;
    protected $table = 'merchantRequests';
    protected $guarded = [];
    public $timestamps = true;

    
}