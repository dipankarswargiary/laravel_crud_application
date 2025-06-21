<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::view('/', 'home');

Route::controller(EmployeeController::class)->group(function () {
    Route::get('/employees', 'index');
    Route::post('/',  'create');
    Route::get('/employee/{employee}',  'show');
    Route::get('/employee/{employee}/edit',  'edit');
    Route::patch('/employee/{employee}',  'update');
    Route::delete('/employee/{employee}',  'destroy');
});
