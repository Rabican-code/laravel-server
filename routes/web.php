<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('product', [ProductController::class, 'createProduct']);


Route::get('product/{id}', [ProductController::class, 'updateProduct']);


Route::get('product/{id}', [ProductController::class, 'deleteProduct']);


Route::get('product', [ProductController::class, 'index']);
