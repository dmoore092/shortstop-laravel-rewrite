<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--icon library -->

    <meta name="author" content="Dale Moore">
    <meta name="description" content="We strive to provide High School and JUCO athletes the tools to successfully promote themselves to college coaches by assisting athletes through the recruiting process."/>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Follow US
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav" >
                    &nbsp;
                    <li><a href="http://www.facebook.com/Athletic-Prospects-191313784947225" target="_blank" class="fa fa-facebook"></a></li>
                    <li><a href="http://www.twitter.com/A_Prospects" target="_blank" class="fa fa-twitter"></a></li>
                    <li><a href="http://www.instagram.com/athleticprospects" target="_blank" class="fa fa-instagram"></a></li>
                    <li><a href="mailto:kprestano@athleticprospects.com" class="fa fa-envelope"></a></li>
                </ul>

                <ul class="nav navbar-nav">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/players">Browse Athletes</a></li>
                    <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/dashboard">Dashboard</a></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="header-search">
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col-md-auto col-sm-8">
                    <form action='results.php' method='POST' id="search-form" class="form-inline">
                        <div class="form-row">
                            <div class="col-auto">
                                <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="First or Last Name" name="search">
                                <input class="btn btn-default" id="header-search-btn" type="submit" name="search-btn" value="Search">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <main class="py-4">
        <div class="container">
            <div class="ml-5">
                <a href = "/"><img class="img-fluid" src = "/images/siteLogo.png" alt="Athletic Prospects Logo"/></a>
            </div>
        </div>
        @yield('content')
    </main>
</div>
</body>
</html>
