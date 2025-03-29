<?php

namespace App\Models;

use App\Traits\MorphFile;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Laravel\Passport\HasApiTokens;
use App\Notifications\ResetPassword;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,MorphFile;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fullname',
        'email',
        'password',
        'phone',
        'cart',
        'balance',
        'uuid',
        'fcm_token',
        'otp_code',
        'is_verified',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sendPasswordResetNotification($token)
{
    $this->notify(new ResetPassword($token));
}


    public function getImageAttribute(){
        return  $this->file?asset($this->file->url): asset('default.jpg');
   }
    public function orders(){
        return  $this->hasMany(Order::class);
   }

    public function transactions(){
        return  $this->hasMany(Transaction::class);
    }

   public function addresses(){
    return  $this->hasMany(Address::class);
    }

    /**
     * get favourite products
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function favorites()
    {
        return $this->belongsToMany(Product::class, 'favorites', 'user_id', 'product_id');
    }



}