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
                              <th>Tipo de diagnostico</th>
                              <th>nombre del medico</th>
                              <th>nombre del paciente</th>
                            </tr>
                          </thead>
                        <?php
                    
                        try {

                            $db_con = new PDO("mysql:host=$host; dbname=$database; charset=utf8", $username, $password);
                            $db_con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                         }catch (PDOException $e){

                                echo $e->getMessage();
                                
                             }
                        $sql = 'select t_diagnostico, medicos.nombres, pacientes.nombres
                                from consultas, diagnosticos, medicos, pacientes
                                where consultas.diagnostico_id = diagnosticos.id
                                and consultas.medico_id = medicos.id
                                and consultas.pacientes_id = pacientes.id;';
                            
                            $result = $db_con->query($sql);
                            foreach ($result as $values) {
                            
                                echo "<tbody><tr><th scope='row'>"
                                    . $values["t_diagnostico"]
                                    . "</th><td>"
                                    . $values["nombres"]
                                    . "</td><td>"
                                    . $values["nombres"]
                                    . "</td></tr></tbody>";
                            }
                        ?>
                        
                            </table>
                            
                            </div>
                    

                    <br>  
                    <a href="/principal" type="button" class="btn btn-danger">Regresar</a>
                    <a href="{{ route('consultas.create')}}" type="button" class="btn btn-primary">Nueva consultas</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection