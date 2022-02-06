<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class animais extends Model
{
    protected $fillable = [
        'nome',
        'idade',
        'raça',
        'dono',
    ];
}
