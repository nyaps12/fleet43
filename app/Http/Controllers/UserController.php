<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function map()
    {
        return view('user.map');
    }

    public function history()
    {
        return view('user.history');
    }



}



