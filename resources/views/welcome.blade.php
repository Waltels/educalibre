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
                <div class="py-5 bg-blue-300">
                    <img class="mx-auto" src="{{asset('/img/home/logoserco.png')}}" alt="" style="width: 110px;">
                    <h1 class="text-center"><strong>SERC<span class="text-red-700">ONED</span> </strong></h1>
                    <p class="text-center">Servicio de Consultoria en Educacion</p>
                </div>
                <div class="container grid grid-cols-2 lg:grid-cols-2 py-5 bg-red-400">
                    <div>
                        <img class="mx-auto" src="{{asset('/img/home/fede.png')}}" alt="" style="width: 135px;">
                        
                    </div>
                    <div class="py-5">
                        <h1 class="font-serif text-center text-2xl"><strong>F.D.M.E.R.O.</strong></h1>
                        <p class="text-center font-serif px-2">Tu federación a tu servcio.</p>
                    </div>
                </div>
                <div>
                    <img class="mx-auto" src="{{asset('/img/home/p1.jpg')}}" alt=""  alt="">
                </div>
            </div>
        </div>
        <hr>
        {{-- ESPACIO PATA LA CATEGORIA EDUCACION--}}
        <div >
            @livewire('educacion-index')
        </div>
        {{-- ESPACIO PATA LA CATEGORIA DEPORTES--}}
        <hr>
        <div >
            <h1>Categoria Deportes</h1>
            
        </div>






        
        <!--Bpestañas-->
 


        
        <!--Boton de ir hacia arriba-->
        <div id="button-up">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
            </svg>
        </div>
        
    </div>
</section>    
</x-app-layout>


