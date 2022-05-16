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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('usuarios', App\Http\Controllers\TbusuarioController::class);

Route::resource('tipoidentificacion', App\Http\Controllers\TbidentificacionController::class);

Route::resource('tipousuario', App\Http\Controllers\TbtipousuarioController::class);