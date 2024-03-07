<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function dashboard()
    {
        $user = auth()->user();
        return view('user.dashboard', compact('user'));
    }

    public function map()
    {
        $user = auth()->user();
        return view('user.map', compact('user'));
    }

    public function history()
    {
        $user = auth()->user();
        return view('user.history', compact('user'));
    }



}



