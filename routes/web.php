<?php

use App\Http\Controllers\berkatController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/', [berkatController::class, 'index']);
Route::get('berkatatap/menuutama', [berkatController::class, 'menu_utama']);
Route::get('berkatatap/login', [berkatController::class, 'login']);
Route::get('berkatatap/login/register', [berkatController::class, 'register']);
Route::get('berkatatap/menuutama/paket_atap', [berkatController::class, 'paket_atap']);
Route::get('berkatatap/menuutama/paket_plaffon', [berkatController::class, 'paket_plaffon']);
Route::get('berkatatap/menuutama/paket_partisi', [berkatController::class, 'paket_partisi']);
Route::get('berkatatap/menuutama/paket_atap/A01', [berkatController::class, 'A01']);
Route::get('berkatatap/menuutama/paket_atap/A02', [berkatController::class, 'A02']);
Route::get('berkatatap/menuutama/paket_atap/A03', [berkatController::class, 'A03']);
Route::get('berkatatap/menuutama/paket_plaffon/P01', [berkatController::class, 'P01']);
Route::get('berkatatap/menuutama/paket_plaffon/P02', [berkatController::class, 'P02']);
Route::get('berkatatap/menuutama/paket_plaffon/P03', [berkatController::class, 'P03']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
