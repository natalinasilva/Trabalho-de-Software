</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="./css/style.css">
        
    </head>
    <body class="antialiased">
        
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 content">
                    <div id="titulo">
                        <h1> Web Biblioteca S2</h1>
                        
                    </div>
                    <div id="opcoes">
                        @if(Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-end">
                            @auth
                        <a
                            href="{{url('/dashboard') }}"
                            class="custon-button"
                        >
                            Dashboard
                        </a>
                        @else
                        <a
                        href="{{ route('login') }}"
                            class="custon-button"
                        >
                            Log in
                        </a>
                        @if(Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="custon-button"
                        >
                            Register
                        </a>
                    @endif
                 @endauth
             </nav>
             @endif
             @endif
        </div>
        </div>
    </body>
</html>