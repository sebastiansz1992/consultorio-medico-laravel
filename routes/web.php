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

Route::group(['middleware' => ['cors']], function () {

    // Metodos controladora medicos.

    Route::get('/especialidades', 'EspecialidadesController@obtenerTodasEspecialidades');
    Route::get('/obtenerMedicos', 'MedicosController@obtenerMedicos');
    Route::get('/obtenerMedicosPorEspecialidad/{id}', 'MedicosController@obtenerMedicosPorEspecialidad');
    Route::post('/registrarMedico', 'MedicosController@registrarMedico');

    // Metodos controladora usuarios.

    Route::post('/registrarUsuario', 'UsuariosController@registrarUsuario');
    
});


