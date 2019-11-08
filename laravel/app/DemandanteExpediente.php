<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DemandanteExpediente extends Model
{
    protected $table = 'dmt_exp';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'dmt_id',
        'expediente_id',
    ];
}
