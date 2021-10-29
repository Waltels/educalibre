<x-app-layout>
    <section class="grid grid-cols-1 lg:grid-cols-5 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 gap-4 py-4">
        <figure class="col-span-4 px-3">
            <div class="flex">
                <i class="material-icons text-red-500">storage</i>
                      <h4 class="text-red-600 font-bold">-- {{$article->category->name}} </h4>
                <i class="material-icons text-red-500">chevron_right</i>
            </div> 
            <h2 class=" leading-10 py-2 font-bold font-serif">{{$article->title}}</h2>
            <p class=" leading-8 text-xl font-serif">{{$article->subtitle}}</p>
            <p>redes sociales</p>
            <img class="h-full w-full object-cover object-center" src="{{Storage::url($article->image->url)}}" alt="">
            <div class="mt-0 mb-3 px-1 font-serif text-sm">
                {!!$article->desfoto!!}
            </div>
            <h5 class=" py-2">Por: {{$article->teacher->name}}</h5>
            <div class="py-2  font-serif text-lg">
                {!!$article->description!!}
            </div>
            
        </figure>
        <div class="bg-gray-200">
          
        </div>
    </section>
</x-app-layout>