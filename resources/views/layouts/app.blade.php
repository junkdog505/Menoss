<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Aplicación</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div>
        @yield('content')
    </div>
</body>
</html>
