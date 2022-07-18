<?php

// DEPENDENCIAS
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// LLAMADAS
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersoasController;
use App\Http\Controllers\EmpresasController;

use App\Http\Controllers\OfertafsController;
use App\Http\Controllers\OfertatsController;

use App\Http\Controllers\EventController;

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
Route::delete('/persoas/{id}', [PersoasController::class, 'destroy'])->name('persoas.destroy');


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
Route::delete('/empresas/{id}', [EmpresasController::class, 'destroy'])->name('empresas.destroy');


// RUTAS DE OFERTAFormación

// INDEX + BUSQUEDA
Route::get('/ofertafs/index', [OfertafsController::class, 'index'])->name('ofertafs.index');

// CREAR NUEVA
Route::get('/ofertafs/create',  [OfertafsController::class, 'create'])->name('ofertafs.create');
Route::post('/ofertafs',  [OfertafsController::class, 'store'])->name('ofertafs.store');

// EDITAR UN REGISTRO
Route::get('/ofertafs/{id}/edit',  [OfertafsController::class, 'edit'])->name('ofertafs.edit');
Route::post('/ofertafs/{id}',  [OfertafsController::class, 'update'])->name('ofertafs.update');

// VER UN REGISTRO
Route::get('/ofertafs/{id}/show',  [OfertafsController::class, 'show'])->name('ofertafs.show');

// ELIMINAR UN REGISTRO - NO TIENE VISTA
Route::delete('/ofertafs/{id}', [OfertafsController::class, 'destroy'])->name('ofertafs.destroy');


// RUTAS DE OFERTATraballo

// INDEX + BUSQUEDA
Route::get('/ofertats/index', [OfertatsController::class, 'index'])->name('ofertats.index');

// CREAR NUEVA
Route::get('/ofertats/create',  [OfertatsController::class, 'create'])->name('ofertats.create');
Route::post('/ofertats',  [OfertatsController::class, 'store'])->name('ofertats.store');

// EDITAR UN REGISTRO
Route::get('/ofertats/{id}/edit',  [OfertatsController::class, 'edit'])->name('ofertats.edit');
Route::post('/ofertats/{id}',  [OfertatsController::class, 'update'])->name('ofertats.update');

// VER UN REGISTRO
Route::get('/ofertats/{id}/show',  [OfertatsController::class, 'show'])->name('ofertats.show');

// ELIMINAR UN REGISTRO - NO TIENE VISTA
Route::delete('/ofertats/{id}', [OfertatsController::class, 'destroy'])->name('ofertats.destroy');


// AXENDA
Route::get('calendar', [EventController::class, 'index'])->name('calendar.index');
Route::post('calendar/create-event', [EventController::class, 'create'])->name('calendar.create');
Route::patch('calendar/edit-event', [EventController::class, 'edit'])->name('calendar.edit');
Route::delete('calendar/remove-event', [EventController::class, 'destroy'])->name('calendar.destroy');