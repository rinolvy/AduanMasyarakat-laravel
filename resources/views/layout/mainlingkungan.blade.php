<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="images/opinion.svg">
    <link rel="stylesheet" href="bulma/css/bulma.css">
    <link rel="stylesheet" href="bulma/css/bulma.min.css">
    <link rel="stylesheet" href="bulma/bulma.sass">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="fontawesome/css/brands.css">
      <link rel="stylesheet" href="fontawesome/css/solid.css">
</head>

<body>
    @yield('navbar')
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{url('/')}}">
                <img src="images/opinion.svg" width="50" height="50">
            </a>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbar" class="navbar-menu ">
            <div class="navbar-start">
                <a class="navbar-item text-decoration-none" href="{{url('/')}}">
                    Pemberitahuan
                </a>
                <a class="navbar-item text-decoration-none" href="{{url('/tentangkami')}}">
                    Tentang Kami
                </a>
                <div class="navbar-item has-dropdown is-hoverable ">
                    <h6 class="navbar-link text-decoration-none">
                        Laporkan Segera
                    </h6>
                    <div class="navbar-dropdown">
                        <a class="navbar-item text-decoration-none" href="{{url('/login')}}">
                            Rumah Tangga
                        </a>
                        <a class="navbar-item text-decoration-none" href="{{url('/login')}}">
                            Pembuangan Limbah
                        </a>
                        <a class="navbar-item text-decoration-none" href="{{url('/login')}}">
                            Tetangga Rumah
                        </a>
                        <hr class="navbar-divider text-decoration-none" href="{{url('/login')}}">
                        <a class="navbar-item">
                            Lainnya
                        </a>
                    </div>
                </div>
                <a class="navbar-item text-decoration-none" href="{{url('/kontak')}}">
                    Hubungi Kami
                </a>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">

                    @if (Route::has('login'))
                    <div class="buttons">
                        @auth
                        <div class="navbar-item has-dropdown is-hoverable ">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/home" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               <i class="fas fa-user mr-2"></i>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="navbar-dropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </div>
                        </div>
                        @else
                        <a class="button is-primary text-decoration-none" href="{{ url('/login') }}">
                            <strong>Sign in</strong>
                        </a>

                        @if (Route::has('register'))
                        <a class="button is-light text-decoration-none" href="{{ url('/register') }}">
                            Sign up
                        </a>
                        @endif
                        @endauth
                    </div>
                    @endif
                </div>

            </div>
        </div>
    </nav>
    @yield('content')



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>

</html>
