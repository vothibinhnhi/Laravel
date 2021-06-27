<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KindOfNewsController;
use App\Http\Controllers\NewsController;
use App\Models\KindOfNews;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('news/{id}', [HomeController::class, 'showNews'])->name('showNews');
Route::resource('admin/categories', CategoryController::class)->middleware('auth');
Route::resource('admin/kindofnews', KindOfNewsController::class)->middleware('auth');
Route::resource('admin/news', NewsController::class)->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

