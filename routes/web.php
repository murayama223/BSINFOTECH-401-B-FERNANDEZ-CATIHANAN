<?php

use App\Http\Controllers\coffeeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[coffeeController::class, 'index'])->name('coffee.index');

Route::get('/create',[coffeeController::class, 'create'])->name('coffee.create');

Route::post('/store',[coffeeController::class, 'store'])->name('coffee.store');

Route::get('/{id}',[coffeeController::class, 'show'])->name('coffee.show');

Route::get('/{id}/edit',[coffeeController::class, 'edit'])->name('coffee.edit');

Route::get('/{id}',[coffeeController::class, 'update'])->name('coffee.update');
