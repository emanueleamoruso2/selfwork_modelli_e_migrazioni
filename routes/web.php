<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/Homepage', [PublicController::class,'homepage'])->name('homepage');
Route::post('/registrazione',[PublicController::class,'store'])->name('registration');

Route::get('/circuiti',[PublicController::class,'get_circuit'])->name('circuit');
