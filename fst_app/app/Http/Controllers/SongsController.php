<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SongsController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::check()) redirect("/");

        return view('sections.selections.songs');
    }
}
