@extends('layouts.message')

@section("title")
verify email
@endsection

@push("styles")
<link href="{{ asset('css/message.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section("content")
<div class="message-block">
    <header class="message__header">
        <div class="name-block">Verify your email</div>
    </header>
    <main class="message__main">
        <div class="text">
            We've sent an email to verify your email address and activate your account. The link in the email will expire in 24 hours.
        </div>
    </main>
    <footer class="message__footer">
        <a href="{{ route('verification.send') }}">Click here</a>
        if you did not receive an email or would like to change the email address you signed up with.
    </footer>
</div>
@endsection