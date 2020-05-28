<?php  
use App\pacientes;
use App\planta_cama;
use App\planta;


$pac = Pacientes::all();
$pc = Planta_cama::all();
$plant = Planta::all();

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
                    
                        <form method="post" action="{{ route('asignacion.update', $Edita->id) }}">

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
                            <label>Numero de cama</label>
                            <div class="input-group mb-3">
                                <select name="planta_cama_id" value="{{ $Edita->planta_cama_id }}">
                                    @foreach($pc as $Lista)
                                        <option value="{{ $Lista->id }}">
                                            {{ $Lista->no_cama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <label>Numero de planta</label>
                            <div class="input-group mb-3">
                                <select name="planta_id" value="{{ $Edita->planta_id }}">
                                    @foreach($plant as $Lista)
                                        <option value="{{ $Lista->id }}">
                                            {{ $Lista->no_planta }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <label>fecha de ingreso</label>
                            <div class="input-group mb-3">
                                <input type="date" class="form-control" name="fecha_ingreso" value="{{ $Edita->fecha_ingreso }}" required>
                            </div>
                            <br>
                            <label>Alta</label>
                            <div class="input-group mb-3">
                                <select name="alta" value="{{ $Edita->alta }}">
                                    <option value="1">SI</option>
                                    <option value="0">NO</option>
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