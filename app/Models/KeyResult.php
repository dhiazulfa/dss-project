<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeyResult extends Model
{
    use HasFactory;

    protected $table = 'key_results';

    protected $guarded = ['id'];

    protected $with = ['objective'];
    
    protected $fillable = [
        'objective_id',
        'title',
        'description',
        'target',
        'actual',
        'progress'
    ];

    public function objective()
    {
        return $this->belongsTo(Objective::class);
    }
}
