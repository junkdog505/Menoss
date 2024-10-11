@extends('layouts.app')

@section('content')
<div class="container mx-auto p-5">
    <h1 class="text-2xl font-semibold mb-5">Crear Nuevo Cliente</h1>

    <form action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @csrf

        <div>
            <label for="firstName" class="block mb-2 text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" name="firstName" class="border border-gray-300 rounded-lg p-2 w-full" value="{{ old('firstName') }}" required>
        </div>

        <div>
            <label for="lastName" class="block mb-2 text-sm font-medium text-gray-700">Apellido</label>
            <input type="text" name="lastName" class="border border-gray-300 rounded-lg p-2 w-full" value="{{ old('lastName') }}" required>
        </div>

        <div>
            <label for="dni" class="block mb-2 text-sm font-medium text-gray-700">DNI</label>
            <input type="text" name="dni" class="border border-gray-300 rounded-lg p-2 w-full" value="{{ old('dni') }}" required>
        </div>

        <div>
            <label for="birthDate" class="block mb-2 text-sm font-medium text-gray-700">Fecha de Nacimiento</label>
            <input type="date" name="birthDate" class="border border-gray-300 rounded-lg p-2 w-full" value="{{ old('birthDate') }}" required>
        </div>

        <div>
            <label for="address" class="block mb-2 text-sm font-medium text-gray-700">Dirección</label>
            <input type="text" name="address" class="border border-gray-300 rounded-lg p-2 w-full" value="{{ old('address') }}">
        </div>

        <div>
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-700">Teléfono</label>
            <input type="text" name="phone" class="border border-gray-300 rounded-lg p-2 w-full" value="{{ old('phone') }}">
        </div>

        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" class="border border-gray-300 rounded-lg p-2 w-full" value="{{ old('email') }}" required>
        </div>

        <div class="col-span-1 md:col-span-2">
            <label for="photo" class="block mb-2 text-sm font-medium text-gray-700">Foto (Opcional)</label>
            <input type="file" name="photo" class="border border-gray-300 rounded-lg p-2 w-full">
        </div>

        <div class="col-span-1 md:col-span-2">
            <button type="submit" class="bg-green-500 text-white font-bold py-2 px-4 rounded hover:bg-green-600">Guardar Cliente</button>
            <a href="{{ route('customers.index') }}" class="ml-2 bg-gray-500 text-white font-bold py-2 px-4 rounded hover:bg-gray-600">Cancelar</a>
        </div>
    </form>
</div>
@endsection