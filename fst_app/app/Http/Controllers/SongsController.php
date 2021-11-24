<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class SongsController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::check()) redirect("/");
        return view('sections.selections.songs');
    }

    public function add(Request $request)
    {
        $credentials = $request->validate([
            'audio_name' => 'required',
            'audio_file' =>'nullable|file' // |mimetypes:audio/mpeg,mpga,mp3,mp4a,aac,mp4a
        ]);

        if ($request->hasFile('audio_file')) {
            $path = $request->audio_file->path();

            $extension = $request->audio_file->extension();
        
            $path = $request->audio_file->store('uploads/songs/'. Auth::user()->id);
        }
    }
}
