@extends('layouts.app')

@section("title")
login
@endsection

@push("styles")
<link href="{{ asset('css/forms.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section("content")
@include("forms.login-form")
@endsection