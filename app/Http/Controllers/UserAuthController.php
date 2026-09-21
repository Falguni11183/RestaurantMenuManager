<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Show Registration Page
    |--------------------------------------------------------------------------
    */

    public function showRegister()
    {
        return view('auth.register');
    }


    /*
    |--------------------------------------------------------------------------
    | Register User
    |--------------------------------------------------------------------------
    */

    public function register(Request $request)
    {

        $request->validate([

            'name' => 'required|string|max:255',

            'email' => 'required|email|unique:users,email',

            'password' => 'required|string|min:6|confirmed',

        ], [

            'name.required' =>
                'Please enter your name.',

            'email.required' =>
                'Please enter your email.',

            'email.email' =>
                'Please enter a valid email address.',

            'email.unique' =>
                'This email is already registered.',

            'password.required' =>
                'Please enter a password.',

            'password.min' =>
                'Password must be at least 6 characters.',

            'password.confirmed' =>
                'Passwords do not match.',

        ]);


        User::create([

            'name' => $request->name,

            'email' => $request->email,

            'password' => $request->password,

        ]);


        /*
        |--------------------------------------------------------------------------
        | After Registration → Login Page
        |--------------------------------------------------------------------------
        */

        return redirect()

            ->route('login')

            ->with(
                'success',
                'Registration successful. Please login to continue.'
            );

    }


    /*
    |--------------------------------------------------------------------------
    | Show Login Page
    |--------------------------------------------------------------------------
    */

    public function showLogin()
    {
        return view('auth.login');
    }


    /*
    |--------------------------------------------------------------------------
    | Login User
    |--------------------------------------------------------------------------
    */

    public function login(Request $request)
    {

        $credentials = $request->validate([

            'email' => 'required|email',

            'password' => 'required|string',

        ], [

            'email.required' =>
                'Please enter your email.',

            'email.email' =>
                'Please enter a valid email address.',

            'password.required' =>
                'Please enter your password.',

        ]);


        $remember = $request->boolean('remember');


        if (Auth::attempt($credentials, $remember)) {

            $request->session()->regenerate();


            return redirect()

                ->route('menu')

                ->with(
                    'success',
                    'Welcome back to Savoria!'
                );

        }


        return back()

            ->withInput(
                $request->only('email')
            )

            ->withErrors([

                'email' =>
                    'The email or password is incorrect.',

            ]);

    }


    /*
    |--------------------------------------------------------------------------
    | Logout User
    |--------------------------------------------------------------------------
    */

    public function logout(Request $request)
    {

        Auth::logout();


        $request->session()->invalidate();


        $request->session()->regenerateToken();


        return redirect()

            ->route('home')

            ->with(
                'success',
                'You have been logged out successfully.'
            );

    }

}