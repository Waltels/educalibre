<div>
    @foreach ($articles as $article)
        <a class="hover:text-purple-800" href="{{route('article.show', $article)}}"><h1 class="font-serif font-bold text-3xl px-5 py-3 ">{{$article->title}}</h1></a>
        <p class="font-serif px-5">{{$article->subtitle}}</p>
        <hr>
        <p class="px-5"><span class="font-bold" >{{$article->teacher->name}}</span>  <span>6 Comentarios</span></p>
        <img class="h-100 w-full bg-cover" src="{{Storage::url($article->image->url)}}" alt="">
        <p class="px-2 font-serif">{{$article->description}}</p>
        <hr>
    @endforeach
    @foreach ($destacados as $destacado)
        <div>
            <div class="container grid grid-cols-1 lg:grid-cols-2 gap-2 py-2 ">
                <img class="h-48 w-full bg-cover " src="{{Storage::url($destacado->image->url)}}" alt="">
                <div>
                    <a class="hover:text-purple-800" href="{{route('article.show', $destacado)}}"><p class="font-serif text-3xl px-3 ">{{$destacado->title}}</p></a>
                    <p class="px-3"><span class="font-bold" >{{$destacado->teacher->name}}</span>  <span>6 Comentarios</span></p>
                </div>
            </div>
        </div>
    @endforeach
    @foreach ($editorials as $editorial)
    <hr>
        <h1 class="text-2xl text-red-600 mt-2">Editorial</h1>
        <a class="hover:text-purple-800" href="{{route('article.editorial', $editorial)}}"><h1 class="font-serif text-3xl px-3 mb-2">{{$editorial->title}}</h1></a>
        <hr>
    @endforeach
    @foreach ($opinions as $opinion)
        <div>
            <div class="container grid grid-cols-1 lg:grid-cols-2 gap-2 py-2">
                <div class="bg-red-200">
                    <img class="h-48 w-full bg-cover" src="{{Storage::url($opinion->image->url)}}" alt="">
                </div>
                <div>
                    <a class="hover:text-purple-800" href="{{route('article.editorial', $opinion)}}"><p class="font-serif text-3xl px-3">{{$opinion->title}}</p></a>
                    <p class="px-3"><span class="font-bold" >{{$opinion->teacher->name}}</span>  <span>6 Comentarios</span></p>
                </div>
            </div>
        </div>
    @endforeach
 
</div>

