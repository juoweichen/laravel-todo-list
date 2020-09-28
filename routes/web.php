<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
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

Auth::routes();

Route::get('/', [HomeController::class, 'index']);

Route::get('/todo/create', [TodoController::class, 'create']);
Route::post('/todo', [TodoController::class, 'store']);
Route::get('/todo/{todo}', [TodoController::class, 'show']);
Route::get('/todo/{todo}/edit', [TodoController::class, 'edit']);
Route::put('/todo/{todo}', [TodoController::class, 'update']);
Route::get('/todo/{todo}/delete', [TodoController::class, 'destory']);
