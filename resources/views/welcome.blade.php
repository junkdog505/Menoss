<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <h1 class="text-center text-4xl font-bold mb-6">Bienvenido a Menoss</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white shadow-lg rounded-lg p-4">
                <h4 class="text-lg font-semibold mb-2">Clientes</h4>
                <p class="mb-4">Gestiona a tus clientes.</p>
                <a href="{{ route('customers.index') }}" class="block bg-blue-500 text-white text-center py-2 rounded hover:bg-blue-600">Ver Clientes</a>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-4">
                <h4 class="text-lg font-semibold mb-2">Empleados</h4>
                <p class="mb-4">Gestiona a tus empleados.</p>
                <a href="{{ route('employees.index') }}" class="block bg-blue-500 text-white text-center py-2 rounded hover:bg-blue-600">Ver Empleados</a>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-4">
                <h4 class="text-lg font-semibold mb-2">Productos</h4>
                <p class="mb-4">Gestiona tus productos.</p>
                <a href="{{ route('products.index') }}" class="block bg-blue-500 text-white text-center py-2 rounded hover:bg-blue-600">Ver Productos</a>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-4">
                <h4 class="text-lg font-semibold mb-2">Órdenes</h4>
                <p class="mb-4">Gestiona tus órdenes.</p>
                <a href="{{ route('orders.index') }}" class="block bg-blue-500 text-white text-center py-2 rounded hover:bg-blue-600">Ver Órdenes</a>
            </div>
        </div>
    </div>
</body>
</html>
