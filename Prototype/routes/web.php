<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::resource('/products' , ProductController::class)->middleware('auth' , 'role:admin');








