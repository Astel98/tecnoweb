<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ReporteController;

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

Route::get('/',[LoginController::class, 'showLoginForm']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/buses', [BusController::class, 'view'])->name('buses');
Route::get('/rutas', [BusController::class, 'view'])->name('rutas');
Route::get('/tarifas', [BusController::class, 'view'])->name('tarifas');
Route::get('/usuarios', [BusController::class, 'view'])->name('usuarios');
Route::get('/reportes', [BusController::class, 'view'])->name('reportes');

Route::get('/rol', [RolController::class, 'index']);
Route::post('/rol/registrar', [RolController::class, 'store']);
Route::put('/rol/actualizar', [RolController::class, 'update']);
Route::get('/rol/selectRol', [RolController::class, 'selectRol']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/perfil', [UserController::class, 'perfil']);
Route::get('/user/editarPerfil', [UserController::class, 'editarPerfil']);
Route::post('/user/registrar', [UserController::class, 'store']);
Route::put('/user/actualizar', [UserController::class, 'update']);
Route::get('/user/selectUsuario', [UserController::class, 'selectUsuario']);

Route::get('/reporte/buschofer', [ReporteController::class, 'getChoferBuses']);

