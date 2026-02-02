<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UpdateAccountController;
use App\Http\Controllers\DeleteAccountController;
use App\Http\Controllers\UserListController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [RegisterController::class, "OpenRegistrationPage"]);
Route::post('/register', [RegisterController::class, 'RegisterAccount']);


Route::get('/login', [LoginController::class, 'OpenLoginPage']);
Route::post('/login', [LoginController::class, 'LoginCheck']);

Route::get('/dashboard', [LoginController::class, 'OpenDashboardPage']);

Route::get('/userlist', [UserListController::class, 'OpenUserListPage']);

Route::get('/logout', [LogoutController::class, 'LogoutUser']);

Route::get('/updateaccount', [UpdateAccountController::class, 'OpenUpdateAccountPage']);
Route::post('/updateaccount', [UpdateAccountController::class, 'UpdateUsername']);
Route::get('/updatepassword', [UpdateAccountController::class, 'RedirectToLoginPage']);
Route::post('/updatepassword', [UpdateAccountController::class, 'UpdatePassword']);

Route::get('/deleteaccount', [DeleteAccountController::class, 'OpenDeleteAccountPage']);
Route::post('/deleteaccount', [DeleteAccountController::class, 'DeleteAccount']);