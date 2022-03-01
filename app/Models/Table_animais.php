<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table_animais extends Model
{
    protected $fillable = [
        'nome',
        'idade',
        'peso',
        'raça',
       'especie',

    ];
}
