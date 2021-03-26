<?php

use App\Http\Controllers\PerempatanController;
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

Route::get('/polantas-home', function () {
    return view('polantas.polantas-home');
});

Route::get('/polantas-peta', [PerempatanController::class, 'indexPeta']);

Route::get('/polantas-lampu', [PerempatanController::class, 'indexLampu']);
