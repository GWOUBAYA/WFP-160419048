<?php

use App\Http\Controllers\TransactionController;
use App\Http\Controllers\MedicinesController;
use App\Http\Controllers\BuyerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;

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

Route::get("foo", function () {
    return "Hello World";
});

Route::get("user/{id}", function ($id) {
    return "User " . $id;
});

Route::get("user/{name?}", function ($name = "John") {
    return $name;
});

Route::get("foo1", function () {
    return "Foo1";
})->name("namaroute");

Route::get("greeting", function () {
    return view("welcome", ['name' => 'Samantha']);
});

Route::get('catalog', function () {
    return view('catalog');
});

Route::get('/', function () {
    return view('home');
});

Route::get('catalog/medicines/{id?}', function ($id) {

    return view('detail', ['id' => $id]);
});

Route::get('catalog/med_equip', function ($medequip = 'Medical Equipment') {
    return view('medequip', ['medequip' => $medequip]);
});

Route::get('catalog/med_equip/{id?}', function ($id) {
    return view('detailmedquip', ['id' => $id]);
});

Route::get('/medicine', [MedicinesController::class, 'index']);
Route::get('/medicine/category/{category}', [MedicinesController::class, 'med_category']);
Route::get('/query/2', [MedicinesController::class, 'name_formula_price']);
Route::get('/query/3', [MedicinesController::class, 'name_formula_price_category']);
Route::get('/query/8', [MedicinesController::class, 'one_form']);
Route::get('/query/9', [MedicinesController::class, 'highest_price']);
Route::resource('medicines', MedicinesController::class);

Route::get('categories/{supplier}/edit', [CategoriesController::class, 'edit']);
Route::get('categories/{supplier}', [CategoriesController::class, 'update']);
Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/query/5', [CategoriesController::class, 'no_medicine']);
Route::get('/query/6', [CategoriesController::class, 'avg_price']);
Route::get('/query/7', [CategoriesController::class, 'one_medicine']);
Route::resource('categories', CategoriesController::class);
Route::get('/query/4', [CategoriesController::class, 'count_medicine']);

Route::get('transaction/', [TransactionController::class, 'index']);
Route::post('transaction/showDataAjax/',  [TransactionController::class, 'showAjax'])->name('transaction.showAjax');

Route::resource('buyer', BuyerController::class);

Route::get('/','ProductController@front_index');
Route::get('cart','ProductController@cart');
Route::get('add-to-cart/{id}','ProductController@addToCart');

// Route::get('buyer/create', [BuyerController::class, 'create']);
