@extends('layouts.app')

@section("content")
<form method="POST" action={{}}>
@csrf
    <div class="form-field">
        <label class="field__label">
            <span for="" class="label-name">Username:</span><br>
            <input type="text" class="field__input">
        </label>
    </div>
    <div class="form-field">
        <label class="field__label">
            <span for="" class="label-name">Email:</span><br>
            <input type="email" class="field__input">
            @error("email")
            <div class="error-msg">{{ $message }}</div>
            @enderror
        </label>
    </div>
    <div class="form-field">
        <label class="field__label">
            <span for="" class="label-name">Password:</span><br>
            <input type="password" class="field__input">
            @error("password")
            <div class="error-msg">{{ $message }}</div>
            @enderror
        </label>
    </div>
    <div class="form-field">
        <label class="field__label">
            <span for="" class="label-name">Confirm password:</span><br>
            <input type="password" class="field__input">
            @error("password-confirm")
            <div class="error-msg">{{ $message }}</div>
            @enderror
        </label>
    </div>
    <div class="form-field">
        <button class="btn-submit">Log in</button>
    </div>
</form>
@endsection