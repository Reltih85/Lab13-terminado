@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-cols-3">
        @forean(#productos as producto)
        <div class="col">
            <div class="card">
                <img height="200" src="/producto/{{$producto->ruta}}" alt="Imagen">
                <div class="card-body">
                    <p class="card-text">{{$producto->descripcion}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">{{$producto->User->name}}</small>

                    </div>

                </div>

            </div>

        </div>
        @endforeach
    </div>

</div>
@endsection
            