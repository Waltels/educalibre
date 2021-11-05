<div>
    <div class="divide-y divide-red-500">
        <div class="bg-red-400 text-center">   
    </div>       
    <div class="">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header card-header-tabs card-header-info">
                    <div class="nav-tabs-navigation">
                        <div class=" items-center nav-tabs-wrapper">
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="nav-item">
                                    <a class="border border-secondary nav-link active" href="#editorial" data-toggle="tab">
                                    <i class=" material-icons">feed</i> Editorial
                                    <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#opinion" data-toggle="tab">
                                    <i class="material-icons">account_circle</i> Opinión
                                    <div class="ripple-container"></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body bg-white">
                    <div class="tab-content bg-white px-4">
                        <div class="tab-pane active bg-white px-0" id="editorial">
                            <div class="w-full bg-white rounded container lg:grid-cols-3 gap-4 px-0">
                                @foreach ($editorials as $editorial)
                                <a class="hover:text-purple-800" href="{{route('article.editorial', $editorial)}}"><p class="text-justify mt-2 mb-1">{{$editorial->title}}</p></a>
                                <div class="">
                                    <p class="text-gray-500 ml-2 mt-0 text-xs text-right"> Por: {{$editorial->teacher->name}}</p>
                                </div>
                                <hr>
                                @endforeach 
                            </div> 
                        </div>
                        <div class="tab-pane bg-white px-0" id="opinion">
                            <div class="w-full bg-white rounded container lg:grid-cols-3 gap-4 px-0">
                                @foreach ($opinions as $opinion)
                                <a class="hover:text-purple-800" href="{{route('article.editorial', $opinion)}}"><p class="text-center mt-2 mb-1">{{$opinion->title}}</p></a>
                                <div class="">
                                    <p class="text-gray-500 ml-2 mt-0 text-xs text-right"> Por: {{$opinion->teacher->name}}</p>
                                </div>
                                <hr>
                                @endforeach 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>
