<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\LoginController;

Route::view('/', 'home');

Route::middleware('auth')->controller(EmployeeController::class)->group(function () {
    Route::get('/employees', 'index');
    Route::get('/create-employee', 'create');
    Route::post('/create-employee',  'store');
    Route::get('/employee/{employee}',  'show');
    Route::get('/employee/{employee}/edit',  'edit');
    Route::patch('/employee/{employee}',  'update');
    Route::delete('/employee/{employee}',  'destroy');
});


// Authentication

Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LoginController::class, 'destroy']);
