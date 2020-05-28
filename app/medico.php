<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medico extends Model
{
    protected $fillable = ['id','cod_medic', 'nombres', 'apellidos', 'especialidad'];

    public function consulta()
    {
    	return $this->hasMany('App\consulta');
    }
}
