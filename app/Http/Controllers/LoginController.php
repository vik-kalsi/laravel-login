<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function OpenLoginPage(){
        return view('pages.login');
    }


    public function LoginCheck(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);


        $user = DB::table('users_tb')->where('username', $request->username)->first();
        
        if(!$user || !Hash::check($request->password, $user->password)) {
            return redirect()->action([LoginController::class, 'OpenLoginPage'])
            ->withErrors(['loginIncorrect' => "Invalid username or password"])
            ->withInput();
        } else {
            return redirect()->action([LoginController::class, 'OpenDashboardPage']);
        }
    }



    public function OpenDashboardPage(){
        return view('pages.dashboard');
    }
}
