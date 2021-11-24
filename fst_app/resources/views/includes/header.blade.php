<link href="{{ asset('css/header.css') }}" rel="stylesheet" type="text/css" />

<div class="header">
    <div class="site-name">
        <a href="{{ route('home') }}" class="home_ref">MusicFlow</a>
    </div>

    <nav class="page-header__nav">
        <span class="auth-nav">
            @if( auth()->check() )
            <a class="nav__a" href="{{ route('user') }}">Profile</a>
            <a class="nav__a" href="{{ route('add-song') }}">Add song</a>
            <a class="nav__a" href="{{ route('logout') }}">Log out</a>
            @else
            <a class="nav__a" href="{{ route('login') }}">Log in</a>
            <a class="nav__a" href="{{ route('register') }}">Sign up</a>
            @endif
        </span>
    </nav>
</div>