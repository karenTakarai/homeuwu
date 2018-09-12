<html lang="en">

<head>
    <meta charset="utf-8">
    <title>dashboard</title>
    <link href="{{ asset('bootstrap/css/bootstrap-grid.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>

</style>
<body>
    <div>
        @include('components.navbar')
    <div>
    <div id="wrapper" class="toggled">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="dashboard">Dashboard</a>
                </li>
                <li>
                    <a href="hoster">Shortcuts</a>
                </li>
                <li>
                    <a href="places">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            @yield('content')
        </div>
    </div>
</body>

</html>