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
                        <dt>Tipo de diagnostico</dt><dd>{{ $diag->t_diagnostico }}</dd>
                        <dt>Sintomas</dt><dd>{{ $diag->sintomas }}</dd>
                        <dt>Fecha de diagnostico</dt><dd>{{ $diag->fech_diagn }}</dd>
                        <dt>Descripcion</dt><dd>{{ $diag->descripcion }}</dd>
                    </dl>
                    <br>  
                    <a href="/principal" type="button" class="btn btn-danger">Regresar</a>
                    <a href="{{ route('diagnosticos.edit', $diag->id) }}" class="boton">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection