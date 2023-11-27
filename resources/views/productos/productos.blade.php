@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <form action="{{route('subirProducto') }}" method="POST" enctype="multipart/form-data" class="row g-3">
            @csrf
        <h5>Subir un Producto</h5>
            <label>Nombre</label>
            <input class="form-control" type="text" name="nombre" placeholder="Agrege un nombre">
            <label>stock</label>
            <input class="form-control" type="text" name="stock" placeholder="Agrege un stock">
            <label>Descripcion</label>
            <input class="form-control" type="text" name="descripcion" placeholder="Agrege una descripcion">
            <label>Fecha Ingreso</label>
            <input class="form-control" type="text" name="fecha_ingreso" placeholder="Agrege una fecha de ingreso">
            <label>precio Compra</label>
            <input class="form-control" type="text" name="precio_compra" placeholder="Agrege un precio de compra">
            <label>Precio venta</label>
            <input class="form-control" type="text" name="precio_venta" placeholder="Agrege un precio de venta">
            <input class="form-control" type="file" name="producto">
            <button type="submit" class="btn btn-primary">Subir</button>
        </form>

    </div>
    <div class="row row-cols-3 mt-5">
        @foreach($productos as $producto)
        <div class="col">
            <div class="card">
                <img height="200" src="/producto/{{$producto->ruta}}">
                <div class="card-body">
                    <p class="card-text">{{$producto->nombre}}</p>
                    <p class="card-text">{{$producto->descripcion}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">{{$producto->created_at}}</small>

                    </div>


                </div>

            </div>
        </div>
        @endforeach
    </div>
</main>

@endsection