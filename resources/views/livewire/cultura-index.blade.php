<div>
    <div class="container grid grid-cols-1 lg:grid-cols-5 gap-2 px-0">
        <div class="col-span-4 divide-y divide-red-500">
            @foreach ($culturas as $cultura)
            <div class="container grid grid-cols-1 lg:grid-cols-4 gap-0 px-0 py-2">
                <div class="col-span-2">
                    <img class="h-60 w-full bg-cover" src="{{Storage::url($cultura->image->url)}}" alt="">
                </div>
                <div class="relative col-span-2 ">
                    <a class="hover:text-purple-800 hover:underline " href="{{route('article.show', $cultura)}}"><h3 class="font-serif text-3xl mt-2 px-3 leading-7">{{$cultura->title}}</h3></a>
                    <p class="text-gray-800 font-serif py-4 px-3 leading-4">{{$cultura->subtitle, 100}}</p>
                    <div class="absolute bottom-0 px-3">
                        <p><a href="{{route('cultura')}}"><span>Educacion </span></a>|<span class="font-bold"> {{$cultura->teacher->name}}</span>|<span>{{$cultura->created_at}}</span></p>
                    </div>
                </div>
            </div>
            @endforeach
            <div  class="divide-y divide-red-500"></div>
            </div>
            <div class=" bg-gray-400">
            </div>
        </div>
    </div>
</div>
