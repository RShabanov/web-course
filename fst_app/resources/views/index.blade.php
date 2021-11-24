@extends("layouts.app")

@section("title")
MusicFlow - home
@endsection

@push("styles")
<link href="{{ asset('css/song-set.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section("content")
<div class="audio-flow">
    <div>
        <h2 class="block-title">TOP SONGS #10</h2>
        <div class="user-songs_songs">
            <ul class="song-list">
                @foreach ($songs as $song)
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
@endsection