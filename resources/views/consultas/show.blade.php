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
                        <dt>Nombre del paciente</dt><dd>{{ $consu->pacientes_id }}</dd>
                        <dt>Diagnostico</dt><dd>{{ $consu->diagnostico_id }}</dd>
                        <dt>Medico</dt><dd>{{ $consu->medico_id }}</dd>
                        
                    </dl>
                    <br>  
                    <a href="/principal" type="button" class="btn btn-danger">Regresar</a>
                    <a href="{{ route('consultas.edit', $consu->id) }}" class="boton">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection