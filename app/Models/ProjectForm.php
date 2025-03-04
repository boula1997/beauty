<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectForm extends Model
{
    use HasFactory;
    protected $table = 'projectForms';
    protected $guarded = [];
    public $timestamps = true;

    public function project()
    {
        return $this->belongsTo(Project::class,'project_id');
    }

    
}
