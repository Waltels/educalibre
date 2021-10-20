<div>
    <div class="grid grid-cols-1 divide-y divide-red-500">
        <div>
            <h1 class="text-2xl text-red-600">Categoria educación</h1>
        </div>       
    </div>
    <div class="rounded container grid grid-cols-1 lg:grid-cols-3 gap-4   border-gray-600">
        @foreach ($educacions as $educacion)
        <div class="border-2 rounded  bg-gray-100">
            <div class="w-full flex justify-between p-3 ">
                <div class="flex">
                <div class="rounded-full h-8 w-8 bg-gray-500 flex items-center justify-center overflow-hidden">
                    <img src="https://avatars0.githubusercontent.com/u/38799309?v=4" alt="profilepic">
                </div>
                <span class="pt-1 ml-2 font-bold text-sm">{{$educacion->teacher->name}}</span>
                </div>
                <span class="px-2 hover:bg-gray-300 cursor-pointer rounded"><i class="fas fa-ellipsis-h pt-2 text-lg"></i>555</span>
            </div>
            <img class="h-60 w-full bg-cover" src="{{Storage::url($educacion->image->url)}}">
            <div class="px-2 pb-2">
                <div class="pt-1">
                    <div>
                        <span class="font-serif text-3xl px-2 py-3 leading-6">{{$educacion->title}}</span>
                    </div>
                </div>
                
                <div class="text-sm mb-2 text-gray-700 cursor-pointer font-medium mt-3 ">10 de octubre de 2021</div>
            </div>
        </div> 
        @endforeach 
    </div>
</div>
