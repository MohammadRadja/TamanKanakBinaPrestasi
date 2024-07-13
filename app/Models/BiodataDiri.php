<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataDiri extends Model
{
    use HasFactory;

    protected $table = 'biodata_diri';
    public $timestamps = false;

    protected $fillable = [
        'pengguna_id',
        'nama_lengkap',
        'nama_panggilan',
        'jenis_kelamin',
        'tempat_tanggal_lahir',
        'agama',
        'anak_ke',
        'nama_ayah',
        'nama_ibu',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'no_hp',
        'alamat',
    ];

    public function biodataDiri()
    {
        return $this->hasOne(BiodataDiri::class, 'pengguna_id');
    }


    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'pengguna_id');
    }
}
