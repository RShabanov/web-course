<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Show the form to register
     * 
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }
}
