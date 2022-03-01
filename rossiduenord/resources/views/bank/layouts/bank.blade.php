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
</head>
<body>
    <div id="app">

        <div class="container-custom d-flex">
            <nav class="navbar">
                <div class="my-4 ml-4">
                    <img src="{{asset('img/logo.svg')}}" alt="">
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item nav-pills">
                        <a class="nav-link {{Route::currentRouteName() == 'bank.dashboard' ? 'activ' : ''}}" href="{{route('bank.dashboard')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{Route::currentRouteName() == 'bank.users.index' ? 'activ' : ''}}" href="{{route('bank.users.index')}}">Gestione Utenti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() == 'bank.folder.index' ? 'activ' : ''}}" href="{{route('bank.folder.index')}}" href="#">Gestione Cartelle/File</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Gestione Pratiche</a>
                    </li>
                </ul>
            </nav>

            <div class="big-container">
                @include('bank.layouts.partials.header')
                
                <main>
                    @yield('content')
                </main>    
            </div>
        </div>       
    </div>
</body>
</html>
