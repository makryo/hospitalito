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
                    <h1>Nueva cama</h1>
                    <div class="container">
                        <form method="post" action="{{ route('plantascama.store') }}">
                            {{ csrf_field() }}
                            <br>
                            <label>Numero de cama</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="no_cama" required>
                            </div>
                            <br>
                            <label>disponibilidad</label>
                            <div class="input-group mb-3">
                                <select name="disp_cama">
                                    <option value="1">disponible</option>
                                    <option value="0">ocupado</option>
                                </select>
                            </div>
                            <br>
                            <a href="/plantascama" type="button" class="btn btn-danger">Regresar</a>
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </form>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection