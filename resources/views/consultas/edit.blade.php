<?php  
use App\pacientes;
use App\diagnostico;
use App\medico;


$pac = Pacientes::all();
$diagnos = Diagnostico::all();
$medic = Medico::all();

?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Editar registro</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Actualizar datos</h1>
                    <div class="container">
                    
                        <form method="post" action="{{ route('consultas.update', $Edita->id) }}">

                            @csrf
                            @method('PATCH')
                            {{ csrf_field() }}
                            <br>
                            <label>Nombre del paciente</label>
                            <div class="input-group mb-3">
                                <select name="pacientes_id" value="{{ $Edita->pacientes_id }}">
                                    @foreach($pac as $Lista)
                                        <option value="{{ $Lista->id }}">
                                            {{ $Lista->nombres }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            
                            <label>Diagnostico</label>
                            <div class="input-group mb-3">
                                <select name="diagnostico_id" value="{{ $Edita->diagnostico_id}}">
                                    @foreach($diagnos as $Lista)
                                        <option value="{{ $Lista->id }}">
                                            {{ $Lista->t_diagnostico }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <label>Nombre del medico</label>
                            <div class="input-group mb-3">
                                <select name="medico_id" value="{{ $Edita->medico_id }}">
                                    @foreach($medic as $Lista)
                                        <option value="{{ $Lista->id }}">
                                            {{ $Lista->nombres }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <br>
                            <input type="submit" value="Guardar" class="btn btn-success">
                        </form>

                      
                
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection