<?php

// DEPENDENCIAS
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// LLAMADAS
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersoasController;
use App\Http\Controllers\EmpresasController;

/*
| Web Routes
|-----------------------------------------------------------------------------------------------
| Here is where you can register web routes for your application. These routes are loaded by the
| RouteServiceProvider within a group which contains the "web" middleware group.
*/

// Route::get('/', function () { return view('index'); });

Auth::routes();

// LOGIN e INICIO
Route::view('/', 'auth.login');
Route::get('/index', [HomeController::class, 'index'])->name('index');

// RUTAS DE PERSOAS

// INDEX + BUSQUEDA
Route::get('/persoas/index', [PersoasController::class, 'index'])->name('persoas.index');

// CREAR NUEVA
Route::get('/persoas/create',  [PersoasController::class, 'create'])->name('persoas.create');
Route::post('/persoas',  [PersoasController::class, 'store'])->name('persoas.store');

// EDITAR UN REGISTRO
Route::get('/persoas/{id}/edit',  [PersoasController::class, 'edit'])->name('persoas.edit');
Route::post('/persoas/{id}',  [PersoasController::class, 'update'])->name('persoas.update');

// VER UN REGISTRO
Route::get('/persoas/{id}/show',  [PersoasController::class, 'show'])->name('persoas.show');

// ELIMINAR UN REGISTRO - NO TIENE VISTA
Route::delete('/persoas/{id}' ,[PersoasController::class, 'destroy'])->name('persoas.destroy');


// RUTAS DE EMPRESAS

// INDEX + BUSQUEDA
Route::get('/empresas/index', [EmpresasController::class, 'index'])->name('empresas.index');

// CREAR NUEVA
Route::get('/empresas/create',  [EmpresasController::class, 'create'])->name('empresas.create');
Route::post('/empresas',  [EmpresasController::class, 'store'])->name('empresas.store');

// EDITAR UN REGISTRO
Route::get('/empresas/{id}/edit',  [EmpresasController::class, 'edit'])->name('empresas.edit');
Route::post('/empresas/{id}',  [EmpresasController::class, 'update'])->name('empresas.update');

// VER UN REGISTRO
Route::get('/empresas/{id}/show',  [EmpresasController::class, 'show'])->name('empresas.show');

// ELIMINAR UN REGISTRO - NO TIENE VISTA
Route::delete('/empresas/{id}' ,[EmpresasController::class, 'destroy'])->name('empresas.destroy');

