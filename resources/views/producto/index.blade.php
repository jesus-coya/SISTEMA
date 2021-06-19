@extends('layouts.app')

@section('content')
   <div class="container">
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>INDICE DEL PRODUCTO</title>
        </head>
        <body>
            <h1>LISTA DE PRODUCTOS</h1>
            <table class="table table-striped table-hover" border="1">
                <thead class="thead-dark">
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>PRECIO</th>
                    <th>CANTIDAD</th>
                    <th>FOTO</th>
                    <th>OPCIONES</th>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                    <tr>
                        <td><b>{{$producto->id}}</b></td>
                        <td>{{$producto->nombreP}}</td>
                        <td>{{$producto->precioP}}</td>
                        <td>{{$producto->cantidadP}}</td>
                        <td>
                            <img src="{{asset('storage'.'/'.$producto->fotoP)}}" alt="" width="100px" height="100px" class="img-thumbnail img-fluid" style="border-radius: 10%">
                        </td>
                        <td>
                            <a style="color: white" href="{{route("producto.edit",$producto->id)}}" method="POST" class="btn btn-info">EDITAR</a> <br>
                            <form action="{{route("producto.destroy",$producto->id)}}" method="POST" class="d-inline">
                                @csrf
                                {{method_field('DELETE')}}
                                <input type="submit" onclick="return confirm('¿ELIMINAR?')" value="ELIMINAR" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{route("producto.create")}}" method="POST" class="btn btn-dark">CREAR</a>
        </body>
        </html>
   </div>
@endsection

