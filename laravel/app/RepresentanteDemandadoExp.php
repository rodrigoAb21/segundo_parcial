<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepresentanteDemandadoExp extends Model
{
    protected $table = 'rep_dmd_exp';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'rep_dmd_id',
        'expediente_id',
    ];
}
