<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function OpenRegistrationPage(){
        return view('pages.registration');
    }


    public function RegisterAccount(Request $request) {

         $request->validate([
            'username' => 'required|string|max:20',
            'password' => 'required|confirmed|min:8',
        ]);


        DB::table('users_tb')->insert([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->action([LoginController::class, 'OpenLoginPage']);
    }
}
