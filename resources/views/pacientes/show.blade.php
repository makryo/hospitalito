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
                        <dt>numero de carnet</dt><dd>{{ $pacient->n_carnet }}</dd>
                        <dt>dpi</dt><dd>{{ $pacient->dpi }}</dd>
                        <dt>nombres</dt><dd>{{ $pacient->nombres }}</dd>
                        <dt>apellidos</dt><dd>{{ $pacient->apellidos }}</dd>
                        <dt>fecha_nac</dt><dd>{{ $pacient->fecha_nac }}</dd>
                        <dt>localidad</dt><dd>{{ $pacient->localidad }}</dd>
                        <dt>genero</dt><dd>{{ $pacient->genero }}</dd>
                    </dl>
                    <br>  
                    <a href="/principal" type="button" class="btn btn-danger">Regresar</a>
                    <a href="{{ route('pacientes.edit', $pacient->id) }}" class="boton">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection