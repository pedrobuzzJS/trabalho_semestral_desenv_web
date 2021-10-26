<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cidade extends Model
{

    public $table = 'tbcidade';

    protected $fillable = [
        'id',
        'estado_id',
        'sigla',
        'nome',
    ];

    public function estado() {
        return $this->belongsTo(Estado::class, 'pais_id', 'id');
    }

    public function listaCidade() {
        DB::table('tbcidade')->get()->except('created_at', 'updated_at');
    }

    use HasFactory;
}
