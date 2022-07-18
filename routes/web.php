<?php

use App\Http\Controllers\FarmController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/farm', [FarmController::class, 'index']);
Route::get('/farm/create', [FarmController::class, 'create']);
Route::get('/farm/{id}/edit', [FarmController::class, 'edit']);
Route::post('/farm', [FarmController::class, 'insert']);
Route::delete('/farm', [FarmController::class, 'delete']);
Route::put('/farm', [FarmController::class, 'update']);

