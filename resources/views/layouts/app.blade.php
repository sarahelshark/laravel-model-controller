<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="w  idth=device-width, initial-scale=1">

        <title>@yield('pageTitle', 'Larvel App')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Bootstrap CSS v5.2.1 -->
        <link
                    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
                    rel="stylesheet"
                    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
                    crossorigin="anonymous"
                />

        <!-- Styles -->
        @vite(['resources/js/app.js','resources/css/app.css'])
        
    </head>
    <body class="antialiased">

   @include('partials.header')
   <main>
     @yield('content')
   </main>
   @include('partials.footer')
        
        
    </body>
</html>
