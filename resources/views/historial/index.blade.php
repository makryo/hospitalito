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
                              <th>numero de planta</th>
                              <th>nombre del paciente</th>
                              <th>numero de cama</th>
                              <th>fecha de ingreso</th>
                            </tr>
                          </thead>
                        <?php
                    
                        try {

                            $db_con = new PDO("mysql:host=$host; dbname=$database; charset=utf8", $username, $password);
                            $db_con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                         }catch (PDOException $e){

                                echo $e->getMessage();
                                
                             }
                        $sql = 'select no_planta, nombres, fecha_ingreso, no_cama
                                from historials, plantas, pacientes , planta_camas
                                where historials.pacientes_id = pacientes.id 
                                and historials.planta_id = plantas.id
                                and historials.planta_cama_id;
                                ';
                            
                            $result = $db_con->query($sql);
                            foreach ($result as $values) {
                            
                                echo "<tbody><tr><th scope='row'>"
                                    . $values["no_planta"]
                                    . "</th><td>"
                                    . $values["nombres"]
                                    . "</td><td>"
                                    . $values["no_cama"]
                                    . "</td><td>"
                                    . $values["fecha_ingreso"]
                                    . "</td></tr></tbody>";
                            }
                        ?>
                        
                            </table>
    
                            </div>
                    

                    <br>  
                    <a href="/principal" type="button" class="btn btn-danger">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection