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

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');


// Stores
Route::prefix('/store')->name('store')->group(function () {
    Route::get('/index', [App\Http\Controllers\StoreController::class, 'index'])->name('.index');
    Route::get('/cadastrar', [App\Http\Controllers\StoreController::class, 'create'])->name('.index');
});