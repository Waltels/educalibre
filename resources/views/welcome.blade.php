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
        <div class="container grid grid-cols-1 lg:grid-cols-3 gap-2">
            <div class="col-span-2 ">
                <h1 class="font-serif font-bold text-3xl px-5 py-3">El Gobierno aprueba la mayor inversión pública de la historia en unos Presupuestos que priorizan el gasto social</h1>
                <p class="font-serif px-5">Nunca antes la inversión pública y el gasto social habían alcanzado los niveles que se prevén para las cuentas de 2.022.</p>
                <hr>
                <p class="px-5"><span class="font-bold" >José Enrique Monrosi</span>  <span>6 Comentarios</span></p>
                <img  src="{{asset('img/home/nota.jpg')}}" alt="">
                <p class="px-2 font-serif">Sin casa, sin trabajo y sin expectativas. La realidad de los jóvenes en España está lejos de ser idílica. El 38% de los menores de 25 años está en paro y más del 80% no puede emanciparse. A finales de 2020 tan solo un 15,8 % de los jóvenes entre 16 y 29 años habían logrado abandonar el hogar de su padres y madres, la peor cifra desde el año 1999 según datos del Consejo de la Juventud de España.</p>
                <hr>
                <div>
                    <div class="container grid grid-cols-1 lg:grid-cols-2 gap-2 py-2">
                        <div class="bg-red-200">
                            <img class="bg-cover" src="{{asset('img/home/nota.jpg')}}" alt="">
                        </div>
                        <div>
                            <p class="font-serif text-3xl px-3">El Gobierno se lanza a "democratizar" con becas la carrera judicial en pleno bloqueo del PP al CGPJ</p>
                            <p class="px-3"><span class="font-bold" >José Enrique Monrosi</span>  <span>6 Comentarios</span></p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="container grid grid-cols-1 lg:grid-cols-2 gap-2 py-2">
                        <div class="bg-red-200">
                            <img class="bg-cover" src="{{asset('img/home/nota.jpg')}}" alt="">
                        </div>
                        <div>
                            <p class="font-serif text-3xl px-3">El Gobierno se lanza a "democratizar" con becas la carrera judicial en pleno bloqueo del PP al CGPJ</p>
                            <p class="px-3"><span class="font-bold" >José Enrique Monrosi</span>  <span>6 Comentarios</span></p>
                        </div>
                    </div>
                </div>
                <hr>
                <h1 class="font-serif text-3xl px-3 py-2">Montero dice que los Presupuestos cuentan con "holgura" para prorrogar las medidas fiscales contra el alza de la luz</h1>
                <hr>
                <div>
                    <div class="container grid grid-cols-1 lg:grid-cols-2 gap-2 py-2">
                        <div class="bg-red-200">
                            <img class="bg-cover" src="{{asset('img/home/nota.jpg')}}" alt="">
                        </div>
                        <div>
                            <p class="font-serif text-3xl px-3">El Gobierno se lanza a "democratizar" con becas la carrera judicial en pleno bloqueo del PP al CGPJ</p>
                            <p class="px-3"><span class="font-bold" >José Enrique Monrosi</span>  <span>6 Comentarios</span></p>
                        </div>
                    </div>
                </div>
            
            
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
            <h1>Categoria educación</h1>
            <div class="container grid grid-cols-1 lg:grid-cols-3 gap-2">
                <div class="bg-red-200">
                    <p>bloque 1</p>
                </div>
                <div class="bg-red-400">
                    <p>BLOUQE 2</p>
                </div>
                <div class="bg-red-400">
                    <p>BLOUQE 3</p>
                </div>
            </div>
        </div>
        {{-- ESPACIO PATA LA CATEGORIA DEPORTES--}}
        <hr>
        <div >
            <h1>Categoria Deportes</h1>
            <div class="container grid grid-cols-1 lg:grid-cols-3 gap-2">
                <div class="bg-red-200">
                    <p>bloque 1</p>
                </div>
                <div class="bg-red-400">
                    <p>BLOUQE 2</p>
                </div>
                <div class="bg- bg-red-600">
                    <p>bloque 3</p>
                </div>
            </div>
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


