<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadisticas</title>
    <link rel="icon" href="../Recursos/imagenes/logo-1.png" type="image/png">
    <!--Hojas de estilo-->
    <link rel="stylesheet" href="{{asset('css/estadisticas.css')}}">
   
   
   <!--Icons cdn-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   

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
       
        
        <h3 class="i-name">
            Estadisticas
        </h3>


        <!--Inicio de la tabla-->
        
        <!-- STATS-->
        <div class="container_stats">
            <div class="container_position_stats">
                <div class="stats">
                    <canvas class="chart-stats_1"id="miGrafico" ></canvas>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    let miCanvas = document.getElementById("miGrafico").getContext("2d");
                
                    var chart = new Chart(miCanvas, {
                        type: "line",
                        data: {
                            labels: ["Enero","Diciembre"],
                            datasets: [{
                                label: "Rendimiento en ventas",
                                backgroundColor: "rgb(0, 0, 0)",
                                data: [1, 39, 20, 30,12, 39, 20, 30,12, 39, 20, 1]
                            }]
                        }
                    });
                </script>  
                <div class="stats2" style="width: 100%; height:300px;">
                    <canvas class="chart-stats_2"id="miGrafico2" width="1000" height="900"></canvas>
                    <canvas class="chart-stats_3"id="miGrafico3" width="1000" height="900"></canvas>
                </div>
                <script>
                    let miCanvas2 = document.getElementById("miGrafico2").getContext("2d");
                
                    var chart = new Chart(miCanvas2, {
                        type: "bar",
                        data: {
                            labels: ["Estadisticas"],
                            datasets: [{
                                label: "Estadisticas",
                                backgroundColor: "rgb(10, 30, 80)",
                                data: [1.0]
                            }]
                        }
                    });
                    let miCanvas3 = document.getElementById("miGrafico3").getContext("2d");
                
                    var chart = new Chart(miCanvas3, {
                        type: "bar",
                        data: {
                            labels: ["Estadisticas"],
                            datasets: [{
                                label: "Estadisticas",
                                backgroundColor: "rgb(10, 30, 80)",
                                data: [1, 39, 20, 30,12, 39, 20, 30,12, 39, 20, 1]
                            }]
                        }
                    });
                </script> 
            </div>
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