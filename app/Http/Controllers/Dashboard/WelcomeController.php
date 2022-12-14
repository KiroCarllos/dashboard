<?php

namespace App\Http\Controllers\Dashboard;


use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $users_count = User::whereRoleIs('admin')->count();
        return view('dashboard.welcome', compact(   'users_count'));

    }//end of index

}//end of controller
