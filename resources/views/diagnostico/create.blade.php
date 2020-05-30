@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Nuevo Registro</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Nuevo diagnostico</h1>
                    <div class="container">
                        <form method="post" action="{{ route('diagnosticos.store') }}">
                            {{ csrf_field() }}
                            <br>
                            <label>Tipo de diagnostico</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="t_diagnostico" required>
                            </div>
                            <br>
                            <label>Sintomas</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="sintomas" required>
                            </div>
                            <br>
                            <label>Fecha de diagnostico</label>
                            <div class="input-group mb-3">
                                <input type="date" class="form-control" name="fech_diagn" required>
                            </div>
                            <br>
                            <label>Descripcion</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="descripcion" required>
                            </div>
                            <br>
                            <a href="/diagnosticos" type="button" class="btn btn-danger">Regresar</a>
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </form>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection