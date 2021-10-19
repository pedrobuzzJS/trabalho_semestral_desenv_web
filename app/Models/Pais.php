<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $fillable = [
        'id',
        'sigla',
        'nome',
    ];

    public function estado() {
        return $this->hasMany(Estado::class, 'cidade_id', 'id');
    }

    use HasFactory;
}
