<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="{{asset('css/bienvenida.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ComercioControl</title>
</head>
<body>
    <div class="container">
        <nav>
            <h1>Comercio<span style="color: #0dff00;">Control</span></h1>
            <div class="opciones">
                <ul class="menu_link">
                <li class="link_item" ><a  class="link" href="#">Inicio</a></li> 
                <li class="link_item" ><a  class="link" href="#">Acerca de</a></li>
                <li class="link_item" > <a  class="link" href="#">Contacto</a></li>
                </ul>
               
            <button class=" comenzar" onclick="window.location.href='{{ route('login') }}'">Comenzar</button>
            </div>
        </nav>
            <article class="article-container">
            <div class="container-article">
                <h2>Organice su <span style="color: #15ff00;">Stock</span><br> fácil, rápido, seguro <br>con <span style="color: #00ff26;" >ComercioControl</span></h2>
                <p>ComercioControl, programa de gestión de stock puede transformar <br>su negocio al optimizar inventarios y gestionar cuentas de <br> manera eficiente, impulsando un crecimiento significativo.</p>
            </div>
            </article>
                <footer class="bottom">
        <div class="container-footer">        
            <a href="#">www.ComercioControl.com</a>
            <p >| Automated Stock Manager </p>
        </div>
    </footer>
    </div>

      
</body>
</html>