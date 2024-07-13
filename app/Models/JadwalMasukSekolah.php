<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalMasukSekolah extends Model
{
    protected $table = 'jadwal_masuk_sekolah';

    protected $fillable = [
        'hari', 'kegiatan',
    ];
}
