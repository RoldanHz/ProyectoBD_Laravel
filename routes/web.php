<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

#Route::get('/', function () {
#    return view('welcome');
#});

Route::get('/', [UserController::class, 'index']);
#realizar la descarga desde el botón
Route::get('/descarga', [UserController::class, 'descarga']);
#mostrar la base de datos con datos
Route::get('/basededatos', [UserController::class, 'verbd']);
#para mostrar las vistas
Route::get('/vistas/v1', [UserController::class, 'vista1']);
Route::get('/vistas/v2', [UserController::class, 'vista2']);
Route::get('/vistas/v3', [UserController::class, 'vista3']);
#mostrar lo que realizarán las transacciones y a quienes afectan
Route::get('/transacciones/t1', [UserController::class, 'vtran1']);
Route::get('/transacciones/t2', [UserController::class, 'vtran2']);
Route::get('/transacciones/t3', [UserController::class, 'vtran3']);
#realizar las transacciones desde las vistas de los botones
Route::get('/t1', [UserController::class, 'transaccion1']);
Route::get('/t2', [UserController::class, 'transaccion2']);
Route::get('/t3', [UserController::class, 'transaccion3']);
