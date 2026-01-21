<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [RegisterController::class, "OpenRegistrationPage"]);
Route::post('/register', [RegisterController::class, 'RegisterAccount']);


Route::get('/login', [LoginController::class, 'OpenLoginPage']);
Route::post('/login', [LoginController::class, 'LoginCheck']);


Route::get('/dashboard', [LoginController::class, 'OpenDashboardPage']);