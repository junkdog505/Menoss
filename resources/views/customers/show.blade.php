@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Detalles del Cliente</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Nombre Completo:</label>
                    <p class="text-lg text-gray-900">{{ $customer->firstName }} {{ $customer->lastName }}</p>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">DNI:</label>
                    <p class="text-lg text-gray-900">{{ $customer->dni }}</p>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Fecha de Nacimiento:</label>
                    <p class="text-lg text-gray-900">{{ $customer->birthDate }}</p>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Dirección:</label>
                    <p class="text-lg text-gray-900">{{ $customer->address ?? 'No especificado' }}</p>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Teléfono:</label>
                    <p class="text-lg text-gray-900">{{ $customer->phone ?? 'No especificado' }}</p>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Email:</label>
                    <p class="text-lg text-gray-900">{{ $customer->email }}</p>
                </div>
            </div>

            <div class="flex justify-center items-center">
                @if($customer->photo)
                    <img src="{{ asset('storage/' . $customer->photo) }}" alt="Foto de {{ $customer->firstName }}" class="rounded-full shadow-lg w-48 h-48 object-cover">
                @else
                    <p class="text-lg text-gray-900">No hay foto disponible</p>
                @endif
            </div>
        </div>

        <div class="mt-6 flex justify-center">
            <a href="{{ route('customers.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Volver a la lista
            </a>
        </div>
    </div>
@endsection
