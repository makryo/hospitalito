<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class planta extends Model
{
    protected $fillable = ['id','no_planta', 'nombre', 'n_camas'];

    public function asignacion()
    {
    	return $this->hasMany('App\planta_cama');
    }

    public function historial()
    {
    	return $this->hasMany('App\historial');
    }
}
