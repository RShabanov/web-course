<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Song;

class UserController extends Controller
{
    public function index(Request $request) 
    {
        $user_songs = Song::where('user_id', Auth::user()->id)->get();
        return view('pages.user.user')->with(compact('user_songs'));
    }
}
