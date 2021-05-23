<?php

use App\Http\Controllers\LampuController;
use App\Http\Controllers\PerempatanController;
use App\Http\Controllers\PolantasController;
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

// Polantas Routes
Route::get('/polantas-home', [PolantasController::class, 'index']);

Route::get('/polantas-peta', [PerempatanController::class, 'index']);

Route::get('/polantas-lampu', [LampuController::class, 'index']);

Route::get('/detail-map/{id}', [PerempatanController::class, 'detail']);

Route::get('/detail-lampu/{id}', [LampuController::class, 'detailLampu']);

Route::get('/edit-lampu/{lengan_id}', [LampuController::class, 'editLampu']);

Route::patch('/update-lampu/{perempatan_id}', [LampuController::class, 'update']);


