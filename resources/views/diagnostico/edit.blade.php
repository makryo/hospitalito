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
                    
                        <form method="post" action="{{ route('diagnosticos.update', $Edita->id) }}">

                            @csrf
                            @method('PATCH')
                            {{ csrf_field() }}

                            <br>
                            <input type="text" name="t_diagnostico" value="{{ $Edita->t_diagnostico }}" required class="form-control">
                            <br>
                            <input type="text" name="sintomas" value="{{ $Edita->sintomas }}" required class="form-control">
                            <br>
                            <input type="date" name="fech_diagn" value="{{ $Edita->fech_diagn }}" required class="form-control">
                            <br>
                            <input type="text" name="descripcion" value="{{ $Edita->descripcion }}" required class="form-control">
                            <br>
                            <a href="/diagnosticos" type="button" class="btn btn-danger">Regresar</a>
                            <input type="submit" value="Guardar" class="btn btn-success">
                        </form>

                      
                
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection