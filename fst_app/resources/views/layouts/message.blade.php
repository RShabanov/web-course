<html>
    <head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        
        <title>@yield('title')</title>
        
        <link href="{{ asset('css/common.css') }}" rel="stylesheet" type="text/css" />

        @stack("styles")

    </head>
    <body>
        <header class="page-header">
            @include("includes.header")
        </header>

        <main class="page-main">
            <div class="container">
                @yield('content')
            </div>
        </main>
    </body>
</html>