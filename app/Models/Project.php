<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'kick_off',
        'end_project',
        'status'
    ];

    public function assignProject()
    {
        return $this->hasMany(AssignProject::class);
    }

    public function objective()
    {
        return $this->hasMany(objective::class);
    }

}
