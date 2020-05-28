<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diagnostico extends Model
{
    protected $fillable = ['id','t_diagnostico', 'sintomas', 'fech_diagn', 'descripcion'];

    public function consulta()
    {
    	return $this->hasMany('App\consultas');
    }
}
