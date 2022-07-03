<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AttendanceDetailController;
use App\Http\Controllers\InterfaceController;
use App\Http\Controllers\DirekturController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\SalaryDetailController;
use App\Http\Controllers\ProfileController;


use App\Models\Salary;
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
    Route::resource('/interface', InterfaceController::class)->except('create', 'edit', 'store', 'update', 'destroy');

    Route::resource('/list-karyawan', DirekturController::class);
    Route::get('/list-personalia', [DirekturController::class, 'personalia'])->name('list-personalia');
    Route::post('/list-personalia', [DirekturController::class, 'storePers'])->name('list-personalia.store');
    Route::get('/list-personalia/create', [DirekturController::class, 'createPers'])->name('list-personalia.create');
    Route::delete('/list-personalia/{list_personalia}', [DirekturController::class, 'destroyPers'])->name('list-personalia.destroy');

    Route::resource('/attendance', AttendanceController::class)->except(['create', 'edit', 'update', 'show', 'destroy']);
    Route::get('/attendance-details', [AttendanceController::class, 'attendDetails'])->name('attendance-details');
    Route::resource('/salary', SalaryController::class)->except(['edit', 'update', 'destroy']);
    Route::get('/salary/{id}/print', [SalaryController::class, 'print'])->name('salary.print');
    
    Route::get('/salary/{id}/add', [SalaryController::class, 'gaji'])->name('salary.add');
    Route::post('/salary/{id}/input', [SalaryController::class, 'gaji_input'])->name('salary.add.input');
    Route::resource('/karyawan-salary', SalaryDetailController::class);
    
    Route::get('/personalia-salary', [SalaryDetailController::class, 'personalia_index'])->name('personalia-salary');
    Route::get('/personalia-salary/{id}/edit', [SalaryDetailController::class, 'personalia_edit'])->name('karyawan-salary.personalia.edit');
    Route::put('/personalia-salary/{id}/update', [SalaryDetailController::class, 'personalia_update'])->name('personalia.update.salary');


    Route::resource('/profile', ProfileController::class)->except(['create', 'show', 'destroy']);
    Route::get('/profile/{id}/ubah', [ProfileController::class, 'ubah_pass'])->name('profile.ubah');
    Route::post('/profile/{id}/update', [ProfileController::class, 'update_pass'])->name('profile.update.pass');
    
    Route::resource('/details', SalaryDetailController::class)->except('show');

    
    

});