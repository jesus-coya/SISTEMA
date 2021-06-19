<a href="{{route("producto.index")}}" class="btn btn-primary">VOLVER</a> <br>
@if (count($errors)>0)
    <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
            {{$error}}
            <br>
        @endforeach
    </div>
@endif

<div class="container">
    <div class="form-group">
        <label for="nombreP">NOMBRE PRODUCTO</label>
        <input type="text" name="nombreP" id="nombreP" value="{{isset($producto->nombreP)?$producto->nombreP:' '}}" class="form-control">
    </div>

    <div class="form-group">
        <label for="precioP">PRECIO</label>
        <input type="text" name="precioP" id="precioP" value="{{isset($producto->precioP)?$producto->precioP:' '}}" class="form-control">
    </div>

    <div class="form-group">
        <label for="cantidadP">CANTIDAD</label>
        <input type="text" name="cantidadP" id="cantidadP" value="{{isset($producto->cantidadP)?$producto->cantidadP:' '}}" class="form-control">
    </div>

    <div class="form-group">
        <label for="fotoP">FOTO</label>
        @if (isset($producto->fotoP))
            <img src="{{asset('storage'.'/'.$producto->fotoP)}}" alt="FOTO PRODUCTO" width="100px" height="100px" class="img-thumbnail img-fluid">
        @endif
        <input type="file" name="fotoP" id="fotoP" class="form-control">
    </div>

    <input type="submit" value="REGISTRAR" class="btn btn-dark">
</div>


