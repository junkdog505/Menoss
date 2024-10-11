<!-- resources/views/employees/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Empleado</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nombre: {{ $employee->name }}</h5>
            <p class="card-text">Email: {{ $employee->email }}</p>
            <p class="card-text">Posición: {{ $employee->position }}</p>
        </div>
    </div>

    <a href="{{ route('employees.index') }}" class="btn btn-secondary mt-3">Volver a la lista</a>
</div>
@endsection
