<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class historial extends Model
{
    protected $fillable = ['id','pacientes_id', 'planta_id', 'planta_cama_id', 'fecha_ingreso'];

    public function pacientes()
    {
    	return $this->hasMany('App\pacientes');
    }

    public function planta()
    {
    	return $this->hasMany('App\planta');
    }
}
