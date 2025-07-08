<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/tareas', [TareaController::class, 'index'])->name('tareas.index');
Route::post('/tareas', [TareaController::class, 'store'])->name('tareas.store');
