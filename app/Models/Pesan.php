<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $table = 'pesan';
    public $timestamps = false;
    protected $fillable = ['pengguna_id', 'isi_pesan', 'waktu_kirim', 'parent_id'];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }

    public function replies()
    {
        return $this->hasMany(Pesan::class, 'parent_id');
    }
    public function parent()
    {
        return $this->belongsTo(Pesan::class, 'parent_id');
    }
}
