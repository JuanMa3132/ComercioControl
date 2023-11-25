<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <title>Comercio Control | Registro Usuarios</title>
</head>
<body class="body-register">
    <div class="form-registro">
    <form method="POST"  action="{{route('registro')}}">
        @csrf
        <div class="title"><h2>Comercio <span style="color:rgb(0, 255, 0)">Control</span> | Registro usuarios</h2></div>
        <br>
        <div class="formularios"><label for="nameInput">Nombre</label>
            <input type="name" class="formR" name="name" required autocomplete="disable"><br>
            <label for="emailInput">Email</label>
            <input type="email" class="formR" name="email" required autocomplete="disable"><br>
            <label for="passwordInput">Contraseña</label>
            <input type="password" class="formR" name="password" required autocomplete="disable"><br>
            <button type="submit" class="btn btn-primary">Registrarse</button></div>
        
    </div>
</body>
</html>