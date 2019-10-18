<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salones extends Model
{
    protected $table = 'salones';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
    	'edificio',
    	'descripcion',
    	'estado'
    ];
}
