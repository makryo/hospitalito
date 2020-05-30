@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Editar registro</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Actualizar datos</h1>
                    <div class="container">
                    
                        <form method="post" action="{{ route('pacientes.update', $Edita->id) }}">

                            @csrf
                            @method('PATCH')
                            {{ csrf_field() }}

                            <br>
                            <input type="text" name="n_carnet" value="{{ $Edita->n_carnet }}" required class="form-control">
                            <br>
                            <input type="text" name="dpi" value="{{ $Edita->dpi }}" required class="form-control">
                            <br>
                            <input type="text" name="nombres" value="{{ $Edita->nombres }}" required class="form-control">
                            <br>
                            <input type="text" name="apellidos" value="{{ $Edita->apellidos }}" required class="form-control">
                            <br>
                            <input type="text" name="fecha_nac" value="{{ $Edita->fecha_nac }}" required class="form-control">
                            <br>
                            <input type="text" name="localidad" value="{{ $Edita->localidad }}" required class="form-control">
                            <br>
                            <input type="text" name="genero" value="{{ $Edita->genero }}" required class="form-control">
                            <br>
                            <a href="/pacientes" type="button" class="btn btn-danger">Regresar</a>
                            <input type="submit" value="Guardar" class="btn btn-success">
                        </form>

                      
                
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection