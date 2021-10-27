<x-app-layout>
    <div class="container py-8 grid grid-cols-5">
        <aside>
            <h1 class="font-bold text-lg mb-4">Edición del Artículo</h1>
            <ul class="py-4">
                <li class="leading-7 mb-1 border-l-4 border-indigo-400  pl-2">
                    <a href="#">Información del Artìculo</a>
                </li>
                <li class="leading-7 mb-1 border-l-4 border-transparent pl-2">
                    <a href="#">Observaciones del Artículo</a>
                </li> 
            </ul>

        </aside>
        <div class="col-span-4 card">
            <div class="card-body">
                <h1 class="text-2xl font-bold">INFORMACION DEL ARTICULO</h1>
                <hr class="mt-2 mb-8">
                {!! Form::model($article, ['route'=>['editor.articles.update', $article], 'method'=>'put', 'files'=> true]) !!}
                    
                    @include('editor.articles.partials.form')

                    <div class="flex justify-end">
                        {!! Form::submit('Actualizar informacion', ['class'=> 'btn btn-primary']) !!}
                     </div>
                {!! Form::close() !!}
            </div>

        </div>

    </div>
    <x-slot name="js">
        <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
        <script src="{{asset('js/editor/articles/form.js')}}"></script>
    </x-slot>
</x-app-layout>