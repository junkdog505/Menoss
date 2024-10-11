<!-- resources/views/orders/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Orden</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ID de la Orden: {{ $order->id }}</h5>
            <p class="card-text">Cliente: {{ $order->customer->name }}</p>
            <p class="card-text">Producto: {{ $order->product->name }}</p>
            <p class="card-text">Cantidad: {{ $order->quantity }}</p>
            <p class="card-text">Total: {{ $order->total }}</p>
        </div>
    </div>

    <a href="{{ route('orders.index') }}" class="btn btn-secondary mt-3">Volver a la lista</a>
</div>
@endsection
