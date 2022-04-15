<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MyController;
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
    return view('home');
});
Route::view("home","home");
Route::view("login","login");
Route::view("aboutus","aboutus");
Route::view("blog","blog");
Route::view("signup","signup");
Route::view("welcome","welcome");
Route::view("serum","serum");
Route::view("cleansers","cleansers");
Route::view("facewash","facewash");
Route::view("sunscreen","sunscreen");
Route::post("users",[UserController::class,"getData"]);
Route::post("accounts",[MyController::class,"readData"]);