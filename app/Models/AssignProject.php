<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignProject extends Model
{
    use HasFactory;

    protected $table = 'assign_projects';

    protected $guarded = ['id'];
    protected $with = ['project', 'developer'];

    protected $fillable = [
        'developer_id',
        'project_id'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }
}
