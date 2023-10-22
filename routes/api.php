<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// $router->post('product','ProductController@createProduct');   //for creating product
Route::post('product', [ProductController::class, 'createProduct']);

// $router->get('product/{id}','ProductController@updateProduct'); //for updating product

Route::get('product/{id}', [ProductController::class, 'updateProduct']);

// $router->post('product/{id}','ProductController@deleteProduct');  // for deleting product

Route::get('product/{id}', [ProductController::class, 'deleteProduct']);

// $router->get('product','ProductController@index'); // for retrieving product

Route::get('product', [ProductController::class, 'index']);
