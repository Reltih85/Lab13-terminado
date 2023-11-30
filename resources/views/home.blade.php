@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-cols-3">
        @foreach($productos as $producto)
            <div class="col">
                <div class="card">
                    <img height="200" src="/producto/{{$producto->ruta}}" alt="Imagen">
                    <div class="card-body">
                        <p class="card-text">{{$producto->descripcion}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                           <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$producto->id}}" aria-expanded="false" aria-controls="collapse">
                            <i class="bi bi-alexa text-primary">{{count($producto->comentario)}}</i>
                           </button> 
                        <small class="text-muted">{{ $producto->user ? $producto->user->name : 'Usuario no disponible' }}</small>
                        <div class="collapse" id="collapse{{$producto->id}}">
                            @foreach($producto->comentario as $comentario)
                            <div class="card card-body">
                                {{$comentario->comentario}}
                            </div>
                            <small class="text-muted">{{ $producto->user ? $producto->user->name : 'Usuario no disponible' }}</small>
                            @endforeach
                            <form method="POST" action="{{route('subirComentario')}}">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-9">
                                            <input type="text" class="form-control" name="comentario" placeholder="Ingrese su comentario">
                                        </div>
                                        <div class="col-2">
                                            <input type="hidden" name="id_producto" value="{{$producto->id}}">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="bi bi-dend"></i>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection