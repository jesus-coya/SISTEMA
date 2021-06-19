@extends('layouts.app')
@section('content')
    <div class="container">
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>CREAR PRODUCTO</title>
        </head>
        <body>
            <h1>CREAR PRODUCTO</h1>
            <form action="{{route("producto.store")}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('producto.formulario')
            </form>
        </body>
        </html>
    </div>
@endsection
