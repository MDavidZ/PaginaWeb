<?php

session_start();

if (isset($_SESSION['usuario'])) {
    header("location: inicio.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/estilo.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="javascript/main.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="javascript/inicio.js" defer></script>
    <title>Menu de Registro</title>
</head>

<body>



    <div class="footer-wrapper">
        <header class="header">
            <a href="#" class="Logoo">
                <img class="Logoo_img" src="img/Logoo.jpg" style="margin-top: 1.5rem;">
            </a>
            <section>
                <nav class="menu">
                    <ul class="menu-list">
                        <li class="menu-list_item"><a href="inicio.php">Inicio</a></li>

                        <li class="menu-list_item menu-item_show "><a class="menu_lis" href="servicios.html">Servicios
                                <img src="assets/arrow.svg" calss="menu_arrow"></a>

                            <ul class="menu-nesting">
                                <li class="menu-inside">
                                    <a href="stcomputadores.html" class="menu-lis menu-lis_inside"> Servecio Técnico
                                        de
                                        Compuatadores </a>
                                </li>
                                <li class="menu-inside">
                                    <a href="stcelulares.html" class="menu-lis menu-lis_inside"> Servecio Técnico de
                                        Celulares </a>
                                </li>
                                <li class="menu-inside">
                                    <a href="#" class="menu-lis menu-lis_inside"> Cámaras de Seguridad </a>
                                </li>
                            </ul>
                        <li class="menu-list_item"><a class="menu_lis " href="nosotros.html">Nosotros
                                <img src="assets/arrow.svg" calss="menu_arrow"></a>
                            <ul class="menu-nesting">
                                <li class="menu-inside">
                                    <a href="contacto.html" class="menu-lis menu-lis_inside"> Contacto </a>
                                </li>
                            </ul>

                        </li>
                        <li class="menu-list_item"><a href="Productos.html">Productos</a></li>

                    </ul>
                </nav>
            </section>
        </header>
    </div>
    <br>

    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__inicia-sesion">Inicia sesión</button>
                </div>
                <div class="caja__trasera-registro">
                    <h3>¿Aún no tengo una cuenta?</h3>
                    <p>Registrate para que puedas inicair sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>
            <!-- Formulario de inisio de sesion  y registro  -->
            <div class="contenedor__login-registro">
                <!-- Inicio de sesión -->
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo" />
                    <input type="password" placeholder="Contraseña" name="contrasena" />
                    <button>Entrar</button>
                </form>
                <!-- Registro -->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__registro">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo" />
                    <input type="text" placeholder="Correo Electronico" name="correo" />
                    <input type="text" placeholder="Usuario" name="usuario" />
                    <input type="password" placeholder="Contraseña" name="contrasena" />
                    <button>Regístrarse</button>
                </form>
            </div>

        </div>
    </main>
    <br>
    <br>
    <br>

    <div class="footer-wrapper" style="margin-top: 1.5rem;">
        <footer class="footer">
            <section class="footer_widget">
                <h3 class="footer_widget_titulo">Ubicación</h3>
                <p class="footer_widget_texto">####################</p>
            </section>
            <section class="footer_widget">
                <h3 class="footer_widget_titulo">Contacto</h3>
                <p class="footer_widget_texto">+57 3134204054</p>
            </section>
            <section class="footer_widget">
                <h3 class="footer_widget_titulo">Gmail</h3>
                <p class="footer_widget_texto">DyDTecnologia0.1@gmail.com</p>
            </section>
        </footer>
    </div>

</body>

</html>