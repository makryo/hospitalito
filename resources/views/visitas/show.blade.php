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
                        <dt>n_token</dt><dd>{{ $visit->n_token }}</dd>
                        <dt>visitante</dt><dd>{{ $visit->visitante }}</dd>
                        <dt>rango</dt><dd>{{ $visit->rango }}</dd>
                        <dt>validez</dt><dd>{{ $visit->validez }}</dd>
                        <dt>paciente</dt><dd>{{ $visit->pacientes_id }}</dd>
                        <dt>numero de cama</dt><dd>{{ $visit->planta_cama_id }}</dd>
                        <dt>numero de planta</dt><dd>{{ $visit->planta_id }}</dd>
                    </dl>
                    <br>  
                    <a href="/principal" type="button" class="btn btn-danger">Regresar</a>
                    <a href="{{ route('visitas.edit', $visit->id) }}" class="boton">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection