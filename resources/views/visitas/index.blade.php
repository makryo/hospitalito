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
                              <th>numero de token</th>
                              <th>visitante</th>
                              <th>rango</th>
                              <th>validez</th>
                              <th>nombres</th>
                              <th>numero de cama</th>
                              <th>no</th>
                            </tr>
                          </thead>
                        <?php
                    
                        try {

                            $db_con = new PDO("mysql:host=$host; dbname=$database; charset=utf8", $username, $password);
                            $db_con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                         }catch (PDOException $e){

                                echo $e->getMessage();
                                
                             }
                        $sql = 'select n_token, visitante, rango, validez, nombres, no_cama, no_planta
                                from visitas, pacientes, planta_camas, plantas
                                where visitas.pacientes_id = pacientes.id
                                and visitas.planta_cama_id = planta_camas.id
                                and visitas.planta_id = plantas.id;';
                            
                            $result = $db_con->query($sql);
                            foreach ($result as $values) {
                            
                                echo "<tbody><tr><th scope='row'>"
                                    . $values["n_token"]
                                    . "</th><td>"
                                    . $values["visitante"]
                                    . "</td><td>"
                                    . $values["rango"]
                                    . "</td><td>"
                                    . $values["validez"]
                                    . "</td><td>"
                                    . $values["nombres"]
                                    . "</td><td>"
                                    . $values["no_cama"]
                                    . "</td><td>"
                                    . $values["no_planta"]
                                    . "</td></tr></tbody>";
                            }
                        ?>
                        
                            </table>
                            
                            </div>
                    

                    <br>  
                    <a href="/principal" type="button" class="btn btn-danger">Regresar</a>
                    <a href="{{ route('visitas.create')}}" type="button" class="btn btn-primary">Nueva visita</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection