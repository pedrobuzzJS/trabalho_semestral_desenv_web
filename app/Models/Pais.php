<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pais extends Model
{
    use HasFactory;

    public $table = 'tbpais';

    protected $fillable = [
        'id',
        'sigla',
        'nome',
    ];

    public function estado() {
        return $this->hasMany(Estado::class, 'cidade_id', 'id');
    }


    public function listaPais() {
        DB::table('tbpais')->get()->except('created_at', 'updated_at');
    }
}
