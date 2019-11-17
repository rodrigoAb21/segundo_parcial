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
        'estado',
        'nro_fojas',
        'juzgado_id',
        'tipo_proceso_id',
        'juez_id',
        'dmt_id',
        'dmd_id',
        'rep_dmt_id',
        'rep_dmd_id',
    ];

    public function tipoProceso()
    {
        return $this->belongsTo('App\TipoProceso', 'tipo_proceso_id', 'id');
    }
}
