<!-- resources/views/products/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Producto</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nombre: {{ $product->name }}</h5>
            <p class="card-text">Descripción: {{ $product->description }}</p>
            <p class="card-text">Precio: {{ $product->price }}</p>
        </div>
    </div>

    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Volver a la lista</a>
</div>
@endsection
