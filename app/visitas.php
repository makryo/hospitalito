<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visitas extends Model
{
    protected $fillable = ['id','n_token', 'visitante', 'rango', 'validez', 'pacientes_id', 'planta_cama_id', 'planta_id'];

    public function asignacion()
    {
    	return $this->belongsTo('App\planta_cama');
    }
}
