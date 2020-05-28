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
                        <dt>numero de planta</dt><dd>{{ $planta->no_planta }}</dd>
                        <dt>nombre</dt><dd>{{ $planta->nombre }}</dd>
                        <dt>numero de camas</dt><dd>{{ $planta->n_camas }}</dd>
                    </dl>
                    <br>  
                    <a href="/principal" type="button" class="btn btn-danger">Regresar</a>
                    <a href="{{ route('plantas.edit', $planta->id) }}" class="boton">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection