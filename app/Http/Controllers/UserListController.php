<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserListController extends Controller
{
    public function OpenUserListPage(){

        $listOfUsers = DB::table('users_tb')->get();

        if (session('username')) {
            return view('pages.userlist', ["users" => $listOfUsers]);
        } else {
            return view('pages.login');
        }
    }
}
