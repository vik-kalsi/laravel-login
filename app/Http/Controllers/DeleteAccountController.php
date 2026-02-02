<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteAccountController extends Controller
{
    public function OpenDeleteAccountPage(){
        if (session('username')){
            return view('pages.deleteaccount');
        } else {
            return redirect()->action([LoginController::class, 'OpenLoginPage']);
        }
    }



    public function DeleteAccount(Request $request){
        DB::table('users_tb') -> where('username', session('username')) -> delete();
        session()->flush();

        return redirect()->action([LoginController::class, 'OpenLoginPage'])
        ->with('AccountDeleted', 'Account has been deleted');
    }

}
