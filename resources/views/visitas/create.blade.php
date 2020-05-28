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
                <div class="card-header">Nuevo Registro</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Nueva visita</h1>
                    <div class="container">
                        <form method="post" action="{{ route('visitas.store') }}">
                            {{ csrf_field() }}
                            <br>
                            <label>Numero de token</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" name="n_token" required>
                            </div>
                            <br>
                            <label>Visitante</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="visitante" required>
                            </div>
                            <br>
                            <label>Rango</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="rango" required>
                            </div>
                            <br>
                            <label>Validez</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="validez" required>
                            </div>
                            <br>
                            <label>Nombre del paciente</label>
                            <div class="input-group mb-3">
                                <select name="pacientes_id">
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
                                <select name="planta_cama_id">
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
                                <select name="planta_id">
                                    @foreach($plant as $Lista)
                                        <option value="{{ $Lista->id }}">
                                            {{ $Lista->no_planta }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </form>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection