<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class LoginController extends Controller
{
    /**
     * Show the form to log in
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $email = $request->email;
        $password = $request->password;

        return 'Welcome back, ('. $email . ')';
    }
}
