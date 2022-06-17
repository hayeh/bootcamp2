<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeretaController;
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

Route::get('/layouts.base', function () {
    return view('layouts.base');
});


Route::resource('/kereta', KeretaController::class);
Route::get('/kereta/{id_kereta}/edit-harga', [KeretaController::class, 'update_harga']);
Route::post('/kereta/{id_kereta}/save-harga', [KeretaController::class, 'save_harga']);

//Route::get('/kereta-download', [KeretaController::class, 'download_pdf'])

//Route::get('/dashboard', function () {
  //return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

//require __DIR__.'/auth.php';
