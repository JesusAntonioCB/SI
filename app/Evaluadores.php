<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluadores extends Model
{
    protected $table = 'evaluadores';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
    	'nombre',
    	'ap_paterno',
    	'ap_materno',
    	'especialidad',
    	'estado'
    ];
}
