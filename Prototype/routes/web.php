<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('/products' , ProductController::class)->middleware('auth' , 'role:admin');


