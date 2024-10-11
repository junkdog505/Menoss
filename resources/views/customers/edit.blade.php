@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Cliente</h1>

        <form action="{{ route('customers.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="firstName" class="form-label">Nombre</label>
                <input type="text" name="firstName" class="form-control" value="{{ old('firstName', $customer->firstName) }}" required>
            </div>

            <div class="mb-3">
                <label for="lastName" class="form-label">Apellido</label>
                <input type="text" name="lastName" class="form-control" value="{{ old('lastName', $customer->lastName) }}" required>
            </div>

            <div class="mb-3">
                <label for="dni" class="form-label">DNI</label>
                <input type="text" name="dni" class="form-control" value="{{ old('dni', $customer->dni) }}" required>
            </div>

            <div class="mb-3">
                <label for="birthDate" class="form-label">Fecha de Nacimiento</label>
                <input type="date" name="birthDate" class="form-control" value="{{ old('birthDate', $customer->birthDate) }}" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Dirección</label>
                <input type="text" name="address" class="form-control" value="{{ old('address', $customer->address) }}">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Teléfono</label>
                <input type="text" name="phone" class="form-control" value="{{ old('phone', $customer->phone) }}">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $customer->email) }}" required>
            </div>

            <div class="mb-3">
                <label for="photo" class="form-label">Foto (Opcional)</label>
                <input type="file" name="photo" class="form-control">
                @if($customer->photo)
                    <img src="{{ asset('storage/' . $customer->photo) }}" alt="Foto actual" style="max-width: 150px;" class="mt-2">
                    <p>Deja el campo vacío si no deseas cambiar la foto.</p>
                @endif
            </div>

            <button type="submit" class="btn btn-success">Actualizar Cliente</button>
            <a href="{{ route('customers.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
