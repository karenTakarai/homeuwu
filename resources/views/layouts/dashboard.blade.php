<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>dashboard</title>
        <link href="{{ asset('bootstrap/css/bootstrap-grid.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div>
            @include('components.navbar')
        </div>
        <div id="wrapper" class="toggled">
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li>
                        <a href="hoster">Anfitrión</a>
                    </li>
                    <li>
                        <a href="places">Alojamientos</a>
                    </li>
                </ul>
            </div>
            <div id="page-content-wrapper">
                @yield('content')
            </div>
        </div>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    </body>
</html>