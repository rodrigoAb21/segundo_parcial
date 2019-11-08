<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoFoja extends Model
{
    protected $table = 'tipo_foja';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
    ];
}
