<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleKebisingan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kebisingan()
    {
        return $this->belongsTo(Kebisingan::class,'kode_kebisingan','kode');
    }
}