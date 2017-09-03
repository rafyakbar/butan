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
    {{--<link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    <style>
        #profil_image {
            text-align: center;
            margin-left: 0 auto;
            margin-right: 0 auto;
        }
    </style>

    <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mobile-1.4.5.min.js') }}"></script>
    <script src="{{ asset('js/my.js') }}"></script>
</head>
<body>
<div data-role="page" id="halaman">
    @include('user.header')
    <div data-role="main" class="ui-content" id="content">
        @yield('content')
    </div>
    @include('user.footer')
</div>
</body>
</html>
