<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
        'nama', 'tempat_tanggal_lahir', 'alamat', 'pengguna_id'
    ];

    public $timestamps = false; // Menonaktifkan timestamps

    // Relasi dengan model Pengguna
    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'pengguna_id');
    }
}
