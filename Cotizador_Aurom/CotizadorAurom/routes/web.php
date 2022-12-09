<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\CitaokController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Spatie\GoogleCalendar\Event;

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
//Route::get('/admin',[AdminController::class, 'admin']);

Route::get('/',[IndexController::class,'index']);
Route::get('/cita',[CitaController::class,'cita']);
Route::get('/citaok',[CitaokController::class,'citaok']);
Route::get('/admin/detalles/{id}',[AdminController::class, 'detalles']);
Route::post('/cita',[CitaController::class,'agendar']);
Route::get('/reporte',[HomeController::class,'reporte']);
Route::post('/coti',[HomeController::class,'insertar']);
Route::resource('admin', AdminController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
