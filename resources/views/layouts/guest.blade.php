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
    <link href="{{asset('css/appstyle.css')}}" rel="stylesheet">
    <link href="{{asset('css/contact.css')}}" rel="stylesheet">
    <link href="{{asset('css/about.css')}}" rel="stylesheet">    
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
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
                                <ul class="dropdown-menu" style="font-size: 15px">
                                  <li class="nav-item"><a class="nav-link" href="/userPackage">Packages</a></li>
                                  <li  class="nav-item"><a class="nav-link" href="/userChannel">Channel list</a></li>
                                  <li class="nav-item"><a class="nav-link" href="/about">About us</a></li>
                                </ul>
                             </li>
                        @else
                            <li class="nav-item dropdown pl-5 text-capitalize" >
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i style="font-size: 20px" class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="/userProfile/{{ Auth::user()->id }}" class="dropdown-item btn btn-primary">Profile</a>
                                    <a class="dropdown-item" href="/package">Packages</a>
                                    <a class="dropdown-item" href="/channel">Channel list</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

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
            @yield('content')
            @include('inc.footer')
        </main>
    </div>
</body>
</html>
