<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuSehatPOMG extends Model
{
    protected $table = 'menu_sehat_pomg';
    protected $fillable = ['tanggal'];
    public $timestamps = false;
}
