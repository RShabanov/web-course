<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Show the form to log in
     * 
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }
}
