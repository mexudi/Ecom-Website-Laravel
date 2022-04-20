<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommandeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Product;

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
Route::get('/commande',[CommandeController::class,'index']);
Route::get('/commande/create',[CommandeController::class,'create']);
Route::post('/commande/store',[CommandeController::class,'store']);
Route::get('/commande/{id}/edit', [CommandeController::class,'edit']);
Route::put('/commande/{id}/update', [CommandeController::class,'update']);
Route::get('/commande/{id}/show', [CommandeController::class,'show']);
Route::delete('/commande/{id}',[CommandeController::class,'destroy']);

Route::get('/user',[UserController::class, 'index']);
Route::get('/products', [Productcontroller::class,'index']);
Route::get('/products/create', [Productcontroller::class,'create']);
Route::post('/products/store', [Productcontroller::class,'store']);
Route::get('/products/{id}/edit', [Productcontroller::class,'edit']);
Route::put('/products/{id}/update', [Productcontroller::class,'update']);
Route::get('/products/{id}', [Productcontroller::class,'show']);
Route::delete('/products/{id}',[ProductController::class,'destroy']);

//Route::resource('/category',CategoryController::class);

Route::get('/categories',[CategoryController::class,'index']);
Route::get('/categories/{id}',[CategoryController::class,'show']);
Route::get('/categories/create',[CategoryController::class,'create']);
Route::post('/categories/store',[CategoryController::class,'store']);
Route::get('/categories/{id}/edit', [CategoryController::class,'edit']);
Route::put('/categories/{id}/update', [CategoryController::class,'update']);
Route::delete('/categories/{id}',[CategoryController::class,'destroy']);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
