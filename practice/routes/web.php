<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product',[App\Http\Controllers\ProductsController::class,'Index']);
Route::get('/addproduct',[App\Http\Controllers\ProductsController::class,'create']);
Route::post('/saveproduct',[App\Http\Controllers\ProductsController::class,'store']);
Route::any('/editproduct/{id}',[App\Http\Controllers\ProductsController::class,'edit']);
Route::any('/updateproduct/{id}',[App\Http\Controllers\ProductsController::class,'update']);
Route::any('/deleteproduct/{id}',[App\Http\Controllers\ProductsController::class,'destroy']);
// Route::view('/product',"viewallproduct");
