<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        
        @if (file_exists(public_path('build/manifest.json')))
            @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @else
            <!-- Vite manifest absent (tests/time CI). Assets non requis pour comportement back-end. -->
        @endif
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark dark">
            <a class="navbar-brand" href="/">Ma Todo List</a>
            <a class="navbar-brand btn btn-primary" href="liste"><i class="bi bi-app"></i>Liste</a>
            <a class="navbar-brand btn btn-primary" href="search">Rechercher</a>
            <a class="navbar-brand btn btn-primary" href="liste">Liste</a>
            <a class="navbar-brand btn btn-danger" href="compteur">Compteur</a>
            <a class="navbar-brand btn btn-danger" href="planning">planning</a>
            <a class="navbar-brand btn btn-danger" href="profile">Profile Utilisateur</a>
        </nav>

        @yield('content')
        @if (file_exists(public_path('build/manifest.json')))
            @vite(['resources/js/app.js'])
        @endif

    </body>
</html>