<x-app-layout>
    <section>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="container grid grid-cols-1 lg:grid-cols-5 gap-2 py-3">
                <div class="col-span-2">
                    <h1 class="text-blue-700 text-2xl px-2 py-4">Formulario de contacto</h1>
                    <div class="">
                        <form class="bg-white shadow-md rounded pt-6 pb-8 mb-4 px-2">
                          <div class="mb-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                              Nombre
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
                          </div>
                          <div class="mb-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                              Correo
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
                          </div>
                          <div class="mb-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                              N° de Teléfomo
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
                          </div>
                          <div class="mb-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                              Asunto
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" >
                          </div>
                          <div class="mb-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                              Menzaje
                            </label>
                            <textarea class="form-textarea mt-1 block w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="3" ></textarea>
                          </div>
                          <div class="flex items-center justify-between">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                              Enviar
                            </button>
                          </div>
                        </form>
                        <p class="text-center text-gray-500 text-xs">
                          &copy;2020 Acme Corp. All rights reserved.
                        </p>
                      </div>
                </div>
                <div class=" col-span-3 mt-14">
                    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-2 px-3">
                        <div>
                            <!-- card -->
                            <div class="shadow-lg rounded p-4 relative overflow-hidden">
                                    <div class="w-full py-2 px-2">
                                        <p class="text-red-600 text-xl font-medium mb-2">
                                            Caracollo
                                        </p>
                                        <p class="text-gray-700 text-xs  mb-2">
                                            Final Sgto. Nuñez y Sucre S/N Zona Sud.
                                        </p>
                                        <p class="text-gray-700 text-xs mb-4">
                                            Lic. Walter Laura Soto +591-69590211
                                        </p>
                                    </div>
                            </div>
                        </div>
                        <div>
                            <!-- card 2-->
                            <div class="shadow-lg rounded p-4 relative overflow-hidden">
                                <div class="w-full py-2 px-2">
                                    <p class="text-red-600 text-xl font-medium mb-2">
                                        Oruro
                                    </p>
                                    <p class="text-gray-700 text-xs  mb-2">
                                        Calle 21 de Calacoto No. 8350 Edificio Monrroy Veliz, Oruro
                                    </p>
                                    <p class="text-gray-700 text-xs mb-4">
                                        Mgtr. Ed. Fredy Yucra Leon        +591-71856121
                                    </p>
                                </div>
                        </div>
                        </div>
                        <div>
                            <!-- card 3-->
                            <div class="shadow-lg rounded p-4 relative overflow-hidden">
                                <div class="w-full py-2 px-2">
                                    <p class="text-red-600 text-xl font-medium mb-2">
                                        La Paz - Zona Sur
                                    </p>
                                    <p class="text-gray-700 text-xs  mb-2">
                                        Calle 21 de Calacoto No. 8350 Edificio Monrroy Veliz, La Paz
                                    </p>
                                    <p class="text-gray-700 text-xs mb-4">
                                        Mgtr. Ivan Flores Salas +591-85215254
                                    </p>
                                </div>
                        </div>
                        </div>
                    </div>
                    <div class="px-3  mt-4">
                        <iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3287.3669596408326!2d-67.21651474296114!3d-17.6380415566684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses-419!2sbo!4v1634427519518!5m2!1ses-419!2sbo" width="710" height="295" style="border:0;" allowfullscreen="" loading="lazy"></iframe>   
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>