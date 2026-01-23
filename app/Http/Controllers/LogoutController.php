<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function LogoutUser(){
        session()->flush();
        return redirect()->action([LoginController::class, 'OpenLoginPage'])
        ->with('LogoutComplete', 'You have succesfully been logged out');
    }
}
