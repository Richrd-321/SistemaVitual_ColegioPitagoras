<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <title>I.E. PITAGORAS - @yield('titulo')</title>

        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        @vite('resources/css/app.css')

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>

    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">

            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">
                    I.E. PITAGORAS
                </h1>

                <!--Validando al autenticacion-->
                @auth
                    <nav class="flex gap-2 items-center">
                        <a class="font-blod text-gray-600 font-bold" href="#">
                            HOLA: 
                            <span class="font-normal" 
                                {{ auth()->user()->name  }}>
                            </span>
                        </a>

                        <form action="{{ route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="font-blod uppercase text-gray-600 font-bold" 
                            href="{{ route('logout') }}"">Cerrar Sesión</button>
                        </form>
          
                    </nav>
                @endauth


                @guest
                    <nav class="flex gap-2 items-center">
                        <a class="font-blod uppercase text-gray-600 font-bold" 
                        href="{{ route('login') }}">Login</a>
                        <a class="font-blod uppercase text-gray-600 font-bold" 
                        href="{{ route('register') }}"">Crear Cuenta</a>
                    </nav>
                @endguest
                

                
            </div>

        </header>

        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>

            @yield('contenido')
        </main>


        <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
            I.E. Pitagoras - Todos los derechos reservados {{ now()->year }}
            
        </footer>

        
        
    </body>
</html>
