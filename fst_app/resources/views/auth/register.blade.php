@extends('layouts.app')

@section("title")
create account
@endsection

@push("styles")
<link href="{{ asset('css/forms.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section("content")
<form method="POST" class="site-form">
@csrf
    <div class="form-name">
        Signup Form
    </div>

    <div class="form-field">
        <label class="field__label">
            <span for="" class="label-name">Username:</span><br>
            <input type="text" name="name" class="field__input" value="{{ old('name') }}">
        </label>
    </div>
    <div class="form-field">
        <label class="field__label">
            <span for="" class="label-name">Email:</span><br>
            <input type="email" name="email" class="field__input" value="{{ old('email') }}">
            @error("email")
            <div class="error-msg" style="color: red;">{{ $message }}</div>
            @enderror
        </label>
    </div>
    <div class="form-field">
        <label class="field__label">
            <span for="" class="label-name">Password:</span><br>
            <input type="password" name="password" class="field__input" value="{{ old('password') }}">
            @error("password")
            <div class="error-msg" style="color: red;">{{ $message }}</div>
            @enderror
        </label>
    </div>
    <div class="form-field">
        <label class="field__label">
            <span for="" class="label-name">Confirm password:</span><br>
            <input type="password" name="password_confirmation" class="field__input" value="{{ old('password_confirmation') }}">
            @error("password_confirmation")
            <div class="error-msg" style="color: red;">{{ $message }}</div>
            @enderror
        </label>
    </div>
    <div class="form-field btn-field">
        <button class="btn-submit">Sign up</button>
    </div>

    <div class="form-field invitation-msg">
        Already have an account?
        <a href="{{ route('login') }}">Log in</a>
    </div>
</form>
@endsection