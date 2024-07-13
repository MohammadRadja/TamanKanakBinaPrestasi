<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KegiatanHarian extends Model
{
    protected $table = 'kegiatan_harian';
    protected $fillable = ['hari', 'kegiatan'];
    public $timestamps = false;
}
