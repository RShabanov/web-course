<html>
    <head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        
        <title>@yield('title')</title>
        
        @stack("styles")

        <style>
            *, body {
                margin: 0;
                padding: 0;
            }
        </style>

    </head>
    <body>
        <header class="page-header">
            @include("includes.header")
        </header>

        <main class="page-main">
            @section('sidebar')
            @show

            <div class="container">
                @yield('content')
            </div>
        </main>

        <footer class="page-footer">
            @include("includes.footer")
        </footer>
    </body>
</html>