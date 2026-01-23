<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function OpenRegistrationPage(){
        if (!session('username')){
            return view('pages.registration');
        } else {
            return redirect()->action([LoginController::class, 'OpenDashboardPage']);
        }
    }


    public function RegisterAccount(Request $request) {

         $request->validate([
            'username' => 'required|string|max:20',
            'password' => 'required|confirmed|min:8',
        ]);


        $usernameExists = DB::table('users_tb')->where('username', $request->username)->first();

        if(!$usernameExists){
            DB::table('users_tb')->insert([
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]);
            return redirect()->action([LoginController::class, 'OpenLoginPage'])
            ->with('registerSuccess', 'Account has been registered succesfully, please login');
        } else{
            return redirect()->action([RegisterController::class, 'RegisterAccount'])
            ->withErrors(['usernameAlreadyExists' => "This Username already exists, please choose a different username"])
            ->withInput();
        }
    }
}
