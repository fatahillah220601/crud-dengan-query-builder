<?php

use App\Http\Controllers\InsertController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('main');
// });

// home
Route::get('/', [HomeController::class, 'home']);
// view data
Route::post('/dashboard',[InsertController::class, 'dataaddproses']);
// add data
Route::get('/dashboard', [InsertController::class, 'insert']);
Route::get('/tambah-data', [InsertController::class, 'dataadd']);
// edit data
Route::get('/edit-data/{id}', [InsertController::class, 'editdta']);
Route::put('/dashboard/{id}', [InsertController::class, 'editdataproses']);
//hapus dta
Route::delete('/dashboard/{id}',[InsertController::class, 'hapusdta']);






