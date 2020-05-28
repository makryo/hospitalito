<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class consultas extends Model
{
    protected $fillable = ['id', 'pacientes_id', 'diagnostico_id', 'medico_id'];

    public function pacientes()
    {
    	return $this->belongsTo('App\pacientes');
    }

    public function diagnostico()
    {
    	return $this->belongsTo('App\diagnostico');
    }

    public function medico()
    {
    	return $this->belongsTo('App\medico');
    }
}
