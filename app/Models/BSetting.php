<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BSetting extends Model
{
    use HasFactory;
    protected $fillable = ['key', 'value'];
    // Accessor to handle value as an array if stored as JSON
    public function getValueAttribute($value)
    {
        $decoded = json_decode($value, true);
        return is_array($decoded) ? $decoded : $value;
    }

    // Mutator to automatically encode arrays to JSON
    public function setValueAttribute($value)
    {
        $this->attributes['value'] = is_array($value) ? json_encode($value) : $value;
    }
}
