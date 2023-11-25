<!DOCTYPE html>
<html lang="es">
<head>
    
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion | Sistema de ventas</title>
</head>
<body>
    <div class="container-father">
    <div class="container">
    <div class="login">
        <H1>Comercio<span style="color:rgb(0, 255, 0)">Control</span></H1>
        <h2>Iniciar Sesión</h2>
        <style>
        .alert {
        padding: 15px;
        text-align: center;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .alert-danger {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
    }
        </style>
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
            <form id="login-form" method="POST" action="{{route('login')}}">
                @csrf
                <div class="username">
                <input type="text" id="username" name="email" required placeholder="Email">
            </div>
            <div class="username">
                <input type="password" id="password" name="password" required placeholder="Contraseña"> 
                <button id="show-hide-btn" type="button" onclick="togglePasswordVisibility()"><img id="eye-icon" src="{{asset('imagenes/mostrar.png')}}" alt="#"></button>
            </div>
            <input type="submit" value="Iniciar">
            </form>
                <div class="recordar" href="#">¿Olvido su contraseña?</div>
                <a href="{{route('register')}}"><button class="btn-register">Registrarse</button></a>
    </div>
</div>
<div class="img-icon">
    <img class="img-ico"src="../Resource/project-management.png" >
</div>
</div>
<script src="{{asset('js/login.js')}}"></script>
</body>
</html>