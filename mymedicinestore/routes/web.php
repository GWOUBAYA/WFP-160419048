<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\MedicinesController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/medicines', function () {
    return view('medicines.index');
});

Route::get('formnewproduct', 'ProductController@create');
Route::get('formupdateproduct', 'ProductController@update');
Route::resource('products', 'App\Http\Controllers\ProductController');
Route::resource('medicines', 'App\Http\Controllers\MedicinesController');