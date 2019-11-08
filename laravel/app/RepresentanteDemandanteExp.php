<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepresentanteDemandanteExp extends Model
{
    protected $table = 'rep_dmt_exp';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'rep_dmt_id',
        'expediente_id',
    ];
}
