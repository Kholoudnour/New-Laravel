<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('index', [publicController::class, 'index'])->name('index');