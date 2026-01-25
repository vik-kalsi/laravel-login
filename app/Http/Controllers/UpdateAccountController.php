<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UpdateAccountController extends Controller
{
    public function OpenUpdateAccountPage(){
        if (session('username')){
            return view('pages.updateaccount');
        } else {
            return redirect()->action([LoginController::class, 'OpenLoginPage']);
        }
    }


    public function UpdateUsername(Request $request){
        $request->validate([
            'newUsername' => 'required',
        ]);

        $usernameExists = DB::table('users_tb')->where('username', $request->newUsername)->first();

        if(!$usernameExists){
             DB::table('users_tb')->where('username', session('username'))
             ->update(['username' => $request->newUsername]);

             session(['username' => $request->newUsername]);
             return redirect()->action([UpdateAccountController::class, 'OpenUpdateAccountPage'])
             ->with('UsernameUpdated', 'You have succesfully updated the username');;

        } else {
            return redirect()->action([UpdateAccountController::class, 'OpenUpdateAccountPage'])
            ->withErrors(['usernameAlreadyExists' => "This Username already exists, please choose a different username"])
            ->withInput();
        }
    }


    public function RedirectToLoginPage(){
        return redirect()->action([LoginController::class, 'OpenLoginPage']);
    }


    public function UpdatePassword(Request $request){
        $request->validate([
            'newPassword' => 'required|min:8|confirmed',
        ]);

        DB::table('users_tb') -> where('username', session('username')) 
        -> update(['password' => Hash::make($request->newPassword)]);

        return redirect()->action([UpdateAccountController::class, 'OpenUpdateAccountPage'])
        ->with('passwordUpdated', 'Password has been updated succesfully');
    }

}
