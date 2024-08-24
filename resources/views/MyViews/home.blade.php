<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11</title>

    <!--La linea de abajo es para icluir tailwind (alertas con estilo css) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-4xl mx-auto px-4">
        <h1>Bienvenido a la página principal</h1>

        <!--Se manda a llamar a nuestro componente alert -->
        <x-MyComponents.alert type="success" class="mb-4">
            <x-slot name="title"> <!--Colocamos el nombre de la variable definida en el componente-->
                Alerta de seguridad <!--Esto será el valor de la variable -->
            </x-slot>
            Contenido de la alerta
        </x-MyComponents.alert> <!--Ruta del archivo componente -->
    </div>

    <p>Hola mundo</p>

</body>
</html>