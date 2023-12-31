<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="icon" href="../Recursos/imagenes/logo-1.png" type="image/png">
    <!--Hojas de estilo-->
    <link rel="stylesheet" href="{{asset('css/clientes.css')}}">
   
   
   <!--Icons cdn-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!--SCRIPT-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        

    <!--Script cdn-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</head>

<body>
    
    <section id="menu">
    
       <div class="logo">
           <img src="../Recursos/imagenes/intento_2-transformed-removebg-preview (1).png" alt="Logo del software">
            <h2>Admin<span>istrador</span></h2>
       </div>

       <div class="items"> <!-- Nav links and icons-->
       
        <li class="dashboard-link"><i class='bx bxs-dashboard' ></i><a href="{{route('dashboard')}}"> Dashboard</a></li>
        <a class="ventas_link"href="{{route('ventas')}}"><li><i class="fa-solid fa-sack-dollar"></i>Ventas</li></a>
        <a class="ventas_link" href="{{route('clientes')}}"><li><i class="fa-solid fa-hand-holding-dollar"></i>  Clientes</li></a>
        <li><i class="fa-solid fa-boxes-stacked"></i> <a href="#"> Inventario</a></li>
        <a class="ventas_link"href="{{route('estadisticas')}}"><li><i class="fa-solid fa-chart-line"></i>Estadisticas</li></a>
        <a class="ventas_link"href="{{route('proveedores')}}"><li><i class="fa-solid fa-truck"></i>Proveedores</li></a>
       

        <div class="settings">  
            <!--Previously this code block was outside the "items" div, 
            but it was problematic-->
            <a class="ventas_link" href="{{route('configuracion')}}"><li><i class='bx bxs-cog'></i>
                Configuración</li></a>
        

        </div>

       
       
        <div class="support">
            <a  class="ventas_link" href="{{route('soporte')}}"><li><i class="fa-solid fa-envelope"></i>
                Soporte</li></a>
            
        </div>  <!--Final closing div for settings and support-->


       </div>
      
       <footer>
        <p class="tex-footer">© ComercioControl</p>
       </footer>

  
    </section>



    
    <section id="interface">
        <div class="navigation">
            <div class="n1">
                <div>
                    <i id="menu-btn" class="fa-solid fa-bars"></i>
                </div>
                <div class="search">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Buscar">
                </div>

            </div>

            <div class="profile">
                <i class="bi bi-bell-fill"></i>
                <div class="profile dropdown"></div>
                <a  role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="../Recursos/pexels-pavel-danilyuk-8000607.jpg" alt="Foto de perfil"></a>
                    <ul class="dropdown-menu" >
                        <li><a class="dropdown-item" href="#">Mensajes</a></li>
                        <li><a class="dropdown-item" href="#">Editar Perfil</a></li>
                        <li><form method="GET" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">Cerrar sesión</button>
                        </form></li>
                      </ul>
                </div>
             </div>
   

        </div>
       
        
        <h3 class="i-name">
            Clientes
        </h3>

        <!--Inicio de la tabla-->

        <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                    
                        <td>Nombre</td>
                        <td>ID</td>
                        <td>Rol</td>
                         <td>Dirección</td>
                        <td>Contacto</td>
                        <td>Status</td>
                        <td>Editar</td>
                        <td></td>
                    
                     </tr>
                    
                </thead>
                <tbody>
                    <tr>
                


                    <td class="people">
                        <img src="#" alt="IMG">
                        <div class="people-de">
                            <h5>Gaspar Salazar</h5>
                            <p>Gasparsal@gmail.com</p>
                        </div>
                    </td>
                    <td class="people-id ">   
                            <h5>423464</h5>
                    </td>
                    <td class="people-des">
                            <h5>Vendedor</h5> 
                    </td>
                    <td class="people-adress">
                        <h5>calle 55a #89a-11</h5> 
                </td>
                    <td class="people-contact">
                        <h5>311 8904422</h5>
                </td>
                <td class="people-status">
                    <p>Activo</p>
                </td>
            <td class="edit">
                <button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger">Borrar</button>  
            </td>
            </tbody>
                      
            </table>
<ul class="pagination">
  <li><a href="#">«</a></li>
  <li><a class="active" href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">6</a></li>
  <li><a href="#">7</a></li>
  <li><a href="#">»</a></li>
</ul>

        </div>
             <!--Fin tabla estructura y fila uno-->
    

        <!--aqui habia un div cerrado-->

        <script>
            $("#menu-btn").click(function(){
                $("#menu").toggleClass("active");

            })
        </script>  <!--animate burguer btn in small screens-->

    </section>

</body>

</html>

