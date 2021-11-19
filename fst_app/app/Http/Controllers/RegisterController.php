<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Database\CreateUsersTable;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Show the form to register
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('sections.auth.register');
    }
    
    public function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Password::min(8)],
        ]);

        $user = User::create(request(['name', 'email', 'password']));
        auth()->login($user);

        $request->session()->regenerate();

        return redirect()->intended('/');
    }
}
