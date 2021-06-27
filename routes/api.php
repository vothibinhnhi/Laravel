<?php

use App\Http\Contronllers\Api\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('category',[CategoryController::class,'index']);
Route::get('category/{id}',[CategoryController::class,'show']);

Route::get('kindofnews',[KindOfNewsController::class,'index']);
Route::get('kindofnews/{id}',[KindOfNewsController::class,'show']);

Route::get('news',[NewsController::class,'index']);
Route::get('news/{id}',[NewsController::class,'show']);
