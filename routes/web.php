<?php

use App\Http\Controllers\coffeeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[coffeeController::class, 'index'])->name('coffee.index');
