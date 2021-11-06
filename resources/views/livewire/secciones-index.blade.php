<div>
    <div class="grid grid-cols-1 divide-y divide-red-500">
        <div>
            <h1 class="text-2xl text-red-600">Nuestras secciones</h1>
        </div>       
    <div class="grid grid-cols-1">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                <div class="card-header card-header-tabs card-header-info">
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">

                            <ul class="nav nav-tabs" data-tabs="tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#educacion" data-toggle="tab">
                                <i class="material-icons">people</i> Educación
                                <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#cultura" data-toggle="tab">
                                <i class="material-icons">code</i> cultura
                                <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#deportes" data-toggle="tab">
                                <i class="material-icons">sports</i> deportes
                                <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#polsin" data-toggle="tab">
                                <i class="material-icons">spoke</i> político sindical
                                <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#libre" data-toggle="tab">
                                <i class="material-icons">co_present</i> libre
                                <div class="ripple-container"></div>
                                </a>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card-body bg-white">
                    <div class="tab-content bg-white px-4">
                        <div class="tab-pane active bg-white px-0" id="educacion">
                            <div class="w-full bg-white rounded container grid grid-cols-1 lg:grid-cols-3 gap-4 px-0">
                                @foreach ($educacions as $educacion)
                                <div class="">
                                    <div class="w-full flex justify-between p-3 relative ">
                                        <div class="flex">
                                        <div class="rounded-full h-8 w-8  flex items-center justify-center overflow-hidden">
                                            <img src="https://avatars0.githubusercontent.com/u/38799309?v=4" alt="profilepic">
                                        </div>
                                        <span class="pt-1 ml-2 font-bold text-sm">{{$educacion->teacher->name}}</span>
                                        </div>
                                        <span class="px-2 hover:bg-gray-300 cursor-pointer rounded"><i class="material-icons pt-2 text-lg">auto_stories</i></span> 
                                    </div>
                                    <img class="h-60 w-full bg-cover" src="{{Storage::url($educacion->image->url)}}">
                                    <div class="px-2 pb-2">
                                        <div class="pt-1">
                                            <div class="py-4">
                                                <a class="hover:text-blue-800" href="{{route('article.show', $educacion)}}"><span class="text-gary-800 font-serif text-3xl px-2 py-3 leading-6">{{$educacion->title}}</span></a> 
                                            </div>
                                        </div>
                                        
                                        <div class="absolute bottom-0 px-1 text-sm mb-2 text-gray-700 cursor-pointer font-medium mt-3 ">10 de octubre de 2021</div>
                                    </div>
                                </div> 
                                @endforeach 
                            </div>
                        </div>
                        <div class="tab-pane bg-white px-0" id="cultura">
                            <div class="w-full bg-white rounded container grid grid-cols-1 lg:grid-cols-3 gap-4 px-0">
                                @foreach ($culturas as $cultura)
                                <div class="">
                                    <div class="relative w-full flex justify-between p-3 ">
                                        <div class="flex">
                                        <div class="rounded-full h-8 w-8  flex items-center justify-center overflow-hidden">
                                            <img src="https://avatars0.githubusercontent.com/u/38799309?v=4" alt="profilepic">
                                        </div>
                                        <span class="pt-1 ml-2 font-bold text-sm">{{$cultura->teacher->name}}</span>
                                        </div>
                                        <span class="px-2 hover:bg-gray-300 cursor-pointer rounded"><i class="material-icons pt-2 text-lg">history_edu</i></span>
                                    </div>
                                    <img class="h-60 w-full bg-cover" src="{{Storage::url($cultura->image->url)}}">
                                    <div class="px-2 pb-2">
                                        <div class="pt-1">
                                            <div class="py-4">
                                               <a class="hover:text-blue-800" href="{{route('article.show', $cultura)}}"><span class="text-gray-800 font-serif text-3xl px-2 py-3 leading-6">{{$cultura->title}}</span></a> 
                                            </div>
                                        </div>
                                        
                                        <div class="absolute bottom-0 px-1 text-sm mb-2 text-gray-700 cursor-pointer font-medium mt-3 ">{{$cultura->created_at}}</div>
                                    </div>
                                </div> 
                                @endforeach 
                            </div>
                        </div>
                        <div class="tab-pane bg-white px-0" id="deportes">
                            <div class="w-full bg-white rounded container grid grid-cols-1 lg:grid-cols-3 gap-4 px-0">
                                @foreach ($deportes as $deporte)
                                <div class="">
                                    <div class="relative w-full flex justify-between p-3 ">
                                        <div class="flex">
                                        <div class="rounded-full h-8 w-8  flex items-center justify-center overflow-hidden">
                                            <img src="https://avatars0.githubusercontent.com/u/38799309?v=4" alt="profilepic">
                                        </div>
                                        <span class="pt-1 ml-2 font-bold text-sm">{{$deporte->teacher->name}}</span>
                                        </div>
                                        <span class="px-2 hover:bg-gray-300 cursor-pointer rounded"><i class="material-icons pt-2 text-lg">sports_baseball</i></span>
                                    </div>
                                    <img class="h-60 w-full bg-cover" src="{{Storage::url($deporte->image->url)}}">
                                    <div class="px-2 pb-2">
                                        <div class="pt-1">
                                            <div class="py-4">
                                               <a class="hover:text-blue-800" href="{{route('article.show', $deporte)}}"><span class="text-gray-800 font-serif text-3xl px-2 py-3 leading-6">{{$deporte->title}}</span></a> 
                                            </div>
                                        </div>
                                        
                                        <div class="absolute bottom-0 px-1 text-sm mb-2 text-gray-700 cursor-pointer font-medium mt-3 ">{{$deporte->created_at}}</div>
                                    </div>
                                </div> 
                                @endforeach 
                            </div>
                        </div>
                        <div class="tab-pane bg-white px-0" id="polsin">
                            <div class="w-full bg-white rounded container grid grid-cols-1 lg:grid-cols-3 gap-4 px-0">
                                @foreach ($polsins as $polsin)
                                <div class="">
                                    <div class="relative w-full flex justify-between p-3 ">
                                        <div class="flex">
                                        <div class="rounded-full h-8 w-8  flex items-center justify-center overflow-hidden">
                                            <img src="https://avatars0.githubusercontent.com/u/38799309?v=4" alt="profilepic">
                                        </div>
                                        <span class="pt-1 ml-2 font-bold text-sm">{{$polsin->teacher->name}}</span>
                                        </div>
                                        <span class="px-2 hover:bg-gray-300 cursor-pointer rounded"><i class="material-icons pt-2 text-lg">settings_accessibility</i></span>
                                    </div>
                                    <img class="h-60 w-full bg-cover" src="{{Storage::url($polsin->image->url)}}">
                                    <div class="px-2 pb-2">
                                        <div class="pt-1">
                                            <div class="py-4">
                                               <a class="hover:text-blue-800" href="{{route('article.show', $polsin)}}"><span class="text-gray-800 font-serif text-3xl px-2 py-3 leading-6">{{$polsin->title}}</span></a> 
                                            </div>
                                        </div>
                                        
                                        <div class="absolute bottom-0 text-sm mb-2 text-gray-700 cursor-pointer font-medium mt-3 ">{{$polsin->created_at}}</div>
                                    </div>
                                </div> 
                                @endforeach 
                            </div>
                        </div>
                        <div class="tab-pane bg-white px-0" id="libre">
                            <div class="w-full bg-white rounded container grid grid-cols-1 lg:grid-cols-3 gap-4 px-0">
                                @foreach ($libres as $libre)
                                <div class="">
                                    <div class="relative w-full flex justify-between p-3 ">
                                        <div class="flex">
                                        <div class="rounded-full h-8 w-8  flex items-center justify-center overflow-hidden">
                                            <img src="https://avatars0.githubusercontent.com/u/38799309?v=4" alt="profilepic">
                                        </div>
                                        <span class="pt-1 ml-2 font-bold text-sm">{{$libre->teacher->name}}</span>
                                        </div>
                                        <span class="px-2 hover:bg-gray-300 cursor-pointer rounded"><i class="material-icons pt-2 text-lg">leak_add</i></span>
                                    </div>
                                    <img class="h-60 w-full bg-cover" src="{{Storage::url($libre->image->url)}}">
                                    <div class="px-2 pb-2">
                                        <div class="pt-1">
                                            <div class="py-4">
                                               <a class="hover:text-blue-800" href="{{route('article.show', $libre)}}"><span class="text-gray-800 font-serif text-3xl px-2 py-3 leading-6">{{$libre->title}}</span></a> 
                                            </div>
                                        </div>
                                        
                                        <div class="absolute bottom-0 px-1 text-sm mb-2 text-gray-700 cursor-pointer font-medium mt-3 ">{{$libre->created_at}}</div>
                                    </div>
                                </div> 
                                @endforeach 
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
    </div>   
    </div>
</div>
