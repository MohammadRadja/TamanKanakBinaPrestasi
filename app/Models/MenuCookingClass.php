<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuCookingClass extends Model
{
    protected $table = 'menu_cooking_class';
    protected $fillable = ['tanggal', 'menu'];
    public $timestamps = false;
}
