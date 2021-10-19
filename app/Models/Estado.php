<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{

    protected $fillable = [
        'id',
        'pais_id',
        'sigla',
        'nome',
    ];

    public function pais() {
        return $this->belongsTo(Pais::class, 'pais_id', 'id');
    }

    public function cidade() {
        return $this->hasMany(Cidade::class, 'cidade_id', 'id');
    }

    use HasFactory;
}
