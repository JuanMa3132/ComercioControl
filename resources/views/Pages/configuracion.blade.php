<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración</title>
    <link rel="icon" href="../Recursos/imagenes/logo-1.png" type="image/png">
    <!--Hojas de estilo-->
    <link rel="stylesheet" href="{{asset('css/configuracion.css')}}">
   
   
   <!--Icons cdn-->
    
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   

    <!--Script cdn-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</head>

<body>
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>
    <div class="content">
        <section id="menu">
            <div class="logo">
                <img src="../Recursos/imagenes/intento_2-transformed-removebg-preview (1).png" alt="Logo del software">
                 <h2 class="admin-text">Administrador</h2>
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
                             <li><a class="dropdown-item" href="{{route('logout')}}">Cerrar sesion</a></li>
                           </ul>
                     </div>
                  </div>
        
             <!--Config SECTION-->
             <div class="Container-config">
                 <div class="board">
                     <table width="100%">
                         <thead>
                             <tr>
                             
                                 <td>Nombre</td>
                                 <td>ID</td>
                                 <td>Rol</td>
                                 <td>Status</td>
                                 <td>Editar</td>
                                 <td></td>
                             
                              </tr>
                             
                         </thead>
                         <tbody>
                             <tr>
                         
         
         
                             <td class="people">
                                 <img src="../Recursos/imagenes/girl-2215071_1280.jpg" alt="">
                                 <div class="people-de">
                                     <h5>Gaspar Salazar</h5>
                                     <p>Gasparsal@gmail.com</p>
                                 
         
                                 </div>
                             </td>
         
                             <td class="people-id ">
                         
                                    
                                     <h5>423464</h5>
                                    
                               
                             </td>
         
                             <td class="people-des">
                                     <h5>Trabajador</h5>
                                         
         
                                
                             </td>
     
                                 
                     
                             
                         </td>
     
                                 
                             
         
                             
                         </td>
         
                         <td class="people-status">
                             <p>Activo</p>
                             
                         
         
                        
                     </td>
         
                     <td class="edit">
         
         
                         <button class="btn primary">Edit</button>
                         
         
                         <button class="btn secondary">Borrar</button>
         
                     
                 </td>
         
         
         
         
                             
                             </tr>
                             <tr>
                         
         
         
                                 <td class="people">
                                     <img src="../Recursos/imagenes/pexels-andrea-piacquadio-3771807.jpg" alt="">
                                     <div class="people-de">
                                         <h5>Gaspar Salazar</h5>
                                         <p>Gasparsal@gmail.com</p>
                                     
             
                                     </div>
                                 </td>
             
                                 <td class="people-id ">
                             
                                        
                                         <h5>423464</h5>
                                        
                                   
                                 </td>
             
                                 <td class="people-des">
                                         <h5>Trabajador</h5>
                                             
             
                                    
                                 </td>
             
             
             
                             <td class="people-status">
                                 <p>Activo</p>
                                 
                             
             
                            
                         </td>
             
                         <td class="edit">
                 
         
                         <button class="btn primary">Edit</button>
         
                         <button class="btn secondary">Borrar</button>
                         
                           
                         
                     </td>
             
             
             
             
                                 
                                 </tr><tr>
                         
         
         
                                     <td class="people">
                                         <img src="../Recursos/imagenes/pexels-emmy-e-2381069.jpg" alt="">
                                         <div class="people-de">
                                             <h5>Gaspar Salazar</h5>
                                             <p>Gasparsal@gmail.com</p>
                                         
                 
                                         </div>
                                     </td>
                 
                                     <td class="people-id ">
                                 
                                            
                                             <h5>423464</h5>
                                            
                                       
                                     </td>
                 
                                     <td class="people-des">
                                         <h5>Trabajador</h5>
                                                 
                 
                                        
                                     </td>
                 
                 
                                 <td class="people-status">
                                     <p>Activo</p>
                                     
                                 
                 
                                
                             </td>
                 
                             <td class="edit">
                          <button class="btn primary">Edit</button>
         
                         <button class="btn secondary">Borrar</button>
                 
                             
                         </td>
                 
                 
                 
                 
                                     
                                     </tr><tr>
                         
         
         
                                         <td class="people">
                                             <img src="../Recursos/imagenes/pexels-andrea-piacquadio-3771807.jpg" alt="">
                                             <div class="people-de">
                                                 <h5>Gaspar Salazar</h5>
                                                 <p>Gasparsal@gmail.com</p>
                                             
                     
                                             </div>
                                         </td>
                     
                                         <td class="people-id ">
                                     
                                                
                                                 <h5>423464</h5>
                                                
                                           
                                         </td>
                     
                                         <td class="people-des">
                                             <h5>Trabajador</h5>
                                                     
                     
                                            
                                         </td>
                     
                                     <td class="people-status">
                                         <p>Activo</p>
                                         
                                     
                     
                                    
                                 </td>
                     
                                 <td class="edit">
                          <button class="btn primary">Edit</button>
         
                         <button class="btn secondary">Borrar</button>
                     
                                 
                             </td>
                     
                     
                     
                     
                                         
                                         </tr><tr>
                         
         
         
                                             <td class="people">
                                                 <img src="../Recursos/imagenes/pexels-andrea-piacquadio-3771807.jpg" alt="">
                                                 <div class="people-de">
                                                     <h5>Gaspar Salazar</h5>
                                                     <p>Gasparsal@gmail.com</p>
                                                 
                         
                                                 </div>
                                             </td>
                         
                                             <td class="people-id ">
                                         
                                                    
                                                     <h5>423464</h5>
                                                    
                                               
                                             </td>
                         
                                             <td class="people-des">
                                                     <h5>Trabajador</h5>
                                                         
                         
                                                
                                             </td>
                         
                         
                                         <td class="people-status">
                                             <p>Activo</p>
                                             
                                         
                         
                                        
                                     </td>
                         
                                     <td class="edit">
                                   <button class="btn primary">Edit</button>
         
                                    <button class="btn secondary">Borrar</button>
         
                         
                                     
                                 </td>
                         
                 
                                             
                                             </tr>
         
                         </tbody>
                               
                     </table>
                     <div class="container-change-clrInterface">
                         <div class="container-cfg-block">
                             <H2>Cambiar diseño de la interfaz</H2>
                             <div class="seleccion-color">
                                 <H3>Color</H3>
                                 <ul class="colors-ul">
                                     <li class="color-item" id="red" onclick="cambiarEstilo('{{asset('css/Estilos-personalizados/red-theme.css')}}')"></li>
                                     <li class="color-item" id="green"></li>
                                     <li class="color-item" id="amber"></li>
                                     <li class="color-item" id="blue"></li>
                                     <li class="color-item" id="gray"></li>
                                 </ul>
                             </div>
     
                         </div>
                     </div>
             </div>
    </div>
    

        <!--Cierre config Section-->

        <script>
            $("#menu-btn").click(function(){
                $("#menu").toggleClass("active");
            })
        </script>  <!--animate burguer btn in small screens-->

    </section>
<script src="{{asset('js/configuracion.js')}}"></script>
</body>
</html>