<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>dashboard</title>
        <link href="{{ asset('bootstrap/css/bootstrap-grid.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        <div class="container">
            @yield('content');
        </div>
    </body>
</html>