<!-- resources/views/orders/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Orden</h1>

    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="customerID" class="form-label">Cliente</label>
            <select name="customerID" id="customerID" class="form-control" required>
                <option value="">Seleccionar Cliente</option>
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}" {{ $customer->id == $order->customerID ? 'selected' : '' }}>{{ $customer->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="productID" class="form-label">Producto</label>
            <select name="productID" id="productID" class="form-control" required>
                <option value="">Seleccionar Producto</option>
                @foreach($products as $product)
                    <option value="{{ $product->id }}" {{ $product->id == $order->productID ? 'selected' : '' }}>{{ $product->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Cantidad</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $order->quantity }}" required>
        </div>
        <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="text" class="form-control" id="total" name="total" value="{{ $order->total }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('orders.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
