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
                    <h1>Nueva planta</h1>
                    <div class="container">
                        <form method="post" action="{{ route('plantas.store') }}">
                            {{ csrf_field() }}
                            <br>
                            <label>Numero de planta</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" name="no_planta" required>
                            </div>
                            <br>
                            <label>nombre</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="nombre" required>
                            </div>
                            <br>
                            <label>numero de camas</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="n_camas" required>
                            </div>
                            <br>
                            <a href="/plantas" type="button" class="btn btn-danger">Regresar</a>
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </form>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection