@extends('adminlte::page')

@section('title', 'educaLibre')

@section('content_header')
    <h1>Escritorio</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Asunto</th>
                    <th>Mensaje</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>
                            {{$contact->id}}
                        </td>
                        <td>
                            {{$contact->name}}
                        </td>
                        <td>
                            {{$contact->email}}
                        </td>
                        <td>
                            {{$contact->tel}}
                        </td>
                        <td>
                            {{$contact->asunto}}
                        </td>
                        <td>
                            {{$contact->detalle}}
                        </td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="#">Responder</a>
                        </td>
                        <td width="10px">
                            <form action="#" method="POST">
                                @csrf
                                @method('delete')

                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>

                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop