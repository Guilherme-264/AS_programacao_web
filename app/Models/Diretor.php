<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diretor extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'nascimento'
    ];
}
