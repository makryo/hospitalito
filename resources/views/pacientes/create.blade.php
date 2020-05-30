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
                    <h1>Nuevo paciente</h1>
                    <div class="container">
                        <form method="post" action="{{ route('pacientes.store') }}">
                            {{ csrf_field() }}
                            <br>
                            <label>numero de carnet</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" name="n_carnet" required>
                            </div>
                            <br>
                            <label>numero de dpi</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" name="dpi" required>
                            </div>
                            <br>
                            <label>nombres</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="nombres" required>
                            </div>
                            <br>
                            <label>apellidos</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="apellidos" required>
                            </div>
                            <br>
                            <label>fecha de nacimiento</label>
                            <div class="input-group mb-3">
                                <input type="date" class="form-control" name="fecha_nac" required>
                            </div>
                            <br>
                            <label>localidad</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="localidad" required>
                            </div>
                            <br>
                            <label>genero</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="genero" required>
                            </div>
                            <br>
                            <a href="/pacientes" type="button" class="btn btn-danger">Regresar</a>
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </form>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection