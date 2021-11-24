@extends('layouts.app')

@section("title")
user
@endsection

@push("styles")
<link href="{{ asset('css/forms.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/song-set.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section("content")
    @if( auth()->check() )
        <div class="user-block">
            <div class="user-info">
                <div class="user-name">
                    {{ auth()->user()->name }}
                </div>
                <div class="user-id">
                    # {{ auth()->user()->id }}
                </div>
            </div>

            <div class="user-songs_block">
                <h2 class="block-title">Your songs</h2>

                <div class="user-songs_songs">
                    <ul class="song-list">
                        @foreach ($user_songs as $song)
                            <li class="song-item">
                                
                                <figure class="audio-player__figure">
                                    <figcaption class="song-name">{{ $song->audio_name }}</figcaption>
                                    <audio
                                        class="player__audio"
                                        controls
                                        src="{{ asset( 'storage/'. $song->audio_path ) }}">
                                            Your browser does not support the
                                            <code>audio</code> element.
                                    </audio>
                                </figure>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif
@endsection