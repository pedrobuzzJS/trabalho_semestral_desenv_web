<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Estado extends Model
{
    use HasFactory;

    public $table = 'tbestado';

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

    public function getAllEstado() {
        DB::table('tbpais')->get()->except('created_at', 'updated_at');
    }
}
