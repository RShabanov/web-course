@extends('layouts.app')

@section("title")
create account
@endsection

@push("styles")
<link href="{{ asset('css/forms.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section("content")
@include("forms.register-form")
@endsection