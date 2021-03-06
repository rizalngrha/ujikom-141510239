<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
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
                    <a class="navbar-brand" href="{{ url('#') }}">
                        {{ config('', 'Penggajian') }}
                    </a>
                   
                    
                    
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    
                    <li>
                    <a href="{{ url('/Jabatan') }}">
                    {{ config('', 'Jabatan') }}
                    </a>
                    </li>
                    <li>
                    <a href="{{ url('/Golongan') }}">
                        {{ config('', 'Golongan') }}
                    </a>
                    </li>

                    <li>
                    <a  href="{{ url('/Kategori_Lembur') }}">
                        {{ config('', 'Kategori Lembur') }}
                    </a>
                    </li>

                    <li>
                    <a  href="{{ url('/Pegawai') }}">
                        {{ config('', 'Pegawai') }}
                    </a>
                    </li>

                    <li>
                    <a  href="{{ url('/Lembur_Pegawai') }}">
                        {{ config('', 'Lembur Pegawai') }}
                    </a>
                    </li>


                    <li>
                    <a  href="{{ url('/Tunjangan') }}">
                        {{ config('', 'Tunjangan') }}
                    </a>
                    </li>


                    <li>
                    <a  href="{{ url('/Tunjangan_Pegawai') }}">
                        {{ config('', 'Tunjangan Pegawai') }}
                    </a>
                    </li>


                    <li>
                    <a  href="{{ url('/Penggajian') }}">
                        {{ config('', 'Penggajian') }}
                    </a>
                    </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}"><!-- Login --></a></li>
                             @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
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

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
