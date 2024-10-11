<!-- resources/views/employees/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Empleado</h1>

    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Posición</label>
            <input type="text" class="form-control" id="position" name="position" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
