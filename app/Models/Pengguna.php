<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'pengguna';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'nama_lengkap',
        'username',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
    ];
}
