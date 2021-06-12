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


// Admin Routes

Route::get('/admin-home', [PerempatanController::class, 'adminIndex']);

Route::get('/admin-peta', [PerempatanController::class, 'adminPeta']);

Route::get('/tambah-peta', function(){
    return view('admin.tambah-peta');
});

Route::post('/proses-peta', [PerempatanController::class, 'store']);

Route::delete('/delete-peta/{id}', [PerempatanController::class, 'destroy']);

Route::get('/edit-peta/{id}', [PerempatanController::class, 'edit']);

Route::patch('/update-peta/{id}', [PerempatanController::class, 'update']);

Route::get('/edit-lengan/{id}', [PerempatanController::class, 'editLengan']);

Route::post('/tambah-lengan', [PerempatanController::class, 'storeLengan']);

Route::delete('/delete-lengan/{perempatan_id}', [LampuController::class, 'destroy']);

Route::post('tambah-user', [PolantasController::class, 'storeUser']);

Route::get('/admin-users', [PolantasController::class, 'userPolantas']);

Route::delete('/delete-user/{id}', [PolantasController::class, 'destroyUser']);

Route::get('/edit-user/{id}', [PolantasController::class, 'editUser']);

Route::patch('/update-user/{id}', [PolantasController::class, 'updateUser']);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
