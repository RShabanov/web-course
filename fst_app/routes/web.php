<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix("auth")->group(function() {
    Route::redirect('/', '/auth/login');
    
    Route::get("/login", [LoginController::class, 'index']);
    Route::post("/login", [LoginController::class, 'login']);

    Route::get("/register", [RegisterController::class, "index"]);
    Route::post("/register", [RegisterController::class, "register"]);
});
