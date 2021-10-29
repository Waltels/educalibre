<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'educalibre') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/boton.css') }}">
        <link rel="stylesheet" href="{{asset('css/material-dashboard.css?v=2.2.2')}}">
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link rel="stylesheet" href="{{'asset/demo.css'}}"  />

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{ asset('js/boton.js') }}" defer></script>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap-material-design.min.js')}}"></script>
        


  
        
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Content -->
            <div class="container py-8 grid grid-cols-5 gap-4">
                <aside>
                    <h1 class="font-bold text-xl mb-4 text-center">Edición del Artículo</h1>
                    <ul class="py-2">
                        <li class="leading-7 mb-1 border-l-4 border-indigo-400  pl-2 py-2">
                            <a href="{{route('editor.articles.edit', $article)}}">Información del Artículo</a>
                        </li>
                        <li class="leading-7 mb-1 border-l-4 border-transparent pl-2 py-2">
                            <a href="#">Observaciones del Artículo</a>
                        </li> 
                    </ul>
                    @switch($article->status)
                    @case(1)
                        <form action="{{route('editor.articles.status', $article)}}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit">Solicitar revisión</button>
                        </form>
                        @break
                    @case(2)
                        <div class="card text-red-300 px-4">
                            <div class="card-body px-2">
                                <p class="text-blue-800 text-center">Este artículo fue enviado a revisión, nuestro equipo de editores analizara su trabajo y le presentara alguna observacion si existe o se publicara.</p>
                                <p class="bg-gray-100 px-0 text-gray-800  font-bold text-lg text-center"> <span class="text-lx text-red-600">educa</span><span class="text-blue-800">Libre</span> agradece su aporte a nuestro blog.</p>
                            </div>
                        </div>
                        @break
        
                    @case(3)
                        <div class="card text-green-300">
                            <div class="card-body">
                                <p class="text-blue-800 text-center">Este artículo se encuentra publicado en nuestra web educaLibre.com</p>
                                <p class="bg-gray-100 px-0 text-gray-800  font-bold text-lg text-center"> <span class="text-lx text-red-600">educa</span><span class="text-blue-800">Libre</span> agradece su aporte a nuestro blog.</p>
                            </div>
                        </div>
                        @break
                    @default
                        
                @endswitch
        
        
                </aside>
                <main class="col-span-4 card">
                    {{$slot}}
        
                </main>
        
            </div>

            <!-- endpage Content -->
        </div>

        @stack('modals')

        @livewireScripts
        @isset($js)
            {{$js}}
        @endisset
    </body>
</html>
