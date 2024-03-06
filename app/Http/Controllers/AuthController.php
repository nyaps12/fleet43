<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //

    public function landingPage()
    {
        if (Auth::check()) {
            $route = $this->redirectDash();
            return redirect($route);
        }

        // Load the backend login view
        return view('index');
    }

    public function loadLogin()
    {
        if(Auth::user()){
            $route = $this->redirectDash();
            return redirect($route);
        }
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'login' => 'string|required', // Assuming 'login' is the input field for both email and username
            'password' => 'string|required'
        ]);

        $loginField = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $userCredential = [
            $loginField => $request->input('login'),
            'password' => $request->input('password')
        ];

        if (Auth::attempt($userCredential)) {
            $route = $this->redirectDash();
            return redirect($route);
        } else {
            return back()->with('error', 'Username or Password is incorrect');
        }
    }

    public function loadDashboard()
    {
        return view('user.dashboard');
    }


    public function redirectDash()
    {
        $redirect = '';

        if(Auth::user() && Auth::user()->role == 1){
            $redirect = '/super-admin/dashboard';
        }
        // else if(Auth::user() && Auth::user()->role == 2){
        //     $redirect = '/sub-admin/dashboard';
        // }
        else if(Auth::user() && Auth::user()->role == 2){
            $redirect = '/admin/dashboard';
        }
        else{
            $redirect = '/dashboard';
        }

        return $redirect;
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/login');
    }
}
