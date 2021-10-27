@extends('adminlte::page')

@section('title', 'educaLibre')

@section('content_header')
    <h1>Lista de Usuario</h1>
@stop

@section('content')
    @livewire('admin.users-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop