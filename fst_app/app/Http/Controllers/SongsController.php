<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\Song;

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
            $audio_name = $request->audio_name;
            $audio_path = $request->audio_file->store('uploads/songs/'. Auth::user()->id);
            $user_id = Auth::user()->id;

            $song = new Song;
            $song->audio_name = $audio_name;
            $song->audio_path = $audio_path;
            $song->user_id = $user_id;

            $song->save();

            return redirect()->intended('/profile');
        }

        return back();
    }
}
