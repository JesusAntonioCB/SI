<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    protected $table = 'proyectos';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
    	'idgrupo',
    	'nombre_proyecto',
    	'idevaluador'
    ];
}
