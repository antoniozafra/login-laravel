{{--LAYOUT PRINCIPAL--}}

<!DOCTYOE html>
<html>
    <head>
        <title>@yield('titulo', 'Login Laravel')</title>
        <link rel="stylesheet" href="/css/app.css">
        <script src="/js/app.js" defer></script>
        <meta name="csrf-token" content="{{ csrf_token()}}">
        <meta name="viewport" content="width=device-width, initial-scale=1">



    </head>
    <style>
        .active a{
            color: red;
            text-decoration: none;
            font-size: 1,2em;
            text-shadow: 4px 1px 8px  black;
        }
    </style>


    <body>
        <div id="app" class="d-flex flex-column h-screen">
            <header>
                @include('partials/nav')
            </header>

            <main>
                @yield('contenido')

            </main>
                
            <footer class="bg-white text-center shadow">
                {{config('app.name')}} |Copyright {{date('Y')}}
            </footer>

    </div>
        
    </body>

</html>