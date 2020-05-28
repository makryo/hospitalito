<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pacientes extends Model
{
    protected $fillable = ['id','n_carnet', 'dpi', 'nombres', 'apellidos', 'fecha_nac', 'localidad', 'genero'];

    public function asignacion()
    {
    	return $this->hasMany('App\asignacion');
    }

    public function historial()
    {
    	return $this->hasMany('App\historial');
    }
}
