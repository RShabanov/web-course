<link href="{{ asset('css/header.css') }}" rel="stylesheet" type="text/css" />

<div class="header">
    @if( auth()->check() )
    <div class="user">Welcome, {{ auth()->user()->name }}</div>
    @endif

    <nav class="page-header__nav">
        <span class="auth-nav">
            @if( auth()->check() )
            <a class="nav__a" href="{{ route('logout') }}">log out</a>
            @endif
        </span>
    </nav>
</div>