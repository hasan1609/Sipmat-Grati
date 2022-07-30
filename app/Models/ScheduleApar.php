<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleApar extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'kode_apar',
        'tw',
        'tahun',
        'tanggal_cek',
        'is_status',
        'shift',
        'tabung',
        'pin',
        'segel',
        'tuas',
        'pressure',
        'selang',
        'nozzle',
        'rambu',
        'handle',
        'kapasitas',
        'gantungan',
        'houskeeping',
        'keterangan_tambahan',
        'tanggal_pemeriksa'
    ];

    public function apar()
    {
        return $this->belongsTo(Apar::class, 'kode_apar', 'kode');
    }
}
