<x-app-layout>
    <section class="grid grid-cols-1 lg:grid-cols-5 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 gap-4 py-4">
        <figure class="col-span-4 px-3">
            <div class="flex divide-y">
                <h4>{{$article->category->name}} </h4>
                <i class="material-icons">spoke</i> <p class="text-red-600 font-bold">  ------------------------</p>
            </div> 
            <h2 class=" leading-10 py-2 font-bold font-serif">{{$article->title}}</h2>
            <p class=" leading-8 text-xl font-serif">{{$article->subtitle}}</p>
            <p>redes sociales</p>
            <img class="h-80 w-full object-cover" src="{{Storage::url($article->image->url)}}" alt="">
            <p class="bg-gray-200 text-sm">{{$article->desfoto}}</p>
            <h5 class=" py-2">Por: {{$article->teacher->name}}</h5>
            <p class="">LA PAZ / 21 de octubre de 2021 / 10:17</p>
            <p>{{$article->description}}</p>
            
        </figure>
        <div class="bg-gray-200">
          
        </div>
    </section>
</x-app-layout>