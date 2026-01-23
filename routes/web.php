<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [RegisterController::class, "OpenRegistrationPage"]);
Route::post('/register', [RegisterController::class, 'RegisterAccount']);


Route::get('/login', [LoginController::class, 'OpenLoginPage']);
Route::post('/login', [LoginController::class, 'LoginCheck']);


Route::get('/dashboard', [LoginController::class, 'OpenDashboardPage']);

Route::get('/logout', [LogoutController::class, 'LogoutUser']);