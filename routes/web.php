<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PromocionController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\RutaController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ReclamoController;
use App\Http\Controllers\TarifaController;
use App\Http\Controllers\TramoController;

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
Route::get('/roles', [RolController::class, 'listar'])->name('roles');
Route::get('/rol/selectRol', [RolController::class, 'selectRol']);
Route::get('/rol/editar/{id}', [RolController::class, 'editar'])->name('editrol');
Route::get('/rol/eliminar/{id}', [RolController::class, 'eliminar'])->name('deleterol');
Route::post('/rol/update/{id}', [RolController::class, 'updateRol'])->name('updaterol');

Route::get('/user', [UserController::class, 'index']);
Route::get('/usuarios', [UserController::class, 'listar'])->name('usuarios');
Route::get('/user/perfil', [UserController::class, 'perfil']);

Route::get('/user/editar/{id}', [UserController::class, 'editar'])->name('editaruser');
Route::get('/user/eliminar/{id}', [UserController::class, 'eliminar'])->name('eliminaruser');
Route::post('/user/update/{id}', [UserController::class, 'updateuser'])->name('actualizaruser');
Route::post('/user/eliminar2', [UserController::class, 'eliminar'])->name('eliminaruser2');

Route::get('/user/editarPerfil', [UserController::class, 'editarPerfil']);
Route::get('/user/crear', [UserController::class, 'crear'])->name('crearuser');
Route::post('/user/register', [UserController::class, 'store'])->name('registraruser');
Route::post('/user/registrar', [UserController::class, 'store2']);
Route::post('/user/actualizar', [UserController::class, 'update']);
Route::get('/user/selectUsuario', [UserController::class, 'selectUsuario']);

Route::post('/busqueda', [ReporteController::class, 'busqueda'])->name('busqueda');
Route::get('/estadistica', [ReporteController::class, 'estadistica'])->name('estadistica');
Route::get('/reporte', [ReporteController::class, 'reportes'])->name('reportes');
Route::get('/reporte/buschofer', [ReporteController::class, 'getChoferBuses']);

Route::get('/reporte/usuarios', [ReporteController::class, 'imprimir']);
Route::get('/reporte/rutas', [ReporteController::class, 'imprimirRutas']);
Route::get('/reporte/estudiantes', [ReporteController::class, 'imprimirEstudiantes']);
Route::get('/reporte/clientes', [ReporteController::class, 'imprimirClientes']);
Route::get('/reporte/choferes', [ReporteController::class, 'imprimirChoferes']);
Route::get('/reporte/buses', [ReporteController::class, 'imprimirBuses']);

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
// CRUD de reclamo begin
Route::get('/reclamo/show',[ReclamoController::class,'read'])->name('verreclamo');
Route::get('/reclamo/showform',[ReclamoController::class,'showForm'])->name('showformreclamo');
Route::post('/reclamo/showform',[ReclamoController::class,'create'])->name('showformreclamo');
Route::get('/reclamo/modify/{id}',[ReclamoController::class,'modify'])->name('modifyreclamo');
Route::post('/reclamo/update/{id}',[ReclamoController::class,'update'])->name('updatereclamo');
Route::get('/reclamo/delete/{id}', [ReclamoController::class,'delete'])->name('deletereclamo');
// end reclamo


//C CRUD de tarifa begin
Route::get('/bus/show',[BusController::class,'read'])->name('verbuses');
Route::get('/bus/showform',[BusController::class,'showForm'])->name('showformbuses');
Route::post('/bus/showform',[BusController::class,'create'])->name('showformbus');
Route::get('/bus/modify/{id}',[BusController::class,'modify'])->name('modifybus');
Route::post('/bus/update/{id}',[BusController::class,'update'])->name('updatebus');
Route::get('/bus/delete/{id}', [BusController::class,'delete'])->name('deletebus');
// end tarifa
// CRUD de promocion begin
Route::get('/rutas/show',[RutaController::class,'read'])->name('verrutas');
Route::get('/rutas/showform',[RutaController::class,'showForm'])->name('showformrutas');
Route::post('/rutas/showform',[RutaController::class,'create'])->name('showformruta');
Route::get('/rutas/modify/{id}',[RutaController::class,'modify'])->name('modifyruta');
Route::post('/rutas/update/{id}',[RutaController::class,'update'])->name('updateruta');
Route::get('/rutas/delete/{id}', [RutaController::class,'delete'])->name('deleteruta');
// end promociones
// CRUD de reclamo begin
Route::get('/tramos/show',[TramoController::class,'read'])->name('vertramos');
Route::get('/tramos/showform',[TramoController::class,'showForm'])->name('showformtramos');
Route::post('/tramos/showform',[TramoController::class,'create'])->name('showformtramo');
Route::get('/tramos/modify/{id}',[TramoController::class,'modify'])->name('modifytramo');
Route::post('/tramos/update/{id}',[TramoController::class,'update'])->name('updatetramo');
Route::get('/tramos/delete/{id}', [TramoController::class,'delete'])->name('deletetramo');
// end reclamo
