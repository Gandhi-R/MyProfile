<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    // Buka kunci biar bisa diisi otomatis
    protected $fillable = ['name', 'icon'];
}