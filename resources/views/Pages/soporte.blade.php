<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard admin main</title>
        <link rel="icon" href="../Recursos/imagenes/logo-1.png" type="image/png">
        <!--Hojas de estilo-->
        <link rel="stylesheet" href="{{asset('css/dash.css')}}">

        <!--Icons cdn-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!--Script cdn-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    </head>

    <style>
           .background{
            position: fixed;
            margin-left: 250px;
        }

        .background img {
            width: 110%;
            opacity: 0.5;
        }


        .flexbox-container{
            display: -ms-flexbox;
            display: -webkit-flex;
        }

        .flexbox-container > div{
            width: 50%;
            padding: 10px;
        }

        .flexbox-container > div:first-child {
            margin-right: 20px;
        }


        .flexbox-container1{
            display: -ms-flexbox;
            display: -webkit-flex;
        }

        .flexbox-container1 > div{
            width: 60%;
            padding: 10px;
        }

        .flexbox-container1 > div:first-child {
            margin-right: 20px;
        }

        </style>

    <body>
        @yield('loader')
        <section id="menu">

            <div class="logo">
                <img
                    src="../Recursos/imagenes/intento_2-transformed-removebg-preview (1).png"
                    alt="Logo del software">
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


        <section id="contenido">
            <div class="child-contenido">
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
                <div class="title-p">
                    <div class="title-pchild">
                        <div class="titulo">
                            <h2>Somos Common</h2>
                        </div>
            
                        <div class="parrafo">
                            <p>En Common Ms estamos deseando colaborar cotnigo. Puedes
                                encontrarnos en cualquiera de nuestras oficinas o si lo
                                prefieres envianos
                                un email y contactaremos contigo lo antes posible
                            </p>
                        </div>
                    </div>
                    
                </div>
                
    
                <div class="redes">
    
                    <div class="social-networks">
                        <img src="../Recursos/imagenes/whatsapp-icon.jpg" width="50px" height="50px">
                    </div>
    
                    <div class="social-networks">
                        <img src="../Recursos/imagenes/facebook-icon.jpg" width="50px" height="50px">
    
                    </div >
    
                    <div class="social-networks">
                        <img src="../Recursos/imagenes/instagram-icon.jpg" width="50px"
                        height="50px">
                    </div>
    
                    <div class="social-networks">
                        <img src="../Recursos/imagenes/youtube-icon.jpg" width="50px" height="50px">
    
                    </div>
    
    
                </div>
    
                <div class="menu-sup-father">
                    <div class="menu-support">
                        <p>Menu para crear Soporte</p>
    
                        <form class="formulario-soporte">
                            <br>
    
                            <div>
                                <label>Nombres</label>
                                <input type="text">
                            </div>
                            <br>
    
                            <div>
    
                                <label>Apellidos</label>
                                <input type="text">
    
                            </div>
                            <br>
    
                            <div>
                                <label>Telefono</label>
                                <input type="text">
                            </div>
    
                            <br>
    
                            <div>
    
                                <label>Direcion</label>
                                <input type="text">
    
                            </div>
    
                            <br>
                            <div>
    
                                <button type="button">Crear Soporte</button>
                            </div>
    
                        </form> </div>
    
    
                </div>
    <div class="container-flexbox-container">
        <div class="flexbox-container">
            <div>

              <h2>SOPORTE TECNICO</h2>
              <p class="">Brindamos un servicio de soporte técnico completo para abordar cualquier problema que puedas enfrentar con tus sistemas y tecnologías.
                Nuestro equipo altamente capacitado está disponible para responder preguntas, resolver problemas técnicos, realizar diagnósticos y brindar orientación en tiempo real.
                Ya sea que se trate de problemas de hardware, software, redes o cualquier otra área de soporte tecnológico, estamos aquí para ayudarte</p>

            </div>
                <img src="../Recursos/imagenes/logo-1.png" width="200px" height="200px">
        </div>

        <div class="container-flex">
            <div>
                <img src="../Recursos/imagenes/logo-1.png" width="200px" height="200px">

            
            </div>

            <div>
                <h2>Mantenimiento preventivo</h2>
                <p class="">Brindamos un servicio de soporte técnico completo para abordar cualquier problema que puedas enfrentar con tus sistemas y tecnologías.
                  Nuestro equipo altamente capacitado está disponible para responder preguntas, resolver problemas técnicos, realizar diagnósticos y brindar orientación en tiempo real.
                  Ya sea que se trate de problemas de hardware, software, redes o cualquier otra área de soporte tecnológico, estamos aquí para ayudarte</p>
  
            </div>

        </div>

        <div class="flexbox-container" style="margin-top: 20px;">
            <div>

              <h2>Mantenimiento correctivo</h2>
              <p class="">Reparamos cualquier averia o daño que pueda afectar al funcionamiento normal de tus sistemas, realizamos reapraciones sustituciones, restauraciones,
                recuperaciones y otras acciones correctivas para solucionar cualquier problema tecnico que pueda surgir. Nuestro equipo cuenta 
                con los recursos, herramientas y conocimientos necesarios para realizar un servicio rapido, eficaz y profesional
              </p>

            </div>

            <div>

                <img src="../Recursos/imagenes/logo-1.png" width="200px" height="200px">
            </div>

        </div>
    </div>
</section>
    </div>
               

        <div style="position: Fixed; top: 90%; left: 20%;">


        </div>

        <div style="position: Fixed; top: 90%; left: 40%;">


        </div>

        <div style="position: Fixed; top: 90%; left: 60%;">

      

        </div>

        <div style="position: Fixed; top: 90%; left: 80%;">


        </div>

        <script src="script.js"></script>
    </body>
</html>