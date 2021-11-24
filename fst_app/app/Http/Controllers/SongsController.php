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
        return view('pages.user.add-songs');
    }

    public function add(Request $request)
    {
        $credentials = $request->validate([
            'audio_name' => 'required',
            'audio_file' =>'nullable|file' // |mimetypes:audio/mpeg,mpga,mp3,mp4a,aac,mp4a
        ]);

        if ($request->hasFile('audio_file')) {
            $destination_path = 'public/songs/' . Auth::user()->id;
            $audio_path = $request->audio_file->store($destination_path);

            $audio_path = explode('/', $audio_path);
            array_shift($audio_path);
            $audio_path = implode('/', $audio_path);

            $song = new Song;
            $song->audio_name = $request->audio_name;
            $song->audio_path = $audio_path;
            $song->user_id = Auth::user()->id;

            $song->save();

            return redirect()->intended('/user');
        }

        return back();
    }

    public function all()
    {
        $songs = Song::all();
        return view('index')->with(compact('songs'));
    }
}
