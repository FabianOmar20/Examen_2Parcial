<?php

use App\Http\Controllers\VistasController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[VistasController::class,'Unidad1'])->name('Unidad1');

Route::get('/Unidad2',[VistasController::class,'Unidad2'])->name('Unidad2');
