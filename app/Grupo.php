<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupos';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
    	'grupo',
    	'turno',
    	'idproyecto'
    ];
}
