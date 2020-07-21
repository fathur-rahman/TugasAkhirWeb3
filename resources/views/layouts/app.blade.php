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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body style="min-height: 1000p;">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark border-white shadow-sm">
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
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <!-- <a href="/posting/create">
                            <div class="container">
                                <button class="btn btn-primary">
                                    Tambah Posting
                                </button>
                            </div>
                        </a> -->
                        <li class="nav-item dropdown ">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret bg-dark text-white"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right bg-dark text-white border-white" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item bg-dark text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
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
                @auth
                @if(isset(Auth::user()->profile))
                <a href="/profile/{{Auth::user()->id}}"> <img src="{{asset('avatar/'.Auth::user()->profile->avatar)}}" class='rounded-circle bg-white' style="object-fit: cover; padding-right 10p" height="30" disabled='false' width="30" > </a>
                @endif
                @endauth
            </div>
        </nav>

        <main class="py-4 bg-secondary" >
            <div id="page-container" style="  min-height: 73vh;">
                <div id="content-wrap">
                    @yield('content')
                </div>

            </div>
        </main>

        <footer id="footer" class="footer bg-dark text-white" style="position: relative; bottom: 0;  width: 100%; height:5.3rem;">
            <div class="container">
                <p> FATHUR RAHMAN HAIKAL <br>
                    TI-6A 2020 <br>
                    PEMROGRAMAN WEB 3</p>
            </div>
        </footer>

    </div>


</body>

</html>