<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/appstyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="app">
        <div id="top_header_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="contact">
                            <li><i class="fas fa-phone"></i>Call Us: 002 0102 7764541</li>
                            <li><i class="fas fa-envelope"></i>Email Us: example@test.com</li>
                        </ul>
                    </div>
                    <div class="col-md-6" >
                        <ul class="social">
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-youtube"></i></a></li>
                            <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-md navbar-light shadow-sm" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    Cable Operator Management System
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="font-size: 15px;text-transform: capitalize">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item pr-4">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item pr-4">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            
                            <li class="nav-item pr-4">
                                <a class="nav-link" href="/contact">Contact</a>
                            </li>
                            <li class="dropdown nav-item" style="font-size: 15px;">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Menu<b class="caret"></b></a>
                                <ul class="dropdown-menu" id="dropOption">
                                  <li class="nav-item"><a class="nav-link" href="/userPackage">Packages</a></li>
                                  <li  class="nav-item"><a class="nav-link" href="/userChannel">Channel list</a></li>
                                  <li class="nav-item"><a class="nav-link" href="/about">About us</a></li>
                                </ul>
                             </li>
                        @else
                            <li class="nav-item pr-4">
                                <a class="nav-link" href="/contact">Contact</a>
                            </li>
                            <li class="dropdown nav-item" style="font-size: 15px;">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Menu<b class="caret"></b></a>
                                <ul class="dropdown-menu" style="font-size: 15px">
                                    <li><a class="nav-link" href="/payment">Payment</a></li>
                                <li class="nav-item"><a class="nav-link" href="/package">Packages</a></li>
                                <li  class="nav-item"><a class="nav-link" href="/channel">Channel list</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Others</a></li>
                                <li class="nav-item"><a class="nav-link" href="/about">About us</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown pl-5">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i style="font-size: 20px" class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a href="/userDashboard" class="dropdown-item">Dashboard</a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @include('inc.slide')
            @yield('content')
            @include('inc.footer')
        </main>
    </div>
</body>
</html>
