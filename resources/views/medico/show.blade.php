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
                        <dt>Codigo medico</dt><dd>{{ $doc->cod_medic }}</dd>
                        <dt>Nombres</dt><dd>{{ $doc->nombres }}</dd>
                        <dt>Apellidos</dt><dd>{{ $doc->apellidos }}</dd>
                        <dt>Especialidad</dt><dd>{{ $doc->especialidad }}</dd>
                    </dl>
                    <br>  
                    <a href="/principal" type="button" class="btn btn-danger">Regresar</a>
                    <a href="{{ route('medicos.edit', $doc->id) }}" class="boton">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection