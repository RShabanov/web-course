<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    protected static $fields = [
        'username',
        'email',
        'password',
        'password-confirm',
    ];

    /**
     * Show the form to register
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('auth.register');
    }
    
    public function register(Request $request) {
        $request->validate([
            'username' => 'required',
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Password::min(8)],
        ]);

        $username = $request->username;
        $email = $request->email;
        $password = $request->password;

        return 'Hello, ' . $username . ' (' . $email . ')';
    }
}
