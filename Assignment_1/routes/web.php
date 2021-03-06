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

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get("/foods", 'App\Http\Controllers\FoodController@index');
Route::get("/foods/{food}", 'App\Http\Controllers\FoodController@show');
Route::get("/foods/{food}/edit", 'App\Http\Controllers\FoodController@edit');
Route::get("/foods/{food}/update", 'App\Http\Controllers\FoodController@update');
