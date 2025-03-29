<?php

namespace App\Models;

use App\Traits\MorphFile;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Laravel\Passport\HasApiTokens;

class Admin extends Authenticatable  
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, MorphFile;
    
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'verified',
        'password',
        'type',
        'category_trainer_id',
        'trainer_level',
        'qualification',
        'club',
        'gender',
        'country_id',
        'city_id',
        'qualification_description',
        'coach_experience',
        'atheletic_highlights',
        'session_plan',
        'intro',
        'hourly_rate',
        'membership_number',
        'experience_at_club',
        'category_trainer_id',
        'gender',
        'latitude',
        'longitude',

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

    public function getImageAttribute()
    {
        return  $this->file?asset($this->file->url): asset('default.jpg');
    }



        /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */

    public function scopeSearch($query)
    {
        $query->when(request()->name, function ($q) {
             return $q->where('name', request()->name);
         })->when(request()->trainer_level, function ($q) {
            return $q->where('trainer_level', request()->trainer_level);
        })->when(request()->qualification, function ($q) {
            return $q->where('qualification', request()->qualification);
        })->when(request()->club, function ($q) {
            return $q->where('club', request()->club);
        })->when(request()->gender, function ($q) {
            return $q->where('gender', request()->gender);
        })->when(request()->country_id, function ($q) {
            return $q->where('country_id', request()->country_id);
        })->when(request()->city_id, function ($q) {
            return $q->where('city_id', request()->city_id);
        })->when(request()->type, function ($q) {
            return $q->where('type', request()->type);
        });
        $query->when(request()->sort_by, function ($q) {
            $sortBy = request()->sort_by;
            switch ($sortBy) {
                case 'alphabetically':
                    return $q->orderBy('name', 'asc');
                // case 'most_viewed':
                //     return $q->orderBy('views', 'desc'); // Assuming you have a 'views' column
                // case 'most_popular':
                //     return $q->orderBy('popularity', 'desc'); // Assuming you have a 'popularity' column
                case 'experience':
                    return $q->orderBy('experience_at_club', 'desc'); // Assuming you have an 'experience' column
                default:
                    return $q; // No sorting if the sort_by parameter is not recognized
            }
        });
    }
}
