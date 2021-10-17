<x-app-layout>
    <section>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
            <div class="container grid grid-cols-1 lg:grid-cols-5 gap-6">
                <div class="bg-gray-300">
                    <h1 class="text-2xl text-center py-4">Nosotros</h1>
                    <hr>
                    <ul>
                        <a  href="#sec1"><li class=" text-center hover:text-white bg-gray-300  hover:bg-gray-700 py-4"> Vision y Misión</li></a>
                        <a  href="#sec2"><li class=" text-center hover:text-white bg-gray-300  hover:bg-gray-700 py-4">Organización</li></a>
                        <a  href="#sec3"><li class=" text-center hover:text-white bg-gray-300  hover:bg-gray-700 py-4">Objetivos</li></a>
                        <a  href="#sec4"><li class=" text-center hover:text-white bg-gray-300  hover:bg-gray-700 py-4">Nuestros Asociados</li></a>
                        <a  href="#sec5"><li class=" text-center hover:text-white bg-gray-300  hover:bg-gray-700 py-4">Testimonios</li></a>
                        <a  href="#sec6"><li class=" text-center hover:text-white bg-gray-300  hover:bg-gray-700 py-4">Quienes noy Apoyan</li></a>
                        
                    </ul>
                    <div class="py-5 ">
                        <img class="mx-auto" src="{{asset('/img/home/logo2b.png')}}" alt="" style="width: 90px;">
                    </div>
                </div>
                <div class="col-span-4">
                    <img class="w-full"  src="{{asset('img/pages/nos.jpg')}}" alt="">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, ratione rem quam minus nemo autem et velit aliquid, numquam fuga odit at voluptatum vitae recusandae voluptatibus quibusdam ex illum neque?
                </div>
            </div>
            {{-- Sección de la VISION Y MISION--}}
            <div id="sec1" class="bg-gray-400 mt-6">
                <h1 class="text-center text-2xl py-3">VISIÓN Y MISION INSTITUCIONAL</h1>
                <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6 px-6 py-6">
                    <div class="bg-red-500 rounded-xl px-3">
                        <h1 class="text-center mt-3">MISION</h1>
                        <p class="py-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, culpa voluptate incidunt enim modi eaque minima cupiditate consequatur nihil ab quo consequuntur esse commodi recusandae perferendis repellendus asperiores inventore adipisci.</p>
                    </div>
                    <div class="bg-red-200 rounded-lg px-3">
                        <h1 class="text-center ">VISION</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat dolore ratione quae consequatur error cumque nobis sit. Molestias magnam, recusandae vitae incidunt et vero quo quia delectus ea officia nisi.</p>
                    </div>
                </div>
            </div>
            {{-- Sección de la ORGANIZACION--}}
            <div id="sec2" class="bg-blue-400">
                <h1 class="text-center text-2xl py-4">NUESTRA ORGANZACION</h1>
                <div class="container grid grid-cols-1 lg:grid-cols-3 gap-6 px-6 py-6">
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
                </div>
            </div>
             {{-- Sección de la OBJETIVOS--}}
             <div id="sec3" class="bg-gray-400">
                <h1 class="text-center text-2xl py-3">OBJETIVOS</h1>
                <div class="container px-6 py-6">
                   <h1>objetivo general</h1>
                   <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur, facere. Aliquam odit magnam, fugiat error eveniet cum laboriosam explicabo, reprehenderit beatae deserunt sapiente illo tempore aliquid recusandae voluptatem totam quis?</p>
                   <h1>objetivos especificos</h1> 
                   <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti animi amet inventore optio aut a nam praesentium deleniti veritatis, commodi possimus voluptas laborum doloremque! Totam debitis blanditiis eaque quia quam!</P>
                </div>
            </div>
            {{-- Sección de la nuestros ASOCIADOS--}}
            <div id="sec4" class="bg-blue-400">
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
            </div>
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