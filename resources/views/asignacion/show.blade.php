@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Detalles de registro</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Detalles</h1>
                    
                    <dl>
                        <dt>paciente</dt><dd>{{ $asing->pacientes_id }}</dd>
                        <dt>numero de cama</dt><dd>{{ $asing->planta_cama_id }}</dd>
                        <dt>numero de planta</dt><dd>{{ $asing->planta_id }}</dd>
                        <dt>fecha de ingreso</dt><dd>{{ $asing->fecha_ingreso }}</dd>
                        <dt>alta</dt><dd>{{ $asing->alta }}</dd>
                    </dl>
                    <br>  
                    <a href="/principal" type="button" class="btn btn-danger">Regresar</a>
                    <a href="{{ route('asignacion.edit', $asing->id) }}" class="boton">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection