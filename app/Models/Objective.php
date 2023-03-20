<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['user', 'project'];

    protected $fillable = [
        'user_id',
        'project_id',
        'title',
        'description',
        'start_date',
        'end_date',
        'progress',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    } 

    public function project()
    {
        return $this->hasMany(Project::class);
    }

}
