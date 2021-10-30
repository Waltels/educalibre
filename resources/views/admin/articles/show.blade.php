<x-app-layout>
    <h1 class="text-center font-semibold text-3xl mt-3">VISTA PREVIA DEL ARTÍCULO</h1>
    <hr>
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
            @if ($article->image)
                <img class="h-80 w-full object-cover object-center" src="{{Storage::url($article->image->url)}}" alt="">              
            @else
                <img class="h-80 w-full object-cover object-center" src="https://www.pexels.com/photo/5965857/download/" alt=""> 
            @endif
            
            <div class="mt-0 mb-3 px-1 font-serif text-sm">
                {!!$article->desfoto!!}
            </div>
            <h5 class=" py-2">Por: {{$article->teacher->name}}</h5>
            <div class="py-2  font-serif text-lg">
                {!!$article->description!!}
            </div>
            
        </figure>
        <div class="">
            <section class="card mb-3">
                <div class="card-body">
                    <div class="items-center">
                        <h1 class="text-center font-semibold text-2xl">Autor</h1>
                        <div class="ml-4">
                            <h1 class="text-bold text-gray-700 text-lg px-0">{{$article->teacher->name}}</h1>
                            <a class="text-blue-700 text-sm font-bold" href="">{{'@'.Str::slug($article->teacher->name,'')}}</a>
                        </div>
                    </div>
                    <form action="{{route('admin.articles.approved', $article)}}" method="POST"">
                        @csrf
                        <button class="intem-center btn btn-primary w-full"  type="submit">Aprobar este artículo</button>
                    </form>
                    <a class="btn btn-danger w-full block text-center mt-2" href="{{route('admin.articles.observation', $article)}}">Observar artículo</a>
                </div>
            </section>
        </div>
    </section>
</x-app-layout>