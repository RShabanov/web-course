<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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
use App\Http\Controllers\SongsController;
use App\Http\Controllers\UserController;


Route::get('/', [SongsController::class, 'all'])->name('home');

Route::redirect("/home", "/");

Route::prefix("auth")->group(function() {
    Route::redirect('/', '/auth/login');
    
    Route::get("/login", [LoginController::class, 'index'])->name("login");
    Route::post("/login", [LoginController::class, 'authenticate']);

    Route::get("/logout", [LoginController::class, "logout"])->name("logout");

    Route::get("/register", [RegisterController::class, "index"])->name("register");
    Route::post("/register", [RegisterController::class, "register"]);
});

Route::prefix("user")
    ->middleware('verified')
    ->group(function() {

    Route::get("/", [UserController::class, 'index'])->name('user');

    Route::get("/add-song", [SongsController::class, 'index'])->name("add-song");
    Route::post("/add-song", [SongsController::class, 'add']);
});

// Email verification
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');