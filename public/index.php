<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Películas</title>
    <link href="./css/tailwind.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-blue-600 text-white p-4 text-center">
        <h1 class="text-2xl font-bold">Tienda de Películas</h1>
    </header>

    <!-- Search Section -->
    <!-- Aquí puedes agregar una sección de búsqueda si es necesario -->

    <!-- Registration Form -->
    <div class="max-w-md mx-auto mt-10 bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Registro</h2>
        <form action="path_to_your_php_script.php" method="post">
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label>
                <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-6">
                <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirmar Contraseña</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Registrarse
                </button>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white p-4 text-center mt-10">
        <p>&copy; 2024 Tienda de Películas. Todos los derechos reservados.</p>
    </footer>
    
    <script src="./js/main.js"></script>
</body>
</html>


