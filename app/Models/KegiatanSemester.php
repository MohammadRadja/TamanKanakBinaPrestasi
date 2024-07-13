<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KegiatanSemester extends Model
{
    protected $table = 'kegiatan_semester';
    protected $fillable = ['tanggal', 'kegiatan', 'keterangan'];
    public $timestamps = false;
}
