<?php
//6 archivos index,registro,login,personalizarPerfil, y faltan 2
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\administradorController;
use App\Http\Controllers\trabajadorController;
use App\Http\Controllers\workerController;
//controlador de homeController que usa el metodo invoke porque es para el main
//controlador administrador y si falta el del trabajador

Route::get('/administrador/profile',[administradorController::class,'index']);

/*
Route::get('/trabajador',[trabajadorController::class,'index']);
Route::get('/trabajador/create',[trabajadorController::class,'create']);
Route::get('/trabajador/calendario',[trabajadorController::class,'calender']);
*/
Route::get('/worker',[workerController::class,'index']);
Route::get('/worker/create',[workerController::class,'create']);




Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
