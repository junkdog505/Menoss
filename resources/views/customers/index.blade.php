@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-6">Lista de Clientes</h1>
    <a href="{{ route('customers.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Crear Nuevo Cliente</a>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
        @foreach($customers as $customer)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="relative">
                @if($customer->photo)
                    <img src="{{ asset('storage/' . $customer->photo) }}" alt="Foto de {{ $customer->firstName }}" class="w-full h-48 object-cover">
                @else
                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                        <p class="text-gray-500">No hay foto disponible</p>
                    </div>
                @endif
            </div>
            <div class="p-4">
                <h2 class="text-lg font-semibold">{{ $customer->firstName }} {{ $customer->lastName }}</h2>
                <p class="text-gray-600">DNI: {{ $customer->dni }}</p>
                <p class="text-gray-600">Email: {{ $customer->email }}</p>
            </div>
            <div class="flex justify-between p-4 border-t">
                <a href="{{ route('customers.show', $customer) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Ver</a>
                <a href="{{ route('customers.edit', $customer) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Editar</a>
                <form action="{{ route('customers.destroy', $customer) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600" onclick="return confirm('¿Estás seguro de eliminar este cliente?')">Eliminar</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
