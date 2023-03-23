<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;
        
    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'position',
        'status'
    ];

    public function assignProject()
    {
        return $this->hasMany(AssignProject::class);
    }

}
