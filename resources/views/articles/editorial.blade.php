<x-app-layout>
    <section class="grid grid-cols-1 lg:grid-cols-5 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 gap-4 py-4">
        <figure class="col-span-4 px-3">
            <div class="flex">
                <i class="material-icons text-red-500">storage</i>
                      <h4 class="text-red-600 font-bold">-- {{$editorial->category->name}} </h4>
                <i class="material-icons text-red-500">chevron_right</i>
            </div> 
            <h2 class=" leading-10 py-2 font-bold font-serif">{{$editorial->title}}</h2>
            <p class="mb-1"><span class="font-bold text-red-700">Escrito por: {{$editorial->teacher->name}}</span> / educalibre@gmail.com</p>
            <p>Publicado el: {{$editorial->created_at}}</p>
            <i class="fab fa-whatsapp"></i>
            <div class="py-2  font-serif text-lg text-justify">
                {!!$editorial->description!!}
            </div>
            <h5 class=" py-2">Escrito por: {{$editorial->teacher->name}}</h5>
            
            
            
        </figure>
        <div class="bg-gray-200">
          
        </div>
    </section>
</x-app-layout>