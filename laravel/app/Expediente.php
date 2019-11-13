<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    protected $table = 'expediente';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'nurej',
        'web_id',
        'fecha_recepcion',
        'descripcion',
        'materia',
        'procedimiento',
        'nro_fojas',
        'juez_id',
        'juzgado_id',
        'tipo_proceso_id',
    ];
}
