<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Api route for categories with products having product price greater than 500 
Route::get('getAllCategoriesWithProductsPrice', [ApiController::class, 'getAllCategoriesWithProductsPrice']);

//Api route for top 5 categories with products that are new listed
Route::get('getCategoriesWithNewListedProducts', [ApiController::class, 'getCategoriesWithNewListedProducts']);

//Api route for All categories with atleast one product
Route::get('getAllCategoriesWithAtleastProduct', [ApiController::class, 'getAllCategoriesWithAtleastProduct']);