<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();
Route::get('/', [App\Http\Controllers\FrondEndController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', ([DashboardController::class, 'index']))->middleware('auth');;
Route::resource('/dashboard/items', ItemController::class)->middleware('auth');
Route::resource('/dashboard/categories', CategoryController::class)->middleware('auth');
Route::resource('/dashboard/transactions', TransactionController::class)->middleware('auth');
