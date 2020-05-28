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
                              <th>tipo</th>
                              <th>sintomas</th>
                              <th>fecha de diagnostico</th>
                              <th>descripcion</th>
                            </tr>
                          </thead>
                        <?php
                    
                        try {

                            $db_con = new PDO("mysql:host=$host; dbname=$database; charset=utf8", $username, $password);
                            $db_con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                         }catch (PDOException $e){

                                echo $e->getMessage();
                                
                             }
                        $sql = 'select t_diagnostico, sintomas, fech_diagn, descripcion from diagnosticos;';
                            
                            $result = $db_con->query($sql);
                            foreach ($result as $values) {
                            
                                echo "<tbody><tr><th scope='row'>"
                                    . $values["t_diagnostico"]
                                    . "</th><td>"
                                    . $values["sintomas"]
                                    . "</td><td>"
                                    . $values["fech_diagn"]
                                    . "</td><td>"
                                    . $values["descripcion"]
                                    . "</td></tr></tbody>";
                            }
                        ?>
                        
                            </table>
                            
                            </div>
                    

                    <br>  
                    <a href="/principal" type="button" class="btn btn-danger">Regresar</a>
                    <a href="{{ route('diagnosticos.create')}}" type="button" class="btn btn-primary">Nuevo diagnostico</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection