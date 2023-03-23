<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeveloperKPI extends Model
{
    use HasFactory;

    protected $with = ['developer', 'kpi'];
    
    protected $fillable = [
        'developer_id',
        'kpi_id',
        'tgl_penilaian',
        'realisasi'
    ];

    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }

    public function kpi()
    {
        return $this->belongsTo(KPI::class);
    }
}
