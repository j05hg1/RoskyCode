<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedoreController;

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

//Ruta para Logo InventorySoftware
Route::get('/', function () {
    //return view('home');
    return view('auth.login');
});
// middleware exige autentificacion para poder acceder a la vista
//Route::resource('empleado', EmpleadoController::class)->middleware('auth');
Route::resource('home', App\Http\Controllers\HomeController::class)->middleware('auth');
Route::resource('empleado', App\Http\Controllers\EmpleadoController::class)->middleware('auth');
Route::resource('clientes', App\Http\Controllers\ClienteController::class)->middleware('auth');
Route::resource('categorias', App\Http\Controllers\CategoriaController::class)->middleware('auth');
Route::resource('proveedores', App\Http\Controllers\ProveedoreController::class)->middleware('auth');
Route::resource('productos', App\Http\Controllers\ProductoController::class)->middleware('auth');
//en el login ocultamos el acceso a register y reset password por medio de login
Auth::routes(['register'=>false,'reset'=>false]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

//inicia sesion, se autentica y redirecciona al index
Route::group(['middleware'=>'auth'], function () {
    //cuando quiera ir a home sera redireccionado a empleado
    //Route::get('/', [EmpleadoController::class, 'index'])->name('home');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});