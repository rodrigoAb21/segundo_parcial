<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DemandadoExpediente extends Model
{
    protected $table = 'dmd_exp';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'dmd_id',
        'expediente_id',
    ];
}
