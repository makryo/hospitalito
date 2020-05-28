@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido al sistema {{ Auth::user()->name }} <br><br>
                    <a href="{{ route('pacientes.index') }}">pacientes</a><br><br>
                    <a href="{{ route('plantas.index') }}">planta</a><br><br>
                    <a href="{{ route('historial.index') }}">historial</a><br><br>
                    <a href="{{ route('asignacion.index')}}">asignacion</a><br><br>
                    <a href="{{ route('plantascama.index') }}">planta_cama</a><br><br>
                    <a href="{{ route('visitas.index') }}">visitas</a><br><br>
                    <a href="{{ route('consultas.index') }}">consultas</a><br><br>
                    <a href="{{ route('medicos.index') }}">medico</a><br><br>
                    <a href="{{ route('diagnosticos.index') }}">diagnostico</a><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection