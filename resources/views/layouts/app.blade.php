<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>E-Library</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">
</head>

<body>
    <div class="d-flex" id="wrapper">
        @if(url()->current() != route('login') && url()->current() != route('register') && url()->current() != route('registerLibrarian'))
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading text-light" style="background-color:#eb6b34;">E-Library</div>
            <div class="list-group list-group-flush">
                @if (auth()->user()->role == "student")
                    <a href="/" class="list-group-item list-group-item-action bg-light">Books</a>
                    <a href="{!! route('book.index') !!}" class="list-group-item list-group-item-action bg-light">My Book</a>
                    <a href="{!! route('notif.index') !!}" class="list-group-item list-group-item-action bg-light">Notification</a>
                    <a href={!! route('profile.edit', auth()->user()->id) !!} class="list-group-item list-group-item-action bg-light">Profile</a>
                    <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="list-group-item list-group-item-action bg-light">Logout</a>
                    <form id="logout-form" action="{{ route("logout") }}" method="POST" style="display:none;">
                        @csrf
                    </form>
                @else
                    <a href="/" class="list-group-item list-group-item-action bg-light">Books</a>
                    <a href="{!! route('book.create') !!}" class="list-group-item list-group-item-action bg-light">Add Book</a>
                    <a href="{!! route('notif.create') !!}" class="list-group-item list-group-item-action bg-light">Add Notification</a>
                    <a href="{!! route('profile.edit', auth()->user()->id) !!}" class="list-group-item list-group-item-action bg-light">Profile</a>
                    <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="list-group-item list-group-item-action bg-light">Logout</a>
                    <form id="logout-form" action="{{ route("logout") }}" method="POST" style="display:none;">
                        @csrf
                    </form>
                @endif
            </div>
        </div>
        <!-- /#sidebar-wrapper -->
        @endif

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color:#eb6b34; height:60px">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                                @if (isset(auth()->user()->firstname))
                                    <li class="nav-item">
                                        <a class="nav-link text-light" href="{!! route('profile.edit', auth()->user()->id) !!}">Welcome, {{ auth()->user()->firstname }}</a>
                                    </li>
                                @endif
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container-fluid">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <script src={{ asset("vendor/jquery/jquery.min.js") }}></script>
    <script src={{ asset("js/bootstrap.bundle.min.js") }}></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
    @stack('js')
</body>
@include('sweetalert::alert')

</html>
