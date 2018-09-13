<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>dashboard</title>
        <link href="{{ asset('bootstrap/css/bootstrap-grid.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
        </nav>
        <div class="container">
            <div class="card description">
                <div class="card-body">
                    @yield('content');
                </div>
            </div>
        </div>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    </body>
</html>