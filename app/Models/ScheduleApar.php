<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleApar extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['kode_apar', 'tw', 'tahun', 'tanggal_cek'];

    public function apar()
    {
        return $this->hasOne(Apar::class, 'kode', 'kode_apar');
    }
}
