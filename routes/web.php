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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/get-empresa', 'InitialController@getEmpresa');

Route::get('/ajustes','HomeController@Versettings')->name('ajustes');
Route::get('/pacientes/listar','HomeController@listPacientes')->name('list-pacientes');

// Ruta de formulario editar empresa
Route::post('/edit-empresa','EmpresaController@edit');
