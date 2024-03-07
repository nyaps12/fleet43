<?php

namespace App\Http\Controllers;


use App\Models\Account;
use App\Models\User;
use App\Models\lms_g43_vehicles;
use Carbon\Carbon;
use DB;
use Exception;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    //

    public function googlepage()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googlecallback()
    {
        try {
            $user = Socialite::driver('google')->user();

            // Check if the user is already registered
            $findUser = User::where('google_id', $user->id)->first();

            if ($findUser) {
                // If the user is already registered, log them in
                Auth::login($findUser);
            } else {
                // Check if the user with the same email already exists
                $existingUser = User::where('email', $user->email)->first();

                if ($existingUser) {
                    // If the user with the same email exists, you can handle it according to your logic.
                    // For example, you might want to show an error message or redirect to a different page.
                    // In this example, we'll log in the existing user.
                    Auth::login($existingUser);
                } else {
                    // If the user is not registered, create a new user
                    $newUser = User::create([
                        'firstname' => $user->user['given_name'], // Use 'given_name' for first name
                        'lastname' => $user->user['family_name'], // Use 'family_name' for last name
                        'email' => $user->email,
                        'google_id' => $user->id,
                        'password' => bcrypt('12345dummy')
                    ]);

                    Auth::login($newUser);
                }
            }

            return redirect()->intended('/dashboard');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }



    public function loadBackEnd()
    {
        // If a user is already authenticated, redirect them to the appropriate dashboard
        if (Auth::check()) {
            $route = $this->redirectDash();
            return redirect($route);
        }

        // Load the backend login view
        return view('adminlogin');
    }

    public function backEnd(Request $request)
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

    public function addVehicle(Request $request)
    {
        $data = $request->validate([
            'type' => 'required|string',
            'model' => 'required|numeric',
            'license_plate' => 'required|string',
            'capacity' => 'required|numeric',
        ]);

        $vehicle = lms_g43_vehicles::create($data);

        // You can redirect or perform other actions after adding the vehicle

        return redirect()->route('vehicle.add');
    }



    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/login');
    }
}
