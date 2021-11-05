<x-app-layout>
<section>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-cover container grid grid-cols-1 lg:grid-cols-2"style="background-image: url({{asset('img/home/periodico.jpg')}})">
                <div class="  text-white px-5 py-6 font-bold text-2xl">
                    <p>educaLibre sólo tendrá futuro si nos apoyas. Suscríbete para que podamos seguir investigando y haciendo periodismo de calidad.</p>
                </div>
                <div class="mx-auto">
                    <img class="mx-auto" style="width: 180px;" src="{{asset('img/home/logo2b.png')}}" alt="">
                </div>
        </div>
        </div>
        {{-- Espacio para articulos destacados --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="container grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="col-span-2 ">
                    @livewire('articles-index')
                </div>
                {{-- Sección de la publicidad--}}
                <div class=" bg-gray-100 py-8">

                    @livewire('editorial-index')

                </div>
            </div>
        </div>
        {{-- ESPACIO PARA SECCIONES--}}
        <div  class="col-span-1">
                @livewire('secciones-index')
        </div>
        
        <!--Boton de ir hacia arriba-->
        <div id="button-up">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
            </svg>
        </div>    
    </div>
</section>    
</x-app-layout>


