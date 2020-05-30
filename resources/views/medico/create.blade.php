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
                    <h1>Nuevo medico</h1>
                    <div class="container">
                        <form method="post" action="{{ route('medicos.store') }}">
                            {{ csrf_field() }}
                            <br>
                            <label>Codigo medico</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" name="cod_medic" required>
                            </div>
                            <br>
                            <label>Nombres</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="nombres" required>
                            </div>
                            <br>
                            <label>Apellidos</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="apellidos" required>
                            </div>
                            <br>
                            <label>Especialidad</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="especialidad" required>
                            </div>
                            <br>
                            <a href="/medicos" type="button" class="btn btn-danger">Regresar</a>
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </form>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection