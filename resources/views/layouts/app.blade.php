<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{--<!-- Styles -->--}}
    <link rel="stylesheet" href="{{ asset('css/jquery.mobile-1.4.5.min.css') }}">

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery.mobile-1.4.5.min.js') }}"></script>
</head>
<body>
{{--<nav class="navbar navbar-default navbar-static-top">--}}
{{--<div class="container">--}}
{{--<div class="navbar-header">--}}

{{--<!-- Collapsed Hamburger -->--}}
{{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
{{--<span class="sr-only">Toggle Navigation</span>--}}
{{--<span class="icon-bar"></span>--}}
{{--<span class="icon-bar"></span>--}}
{{--<span class="icon-bar"></span>--}}
{{--</button>--}}

{{--<!-- Branding Image -->--}}
{{--<a class="navbar-brand" href="{{ url('/') }}">--}}
{{--{{ config('app.name', 'Laravel') }}--}}
{{--</a>--}}
{{--</div>--}}

{{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
{{--<!-- Left Side Of Navbar -->--}}
{{--<ul class="nav navbar-nav">--}}
{{--&nbsp;--}}
{{--</ul>--}}

{{--<!-- Right Side Of Navbar -->--}}
{{--<ul class="nav navbar-nav navbar-right">--}}
{{--<!-- Authentication Links -->--}}
{{--@if (Auth::guest())--}}
{{--<li><a href="{{ route('login') }}">Login</a></li>--}}
{{--<li><a href="{{ route('register') }}">Register</a></li>--}}
{{--@else--}}
{{--<li class="dropdown">--}}
{{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
{{--{{ Auth::user()->name }} <span class="caret"></span>--}}
{{--</a>--}}

{{--<ul class="dropdown-menu" role="menu">--}}
{{--<li>--}}
{{--<a href="{{ route('logout') }}"--}}
{{--onclick="event.preventDefault();--}}
{{--document.getElementById('logout-form').submit();">--}}
{{--Logout--}}
{{--</a>--}}

{{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--{{ csrf_field() }}--}}
{{--</form>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--@endif--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--</nav>--}}

<div data-role="page" id="pageone">
    <div data-role="header" data-position="fixed">
        @if(Auth::check())
            <a href="#menuHeaderLeft" data-rel="popup" data-transition="flip" class="ui-btn ui-corner-all ui-shadow ui-icon-bars ui-btn-icon-left">Menu</a>
            <a href="#menuHeaderRight" data-rel="popup" data-transition="flip" class="ui-btn ui-corner-all ui-shadow ui-icon-carat-d ui-btn-icon-left">{{ explode(' ',Auth::user()->nama)[0] }}</a>
            <div data-role="popup" id="menuHeaderRight" class="ui-content">
                <ul data-role="listview">
                    <li><a href="#">Profil</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
document.getElementById('logout-form').submit();">Keluar</a></li>
                </ul>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            <div data-role="popup" id="menuHeaderLeft" class="ui-content">
                <ul data-role="listview">
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Daftar Teman</a></li>
                    <li><a href="#">Pengaturan</a></li>
                </ul>
            </div>
        @endif
        <h1>BuTan</h1>
    </div>

    <div data-role="main" class="ui-content">
        @yield('content')
    </div>

    <div data-role="footer" data-position="fixed">
        <h1>Copyright BuTan 2017</h1>
    </div>
</div>

</body>
</html>
