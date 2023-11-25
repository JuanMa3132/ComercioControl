<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .profile-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input, button {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
        .rounded-circle {
            border-radius: 50%;

            height: 12.5em;
        }
        .profile-widget-header {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <h2>Editar Perfil</h2>
<!-- ... -->

<form method="POST" novalidate action="{{ route('Pages.edit-profile') }}" enctype="multipart/form-data">
    @csrf
    <div class="profile-widget-header">
        @if(Auth::user()->image)
        <img src="{{ asset(Auth::user()->image) }}" alt="image" class="rounded-circle profile-widget-picture">
    @else
        <img src="{{ asset('imagenes/user-profile.png') }}" alt="default-image" class="rounded-circle profile-widget-picture">
    @endif
    </div>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre" value="{{ old('nombre', Auth::user()->name) }}">

    <label for="correo">Correo:</label>
    <input type="email" id="correo" name="correo" placeholder="correo@ejemplo.com" value="{{ old('correo', Auth::user()->email) }}">

    <div>
        <label for="photo">Foto de Perfil:</label>
        <input type="file" id="photo" name="image">
    </div>

    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña">

    <button type="submit">Guardar Cambios</button>
</form>

<!-- ... -->

    </div>
</body>
</html>
