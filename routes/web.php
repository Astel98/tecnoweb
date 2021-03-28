<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PromocionController;
use App\Http\Controllers\ReporteController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ReclamoController;
use App\Http\Controllers\TarifaController;

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

//C CRUD de tarifa begin
Route::get('/tarifa/show',[TarifaController::class,'read'])->name('vertarifa');
Route::get('/tarifa/showform',[TarifaController::class,'showForm'])->name('showformtarifa');
Route::post('/tarifa/showform',[TarifaController::class,'create'])->name('showformtarifa');
Route::get('/tarifa/modify/{id}',[TarifaController::class,'modify'])->name('modifytarifa');
Route::post('/tarifa/update/{id}',[TarifaController::class,'update'])->name('updatetarifa');
Route::get('/tarifa/delete/{id}', [TarifaController::class,'delete'])->name('deletetarifa');
// end tarifa
// CRUD de promocion begin
Route::get('/promocion/show',[PromocionController::class,'read'])->name('verpromocion');
Route::get('/promocion/showform',[PromocionController::class,'showForm'])->name('showformpromocion');
Route::post('/promocion/showform',[PromocionController::class,'create'])->name('showformpromocion');
Route::get('/promocion/modify/{id}',[PromocionController::class,'modify'])->name('modifypromocion');
Route::post('/promocion/update/{id}',[PromocionController::class,'update'])->name('updatepromocion');
Route::get('/promocion/delete/{id}', [PromocionController::class,'delete'])->name('deletepromocion');
// end promociones