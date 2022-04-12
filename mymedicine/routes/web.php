<?php

use App\Http\Controllers\MedicinesController;
use Illuminate\Support\Facades\Route;

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

// Route::get("user/{id}", function($id){
//     return "User ".$id;
// });

Route::get("user/{name?}", function ($name = "John") {
    return $name;
});

Route::get("foo1", function () {
    return "Foo1";
})->name("namaroute");

// Route::get("greeting",function(){
//     return view("welcome",['name'=>'Samantha']);
// });

Route::get('catalog', function () {
    return view('catalog');
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

Route::get('/medicine', [MedicineController::class, 'index']);
Route::get('/medicine/category/{category}', [MedicineController::class, 'med_category']);

Route::get('/query/1', [CategoryController::class, 'index']);
Route::get('/query/2', [MedicineController::class, 'name_formula_price']);
Route::get('/query/3', [MedicineController::class, 'name_formula_price_category']);
Route::get('/query/4', [CategoryController::class, 'count_medicine']);
Route::get('/query/5', [CategoryController::class, 'no_medicine']);
Route::get('/query/6', [CategoryController::class, 'avg_price']);
Route::get('/query/7', [CategoryController::class, 'one_medicine']);
Route::get('/query/8', [MedicineController::class, 'one_form']);
Route::get('/query/9', [MedicineController::class, 'highest_price']);
Route::resource('medicines', 'App\Http\Controllers\MedicinesController');
Route::resource('categories', 'App\Http\Controllers\CategoriesController');

Route::get('medicines/modal/{id}', [MedicineController::class, 'modals'])->name('modal');