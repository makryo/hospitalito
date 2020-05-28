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
                              <th>numero de cama</th>
                              <th>disponibilidad</th>
                            </tr>
                          </thead>
                        <?php
                    
                        try {

                            $db_con = new PDO("mysql:host=$host; dbname=$database; charset=utf8", $username, $password);
                            $db_con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                         }catch (PDOException $e){

                                echo $e->getMessage();
                                
                             }
                        $sql = 'select no_cama, disp_cama from planta_camas;';
                            
                            $result = $db_con->query($sql);
                            foreach ($result as $values) {
                            
                                echo "<tbody><tr><th scope='row'>"
                                    . $values["no_cama"]
                                    . "</th><td>"
                                    . $values["disp_cama"]
                                    . "</td></tr></tbody>";
                            }
                        ?>
                        
                            </table>
                            
                            </div>
                    

                    <br>  
                    <a href="/principal" type="button" class="btn btn-danger">Regresar</a>
                    <a href="{{ route('plantascama.create')}}" type="button" class="btn btn-primary">Nueva asignacion</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection