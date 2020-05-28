<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asignacion extends Model
{
    protected $fillable = ['id','pacientes_id', 'planta_cama_id', 'planta_id', 'fecha_ingreso', 'alta'];

    public function Pacientes()
    {
    	return $this->belongsTo('App\pacientes');
    }

    public function PlantaCama()
    {
    	return $this->belongsTo('App\planta_cama');
    }

    public function Visitas()
    {
    	return $this->hasMany('App\visitas');
    }

    public function Consultas()
    {
    	return $this->hasMany('App\consultas');
    }
}
