<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\RutaController;

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
Route::get('/registrarse',[LoginController::class, 'showRegisterForm']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/buses', [BusController::class, 'view'])->name('buses');
Route::get('/rutas', [BusController::class, 'view'])->name('rutas');
Route::get('/tarifas', [BusController::class, 'view'])->name('tarifas');
Route::get('/usuarios', [BusController::class, 'view'])->name('usuarios');

Route::get('/rol', [RolController::class, 'index']);
Route::post('/rol/registrar', [RolController::class, 'store']);
Route::put('/rol/actualizar', [RolController::class, 'update']);
Route::get('/rol/selectRol', [RolController::class, 'selectRol']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/usuarios', [UserController::class, 'listar']);
Route::get('/user/perfil', [UserController::class, 'perfil']);

Route::post('/user/editar', [UserController::class, 'editar']);
Route::post('/user/eliminar', [UserController::class, 'eliminar']);
Route::post('/user/editar2', [UserController::class, 'editarUser']);
Route::post('/user/eliminar2', [UserController::class, 'eliminar']);

Route::get('/user/editarPerfil', [UserController::class, 'editarPerfil']);
Route::post('/user/register', [UserController::class, 'store']);
Route::post('/user/registrar', [UserController::class, 'store2']);
Route::post('/user/actualizar', [UserController::class, 'update']);
Route::get('/user/selectUsuario', [UserController::class, 'selectUsuario']);

Route::get('/reporte', [ReporteController::class, 'reportes'])->name('reportes');
Route::get('/reporte/buschofer', [ReporteController::class, 'getChoferBuses']);

Route::get('/reporte/usuarios', [ReporteController::class, 'imprimir']);
Route::get('/reporte/rutas', [ReporteController::class, 'imprimirRutas']);
Route::get('/reporte/estudiantes', [ReporteController::class, 'imprimirEstudiantes']);
Route::get('/reporte/clientes', [ReporteController::class, 'imprimirClientes']);
Route::get('/reporte/choferes', [ReporteController::class, 'imprimirChoferes']);
Route::get('/reporte/buses', [ReporteController::class, 'imprimirBuses']);

