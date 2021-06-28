<?php

use App\Http\Controllers\CitaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EnfermeraController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\MetodopagoController;
use App\Http\Controllers\NotaVentaController;
use App\Http\Controllers\NotaventaservicioController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\UbicacionController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('rol',[RolController::class,'index']);
Route::get('rol/{id}',[RolController::class,'show']);
Route::get('usuario',[UsuarioController::class,'index']);
Route::get('usuario/{id}',[UsuarioController::class,'show']);
Route::post('usuario', [UsuarioController::class,'store']);
Route::post('login',[UsuarioController::class,'login']);
Route::get('servicio',[ServicioController::class,'index']);
Route::get('servicio/{id}',[ServicioController::class,'show']);
Route::post('servicio',[ServicioController::class,'store']);
Route::get('metodopago',[MetodopagoController::class,'index']);
Route::get('metodopago/{id}',[MetodopagoController::class,'show']);
Route::post('metodopago',[MetodopagoController::class,'store']);
Route::get('enfermera',[EnfermeraController::class,'index']);
Route::get('enfermera/{id}',[EnfermeraController::class,'show']);
Route::get('cliente',[ClienteController::class,'index']);
Route::get('cliente/{id}',[ClienteController::class,'show']);
Route::get('ubicacion',[UbicacionController::class,'index']);
Route::get('ubicacion/{id}',[UbicacionController::class,'show']);
Route::post('ubicacion',[UbicacionController::class,'store']);
Route::get('notaventa', [NotaVentaController::class,'index']);
Route::get('notaventa/{id}',[NotaVentaController::class,'show']);
Route::post('notaventa',[NotaVentaController::class,'store']);
Route::get('cita',[CitaController::class,'index']);
Route::get('cita/{id}',[CitaController::class,'show']);
Route::post('cita',[CitaController::class,'store']);
Route::get('notaventaservicio',[NotaventaservicioController::class,'index']);
Route::get('notaventaservicio/{id}',[NotaventaservicioController::class,'show']);
Route::post('notaventaservicio',[NotaventaservicioController::class,'store']);
Route::get('factura',[FacturaController::class,'index']);
Route::get('factura/{id}',[FacturaController::class,'show']);
Route::post('factura',[FacturaController::class,'store']);
