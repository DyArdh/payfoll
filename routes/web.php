<?php

use App\Http\Controllers\InterfaceController;
use App\Http\Controllers\DirekturController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [LoginController::class, 'logout']);

Route::middleware(['guest'])->group(function() {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
});

Route::middleware(['auth'])->group(function() {
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::resource('/interface', InterfaceController::class);

    Route::resource('/list-karyawan', DirekturController::class);
    Route::get('/list-personalia', DirekturController::class, 'personalia')->name('list-personalia');
});