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
                    
                        <form method="post" action="{{ route('plantascama.update', $Edita->id) }}">

                            @csrf
                            @method('PATCH')
                            {{ csrf_field() }}

                            <br>
                            <input type="number" name="no_cama" value="{{ $Edita->no_cama }}" required class="form-control">
                            <br>
                            <select name="disp_cama" value="{{ $Edita->disp_cama }}" required class="form-control">
                                    <option value="1">disponible</option>
                                    <option value="0">ocupado</option>
                            </select>
                            <br>
                            <a href="/plantascama" type="button" class="btn btn-danger">Regresar</a>
                            <input type="submit" value="Guardar" class="btn btn-success">
                        </form>

                      
                
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection