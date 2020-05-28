<?php  
$username = 'debian-sys-maint';
$password = 'ws1SC0JreanoNAJ8';
$database = 'hospitalito';
$host = 'localhost';
?>
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
                    <div class="table-responsive text-nowrap">
    
                        <table class="table table-striped">

                          
                          <thead>
                            <tr>
                              <th>numero de carnet</th>
                              <th>numero de dpi</th>
                              <th>nombres</th>
                              <th>apellidos</th>
                              <th>fecha de nacimiento</th>
                              <th>localidad</th>
                              <th>genero</th>
                            </tr>
                          </thead>
                        <?php
                    
                        try {

                            $db_con = new PDO("mysql:host=$host; dbname=$database; charset=utf8", $username, $password);
                            $db_con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                         }catch (PDOException $e){

                                echo $e->getMessage();
                                
                             }
                        $sql = 'select n_carnet, dpi, nombres, apellidos, fecha_nac, localidad, genero from pacientes;';
                            
                            $result = $db_con->query($sql);
                            foreach ($result as $values) {
                            
                                echo "<tbody><tr><th scope='row'>"
                                    . $values["n_carnet"]
                                    . "</th><td>"
                                    . $values["dpi"]
                                    . "</td><td>"
                                    . $values["nombres"]
                                    . "</td><td>"
                                    . $values["apellidos"]
                                    . "</td><td>"
                                    . $values["fecha_nac"]
                                    . "</td><td>"
                                    . $values["localidad"]
                                    . "</td><td>"
                                    . $values["genero"]
                                    . "</td></tr></tbody>";
                            }
                        ?>
                        
                            </table>
                            
                            </div>
                    

                    <br>  
                    <a href="/principal" type="button" class="btn btn-danger">Regresar</a>
                    <a href="{{ route('pacientes.create')}}" type="button" class="btn btn-primary">Nuevo paciente</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection