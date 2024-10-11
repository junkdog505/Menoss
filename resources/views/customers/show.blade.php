<!-- resources/views/customers/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Cliente</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nombre: {{ $customer->name }}</h5>
            <p class="card-text">Email: {{ $customer->email }}</p>
        </div>
    </div>

    <a href="{{ route('customers.index') }}" class="btn btn-secondary mt-3">Volver a la lista</a>
</div>
@endsection
