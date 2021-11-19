@push("styles")
<link href="{{ asset('assets/css/includes/header.css') }}" rel="stylesheet" />
@endpush

@if( auth()->check() )
<div class="user"><h1>Welcome, {{ auth()->user()->name }}</h1></div>
@endif

<nav class="page-header__nav">
    @if( auth()->check() )
    <a class="nav__a" href="{{ route('logout') }}">log out</a>
    @else
    <a class="nav__a" href="{{ route('login') }}">log in</a>
    @endif
    <a class="nav__a" href="{{ route('register') }}">sign up</a>
</nav>