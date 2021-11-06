<x-app-layout>
    <section>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
            <div class="container grid grid-cols-1 lg:grid-cols-5 gap-6">
                <div class="bg-gray-300">
                    <h1 class="text-2xl text-center mt-2">Nosotros</h1>
                    <ul>
                        <a  href="#sec1"><li class=" text-center hover:text-white bg-gray-300  hover:bg-gray-700 py-2"> Vision y Misión</li></a>
                        <a  href="#sec2"><li class=" text-center hover:text-white bg-gray-300  hover:bg-gray-700 py-2">Organización</li></a>
                        <a  href="#sec3"><li class=" text-center hover:text-white bg-gray-300  hover:bg-gray-700 py-2">Objetivos</li></a>
                        <a  href="#sec4"><li class=" text-center hover:text-white bg-gray-300  hover:bg-gray-700 py-2">Nuestros Asociados</li></a>
                        <a  href="#sec5"><li class=" text-center hover:text-white bg-gray-300  hover:bg-gray-700 py-2">Testimonios</li></a>
                        <a  href="#sec6"><li class=" text-center hover:text-white bg-gray-300  hover:bg-gray-700 py-2">Quienes noy Apoyan</li></a>
                        
                    </ul>
                    <div class="py-2 ">
                        <img class="mx-auto" src="{{asset('/img/home/logo2b.png')}}" alt="" style="width: 90px;">
                    </div>
                </div>
                <div class="col-span-4">
                    <img class="w-full"  src="{{asset('img/pages/nos.jpg')}}" alt="">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, ratione rem quam minus nemo autem et velit aliquid, numquam fuga odit at voluptatum vitae recusandae voluptatibus quibusdam ex illum neque?
                </div>
            </div>
            {{-- Sección de la VISION Y MISION--}}
            <div id="sec1" class="bg-gray-800 mt-2">
                <h3 class="text-white text-center text-2xl py-3">MISION Y VISIÓN INSTITUCIONAL</h3>
                <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6 px-6">
                    <div class=" px-3">
                        <h4 class="text-white text-center mt-3">MISION</h4>
                        <p class="text-white py-2">Ser un medio de difusión y promoción educativo para resaltar las experiencias y noticias en nuestro Estado Plurinacional de Bolivia, con el fin de contribuir al desarrollo y fortalecimiento del ámbito educativo y profesional del magisterio a través de un periodismo de excelencia, el mejor servicio y un alto sentido de ética personal y profesional por parte de todo el equipo que integra el periódico educaLibre.</p>
                    </div>
                    <div class=" px-3">
                        <h4 class="text-white text-center mt-3 ">VISION</h4>
                        <p class="text-white py-2">Ser un equipo editor líder, confiable y de excelencia, cuyos contenidos periodísticos y de servicios sean los mejores, basándose siempre en un trabajo de calidad y responsabilidad, tanto para nuestros lectores como para los clientes.</p>
                    </div>
                </div>
            </div>
            {{-- Sección de la OBJETIVOS--}}
            <div id="sec3">
                <h1 class="text-center text-2xl py-3">OBJETIVOS</h1>
                <div class="container px-6">
                    
                        <p>Promover y difundir todas las experiencias pedagógicas, historia y talento de maestras y maestros, principalmente, en educación, cultura, deporte, político sindical en sus más amplios matrices y expresiones.</p>
                        <p>Acercar, incluir y despertar la curiosidad en los lectores por conocer y valorar la experiencia de maestras y maestros de nuestro Estado Plurinacional de una manera amena y divertida.</p>
                        <p>Impulsar el habito de la lectura, ya que con ello se aprende y se despierta la imaginación.</p>
                        <p>Desarrollar en el lector la capacidad crítica y analítica sobre los contenidos y noticias mostrados en el periódico.</p>
                        <p>Fomentar los valores morales que rigen al periódico, pues son estos los que sustentan a nuestro prestigio como editorial responsable, honesta y seria.</p>
                    
                </div>
            </div>
            {{-- Sección de la ORGANIZACION--}}
            <div id="sec2" class="bg-gray-800 py-4">
                <h1 class="text-white text-center text-2xl py-2">NUESTRA ORGANIZACION</h1>
                <div class="bg-gray-700 rounded container grid grid-cols-1 lg:grid-cols-3 gap-6 px-6 py-2">
                    <div>
                        <h6 class="text-white font-bold">DIRECCION:</h6>
                        <ul class="px-6">
                            <li class="text-white">Lic. Walter Laura Soto</li>
                            <li class="text-white">Mgtr. Ed. Freddy Yucra Leon</li>
                            <li class="text-white">Lic. Ivan Flores Salaz</li>
                        </ul>
                    </div>
                    <div>
                        <h6 class="text-white font-bold">EDICION:</h6>
                        <ul class="px-6">
                            <li class="text-white">Lic. Jose Mamani Luna</li>
                            <li class="text-white">Lic. Eusevio Ordoñes Mamani</li>
                            <li class="text-white">Lic. Mamerto caceres Bernal</li>
                        </ul>
                    </div>
                    <div>
                        <h6 class="text-white font-bold">DIAGRAMACION:</h6>
                        <ul class="px-6">
                            <li class="text-white">Lic. Limbre Rodriguez Luna</li>
                            <li class="text-white">Lic. Arminda Lopez Juares</li>
                            <li class="text-white">Lic. Ambocio Nicolas Flores</li>
                        </ul>
                    </div>
                </div>
            </div>
             
            {{-- Sección de la nuestros ASOCIADOS--}}
            {{-- <div id="sec4" class="bg-blue-400">
                <h1 class="text-center text-2xl py-4">NUESTROS ASOCIADOS</h1>
                <div class="container grid grid-cols-1 lg:grid-cols-4 gap-6 px-6 py-6">
                    <div class="bg-red-500 ">
                        <h1 class="text-center ">DIRECCION</h1>
                        <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                        </ul>
                    </div>
                    <div class="bg-red-200">
                        <h1 class="text-center ">EDICION</h1>
                        <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                        </ul>
                    </div>
                    <div class="bg-red-600">
                        <h1 class="text-center ">DIAGRAMACION</h1>
                        <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                        </ul>
                    </div>
                    <div class="bg-red-600">
                        <h1 class="text-center ">DIAGRAMACION</h1>
                        <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                        </ul>
                    </div>
                </div>
            </div> --}}
            {{-- Sección de la nuestros TESTIMONIO--}}
            <div id="sec5" class="bg-GRAY-400">
                <h1 class="text-center text-2xl py-4">TESTIMONIOS</h1>
                <div class="container grid grid-cols-1 lg:grid-cols-3 gap-6 px-6 py-3">
                    <div class="bg-gray-100">
                        {{-- TESTIMONIO 1--}}
                        <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
                            <div class="flex justify-center md:justify-end -mt-16">
                              <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500" src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
                            </div>
                            <div>
                              <h2 class="text-gray-800 text-3xl font-semibold">Design Tools</h2>
                              <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur minus consequuntur!</p>
                            </div>
                            <div class="flex justify-end mt-4">
                              <a href="#" class="text-xl font-medium text-indigo-500">John Doe</a>
                            </div>
                        </div>
                    </div>
                    {{-- TESTIMONIO 2--}}
                    <div class="bg-gray-100">
                        <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
                            <div class="flex justify-center md:justify-end -mt-16">
                              <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500" src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
                            </div>
                            <div>
                              <h2 class="text-gray-800 text-3xl font-semibold">Design Tools</h2>
                              <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur minus consequuntur!</p>
                            </div>
                            <div class="flex justify-end mt-4">
                              <a href="#" class="text-xl font-medium text-indigo-500">John Doe</a>
                            </div>
                        </div>
                    </div>
                     {{-- TESTIMONIO 3--}}
                     <div class="bg-gray-100">
                        <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
                            <div class="flex justify-center md:justify-end -mt-16">
                              <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500" src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
                            </div>
                            <div>
                              <h2 class="text-gray-800 text-3xl font-semibold">Design Tools</h2>
                              <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur minus consequuntur!</p>
                            </div>
                            <div class="flex justify-end mt-4">
                              <a href="#" class="text-xl font-medium text-indigo-500">John Doe</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <hr>
            {{-- Sección de la quienes nos apoyan--}}
            <div id="sec6">
                <h1 class="text-center text-2xl py-4">Instituciones que nos brindan su apoyo</h1>
                <div class="container grid grid-cols-2 lg:grid-cols-6 gap-6 px-6 py-6">
                    <div class="mx-auto">
                        
                        <img class="w-full"  src="{{asset('img/home/logo2b.png')}}" alt="" style="width: 90px;">
                    </div>
                    <div class="mx-auto">
                        <img class="w-full"  src="{{asset('img/home/fede.png')}}" alt="" style="width: 90px;">
                        
                    </div>
                    <div class="mx-auto">
                        <img class="w-full"  src="{{asset('img/home/logoserco.png')}}" alt="" style="width: 90px;">
                        
                    </div>
                    <div class="mx-auto">
                        <img class="w-full"  src="{{asset('img/home/logo2b.png')}}" alt="" style="width: 90px;">
                        
                    </div>
                    <div class="mx-auto">
                        <img class="w-full"  src="{{asset('img/home/logo2b.png')}}" alt="" style="width: 90px;">
                        
                    </div>
                    <div class="mx-auto">
                        <img class="w-full"  src="{{asset('img/home/logo2b.png')}}" alt="" style="width: 90px;">
                        
                    </div>
                </div>
            </div>
        </div>
        <!--Boton de ir hacia arriba-->
        <div id="button-up">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
            </svg>
        </div>
    </section>
</x-app-layout>