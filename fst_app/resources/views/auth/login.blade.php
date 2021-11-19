@extends('layouts.app')

@section("title")
login
@endsection

@push("styles")
<link href="{{ asset('css/forms.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section("content")
<form method="POST" class="site-form">
@csrf
    <div class="form-name">
        Login Form
    </div>

    <div class="form-field">
        <label class="field__label">
            <span for="" class="label-name">Email:</span><br>
            <input type="email" name="email" class="field__input" value="{{ old('email') }}">
            @error("email")
            <div class="error-msg">{{ $message }}</div>
            @enderror
        </label>
    </div>
    <div class="form-field">
        <label class="field__label">
            <span for="" class="label-name">Password:</span><br>
            <input type="password" name="password" class="field__input" value="{{ old('password') }}">
            @error("password")
            <div class="error-msg">{{ $message }}</div>
            @enderror
        </label>
    </div>
    <div class="form-field btn-field">
        <button class="btn-submit">Log in</button>
    </div>

    <div class="form-field invitation-msg">
        Not a member?
        <a href="{{ route('register') }}">Sign up</a>
    </div>
</form>
@endsection