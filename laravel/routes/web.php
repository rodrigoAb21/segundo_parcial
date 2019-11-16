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

Route::get('login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('login', [
    'as' => '',
    'uses' => 'Auth\LoginController@login'
]);
Route::post('logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
]);

Route::get('/', function () {
    return redirect('administrador');
})->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::middleware('administrador')->group(function () {

        Route::get('administrador', function () {
            return view('home');
        });

        Route::resource('administrador/usuarios', 'UsuarioController');
        Route::resource('administrador/juzgados', 'JuzgadoController');
        Route::resource('administrador/tipos', 'TipoProcesoController');
        Route::resource('administrador/expedientes', 'ExpedienteController');

        Route::get('administrador/expedientes/{id}/fojas', 'ExpedienteController@fojas');
        Route::get('administrador/expedientes/{id}/fojas/{fojaId}', 'ExpedienteController@verFoja');
        Route::delete('administrador/expedientes/{id}/fojas/{fojaId}', 'ExpedienteController@eliminarFoja');
    });

    Route::middleware('usuario')->group(function () {

        Route::get('usuario', function () {
            return view('layouts.usuario');
        });

        Route::get('usuario/expedientes', 'UsuarioWebController@index');
        Route::get('usuario/expedientes/{id}', 'UsuarioWebController@verExpediente');
        Route::get('usuario/expedientes/{id}/fojas', 'UsuarioWebController@fojas');
        Route::get('usuario/expedientes/{id}/fojas/{fojaId}', 'UsuarioWebController@verFoja');
        Route::get('usuario/editarCuenta/{id}', 'UsuarioWebController@editUsuario');
        Route::patch('usuario/editarCuenta/{id}', 'UsuarioWebController@updateUsuario');

    });
});





