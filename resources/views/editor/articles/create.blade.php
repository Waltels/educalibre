<x-app-layout>
    <div class="container py-8 ">
        <div class="card">
            <div class="card-body">
                <h1 class="text-2xl font-bold"> CREAR NUEVO ARTICULO
                    <hr class="mt-2 mb-6">
                </h1>
                {!! Form::open(['route'=> 'editor.articles.store', 'files'=>true, 'autocomplete'=>'off']) !!}

                {!! Form::hidden('user_id', auth()->user()->id) !!}

                    @include('editor.articles.partials.form')

                    <div class="flex justify-end">
                        {!! Form::submit('Crear nuevo artículo', ['class'=> 'btn btn-primary']) !!}
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