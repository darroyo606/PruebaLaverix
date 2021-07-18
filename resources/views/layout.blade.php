<!DOCTYPE html>
<html>
    <head>
    <title>@yield('title','aprendible')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <script src="{{mix('js/app.js')}}" defer></script>
    
    </head>
    <body>
        <div id="app" class="d-flex flex-column h-screen justify-content-between"> 
            <header>
            @include('partials.nav')

            @include('partials.sesion-status')

            </header>
            <main>
            @yield('content')
            </main>


            <footer c;ass="text-center text-black-50 py-3 shadow">
                {{config('app.name')}}|Coyright{{date('Y')}}

            </footer>
        </div>
    </body>
</html>