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
    <script src="https://kit.fontawesome.com/9c78f9a948.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>
<body>
<div id="app" class="container-fluid">
    @if(Auth::check())
    @include('layouts.admin.navbar')
    <div class="row">
        @if(Auth::user()->isAdmin())
            @include('layouts.admin.sidebar')
        @endif
            @endif
        <main class="col-md-9 ml-sm-auto col-lg-10 py-lg-5 px-lg-5 mt-lg-5">
            @yield('content')
        </main>
       </div>


</div>
</body>
</html>
