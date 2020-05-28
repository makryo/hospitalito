<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/principal', function () {
	return view('principal');
});

Route::get('/principal', 'HomeController@index');
Route::resource('/asignacion', 'AsignacionController');
Route::resource('/consultas', 'ConsultasController');
Route::resource('/diagnosticos', 'DiagnosticoController');
Route::resource('/medicos', 'MedicoController');
Route::resource('/pacientes', 'PacientesController');
Route::resource('/plantascama', 'PlantaCamaController');
Route::resource('/plantas', 'PlantaController');
Route::resource('/visitas', 'VisitasController');
Route::resource('/historial', 'HistorialController');
