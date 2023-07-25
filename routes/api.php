<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/usuarios', 'App\Http\Controllers\usuariosController@index');//mostrar todos los registros
Route::post('/usuarios/crear', 'App\Http\Controllers\usuariosController@store');//crear un registro
Route::put('/usuarios/{id}', 'App\Http\Controllers\usuariosController@update');//actualizar registro
Route::delete('/usuarios/{id}', 'App\Http\Controllers\usuariosController@destroy');//eliminar registro