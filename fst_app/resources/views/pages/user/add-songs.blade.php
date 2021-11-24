@extends('layouts.app')

@section("title")
home
@endsection

@push("styles")
<link href="{{ asset('css/selections/songs.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/forms.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section("content")
@include("forms.song-form")
@endsection