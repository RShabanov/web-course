<form method="POST" class="site-form" enctype=multipart/form-data>
@csrf
    <div class="form-name">
        Add song
    </div>

    <div class="form-field">
        <label class="field__label">
            <span class="label-name">Song name:</span><br>
            <input tabindex="1" type="text" name="audio_name" class="field__input" value="{{ old('song_name') }}">
            @error("audio_name")
                <div class="error-msg">{{ $message }}</div>
            @enderror
        </label>
    </div>
    
    <div class="form-field">
        <label for="" class="field__label label-file">
            <span class="label-name">Song:</span>
            <input tabindex="2" type="file" name="audio_file" class="field__input input-file" accept="audio/mpeg, audio/ogg, audio/wav">
            @error("audio_file")
                <div class="error-msg">{{ $message }}</div>
            @enderror
        </label>
    </div>

    <div class="form-field btn-field">
        <button class="btn-submit">Upload</button>
    </div>
</form>