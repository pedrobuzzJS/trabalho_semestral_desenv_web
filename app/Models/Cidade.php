<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{

    protected $fillable = [
        'id',
        'estado_id',
        'sigla',
        'nome',
    ];

    public function estado() {
        return $this->belongsTo(Estado::class, 'pais_id', 'id');
    }

    use HasFactory;
}
