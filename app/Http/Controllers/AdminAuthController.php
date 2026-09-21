<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Show Admin Login
    |--------------------------------------------------------------------------
    */

    public function showLogin()
    {
        return view('admin.login');
    }


    /*
    |--------------------------------------------------------------------------
    | Admin Login
    |--------------------------------------------------------------------------
    */

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ], [
            'email.required' => 'Please enter admin email.',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'Please enter admin password.',
        ]);


        /*
        |--------------------------------------------------------------------------
        | Demo Admin Credentials
        |--------------------------------------------------------------------------
        */

        if (
            $credentials['email'] === 'admin@savoria.com' &&
            $credentials['password'] === 'admin123'
        ) {

            $request->session()->regenerate();

            $request->session()->put('admin_logged_in', true);

            return redirect()
                ->route('dashboard')
                ->with(
                    'success',
                    'Welcome to Admin Dashboard.'
                );
        }


        return back()
            ->withInput($request->only('email'))
            ->withErrors([
                'email' => 'Invalid admin email or password.',
            ]);
    }


    /*
    |--------------------------------------------------------------------------
    | Admin Logout
    |--------------------------------------------------------------------------
    */

    public function logout(Request $request)
    {
        $request->session()->forget('admin_logged_in');

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()
            ->route('home')
            ->with(
                'success',
                'Admin logged out successfully.'
            );
    }
}