<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foja extends Model
{
    protected $table = 'foja';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'descripcion',
        'fecha',
        'src',
        'contenido',
        'tipo_foja_id',
        'expediente_id',
    ];
}
