<div class="mb-4">
    {!! Form::label('title', 'Tútulo del Artículo') !!}  
    {!! Form::text('title', null, ['class'=>'form-input block w-full mt-1'.($errors->has('title') ? ' border-red-600' : '')]) !!}
    @error('title')
    <strong class="text-sm text-red-600">{{$message}}</strong>
    @enderror
</div>
<div class="mb-4">
    {!! Form::label('slug', 'Slug del Artículo') !!}  
    {!! Form::text('slug', null, ['readonly'=>'readonly','class'=>'form-input block w-full mt-1'.($errors->has('title') ? ' border-red-600' : '')]) !!}
    @error('slug')
    <strong class="text-sm text-red-600">{{$message}}</strong>
    @enderror
</div>
<div class="mb-4">
    {!! Form::label('subtitle', 'Subtútulo del Artículo') !!}  
    {!! Form::text('subtitle', null, ['class'=>'form-input block w-full mt-1'.($errors->has('title') ? ' border-red-600' : '')]) !!}
    @error('subtitle')
    <strong class="text-sm text-red-600">{{$message}}</strong>
    @enderror
</div>
<div class="mb-4">
    {!! Form::label('description', 'Contenido del Artículo') !!}
    {!! Form::textarea('description', null, ['class'=>'form-input block w-full mt-1'. ($errors->has('description') ? ' border-red-600' : '')]) !!}
    @error('description')
    <strong class="text-sm text-red-600">{{$message}}</strong>
    @enderror
</div>
<div class="grid grid-cols-3 gap-4">
    <div class="col-span-1">
        {!! Form::label('category_id', 'Sección :') !!}
        {!! Form::select('category_id', $categories, null, ['class'=>'form-input block w-full mt-1']) !!}
    </div>
</div>
<h1 class="text-2xl font-bold mt-8 mb-2">Imagen del artículo</h1>
<div class="grid grid-cols-2 gap-4">

    <figure>
        @isset($article->image)
        <img id="picture" class="w-full h-64 object-cover object-center" src="{{Storage::url($article->image->url)}}" alt="">
          @else
           <img id="picture" class="w-full h-64 object-cover object-center" src="https://www.pexels.com/photo/5965857/download/" alt="">   
          @endisset   
    </figure>
    
    <div>
        <div>
            {!! Form::label('desfoto', 'Descripción de la imagen') !!}  
            {!! Form::textarea('desfoto', null, ['class'=>'form-input block w-full mt-1'.($errors->has('desfoto') ? ' border-red-600' : '')]) !!}
        </div>
        @error('desfoto')
        <strong class="text-sm text-red-600">{{$message}}</strong>
        @enderror
        <p class="mt-4">Seleccione la imagen destacada del artículo que decea publicar</p>
        {!! Form::file('file', ['class'=>'form-input w-full'. ($errors->has('file') ? ' border-red-600' : ''), 'id'=>'file', 'accept'=>'image/*']) !!}
        @error('file')
        <strong class="text-sm text-red-600">{{$message}}</strong>
        @enderror
    </div>
</div>