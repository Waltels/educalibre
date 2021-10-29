<x-editor-layout :article="$article">
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

    <x-slot name="js">
        <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
        <script src="{{asset('js/editor/articles/form.js')}}"></script>
    </x-slot>
</x-editor-layout>