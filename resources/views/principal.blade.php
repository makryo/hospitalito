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
                    <a href="{{ route('pacientes.index') }}" type="button" class="btn btn-primary">pacientes</a><br><br>
                    <a href="{{ route('plantas.index') }}" type="button" class="btn btn-primary">planta</a><br><br>
                    <a href="{{ route('historial.index') }}" type="button" class="btn btn-primary">historial</a><br><br>
                    <a href="{{ route('asignacion.index')}}" type="button" class="btn btn-primary">asignacion</a><br><br>
                    <a href="{{ route('plantascama.index') }}" type="button" class="btn btn-primary">planta_cama</a><br><br>
                    <a href="{{ route('visitas.index') }}" type="button" class="btn btn-primary">visitas</a><br><br>
                    <a href="{{ route('consultas.index') }}" type="button" class="btn btn-primary">consultas</a><br><br>
                    <a href="{{ route('medicos.index') }}" type="button" class="btn btn-primary">medico</a><br><br>
                    <a href="{{ route('diagnosticos.index') }}" type="button" class="btn btn-primary">diagnostico</a><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection