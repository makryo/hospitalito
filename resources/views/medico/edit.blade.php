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
                    
                        <form method="post" action="{{ route('medicos.update', $Edita->id) }}">

                            @csrf
                            @method('PATCH')
                            {{ csrf_field() }}

                            <br>
                            <input type="number" name="cod_medic" value="{{ $Edita->cod_medic }}" required class="form-control">
                            <br>
                            <input type="text" name="nombres" value="{{ $Edita->nombres }}" required class="form-control">
                            <br>
                            <input type="text" name="apellidos" value="{{ $Edita->apellidos }}" required class="form-control">
                            <br>
                            <input type="text" name="especialidad" value="{{ $Edita->especialidad }}" required class="form-control">
                            <br>
                            <input type="submit" value="Guardar" class="btn btn-success">
                        </form>

                      
                
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection