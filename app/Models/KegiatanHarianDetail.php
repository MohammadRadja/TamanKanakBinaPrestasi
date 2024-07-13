<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KegiatanHarianDetail extends Model
{
    protected $table = 'kegiatan_harian_detail';
    protected $fillable = ['pukul', 'kegiatan', 'keterangan'];
    public $timestamps = false;
}
