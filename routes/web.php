<?php

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

//Rutas Estudiantes
Route::get('/api/estudiantes', 'estudiantesController@index');
Route::post('/api/estudiantes/guardar', 'estudiantesController@store');
Route::put('/api/estudiantes/actualizar', 'estudiantesController@update');
Route::delete('/api/estudiantes/eliminar', 'estudiantesController@destroy');

//Rutas Profesores
Route::get('/api/profesores', 'profesoresController@index');
Route::post('/api/profesores/guardar', 'profesoresController@store');
Route::put('/api/profesores/actualizar', 'profesoresController@update');
Route::delete('/api/profesores/eliminar', 'profesoresController@destroy');


//Rutas Asistencias
Route::get('/api/asistencias', 'asistenciasController@index');
Route::post('/api/asistencias/guardar', 'asistenciasController@store');
Route::put('/api/asistencias/actualizar', 'asistenciasController@update');
Route::delete('/api/asistencias/eliminar', 'asistenciasController@destroy');


//Rutas Excusas
Route::get('/api/excusas', 'excusasController@index');
Route::post('/api/excusas/guardar', 'excusasController@store');
Route::put('/api/excusas/actualizar', 'excusasController@update');
Route::delete('/api/excusas/eliminar', 'excusasController@destroy');

//Rutas Fallas
Route::get('/api/fallas', 'fallasController@index');
Route::post('/api/fallas/guardar', 'fallasController@store');
Route::put('/api/fallas/actualizar', 'fallasController@update');
Route::delete('/api/fallas/eliminar', 'fallasController@destroy');


//Rutas controls
Route::get('/api/controls', 'ControlsController@index');
Route::post('/api/controls/guardar', 'ControlsController@store');
Route::put('/api/controls/actualizar', 'ControlsController@update');
Route::delete('/api/controls/eliminar', 'ControlsController@destroy');



