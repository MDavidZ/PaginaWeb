<?php

session_start();

if (!!isset($_SESSION['usuario'])) {
    echo '
    <script>
    alert("Por favor debes iniciar sesion");
    window.location: "index1.php";
    </script>
    ';
    session_destroy();
    die();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D & D</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="javascript/main.js" defer></script>
    <script src="javascript/canva.js" defer></script>
</head>

<body>

    <!-- Contenido del main -->
    <main class="container1">
        <!-- Header -->
        <div class="footer-wrapper">
            <header class="header">
                <a href="inicio.php" class="Logoo">
                    <img class="Logoo_img" src="img/Logoo.jpg" style="margin-top: 1.5rem;">
                </a>

                <section>
                    <nav class="menu">
                        <ul class="menu-list">
                            <li class="menu-list_item"><a href="inicio.php">Inicio</a></li>

                            <li class="menu-list_item menu-item_show "><a class="menu_lis" href="servicios.html"
                                    target="_blank">Servicios
                                    <img src="assets/arrow.svg" calss="menu_arrow"></a>

                                <ul class="menu-nesting">
                                    <li class="menu-inside">
                                        <a href="stcomputadores.html" target="_blank" class="menu-lis menu-lis_inside">
                                            Servecio Técnico
                                            de
                                            Compuatadores </a>
                                    </li>
                                    <li class="menu-inside">
                                        <a href="stcelulares.html" class="menu-lis menu-lis_inside">
                                            Servecio Técnico de
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

        <!-- Content -->
        <article class="content">

            <h1 class="Content_titulo">Reanimamos La Tecnología</h1>
            <br>
            <h2 class="Content_subtitulo">Para solicita nuestros servicio</h2>
            <br>
            <nav class="menu">
                <ul class="menu-list">
                    <li class="menu-list_item"><a class="button1" href="index1.php">Registrate </a></li>
                    <li class="menu-list_item">ó</li>
                    <li class="menu-list_item"><a class="button1" href="contacto.html">Contactanos</a></li>

                </ul>
            </nav>
        </article>

        <div class="ss1">
            <h1 class="s1">Servicios</h1>
            <ul>
                <li>

                </li>
            </ul>
        </div>

        <!--imagenes-->

        <div class="con">
            <figure>
                <img src="img/imagen13.jpg" alt="">
                <div class="capa1">
                    <h2 class="c1">Servecio Técnico de
                        Compuatadores</h2>
                    <li class="menu-list_item"><a class="button1" href="stcomputadores.html">Información... </a></li>

                    </li>
                </div>

            </figure>
        </div>
        <div class="con">
            <figure>
                <img src="img/celular2.jpg" alt="">
                <div class="capa1">
                    <h2 class="c1">Servecio Técnico de Celulares</h2>
                    <li class="menu-list_item"><a class="button1" href="index1.php">Información... </a></li>
                </div>

            </figure>
        </div>
        <div class="con">
            <figure>
                <img src="img/camara.jpg" alt="">
                <div class="capa1">
                    <h2 class="c1">Cámaras de Seguridad</h2>

                    <li class="menu-list_item"><a class="button1" href="index1.php">Información... </a></li>
                </div>

            </figure>
        </div>

        <div class="con3">
            <figure>
                <img src="img/imagen19.jpg" alt="">
                <div class="capa3">
                    <h2 class="c1"> D & D SAS, no es solo una empresa de tecnología, es un aliado y apoyo
                        estratégico para sus clientes, enfocado en infraestructura, montaje y
                        mantenimiento de equipos y redes tecnológicas, sistemas de seguridad, mantenimiento preventivo y
                        correctivo de computadores y todo lo relacionado con sistemas, Seguridad perimetral y redes LAN.
                    </h2>

                </div>

            </figure>
        </div>



        <!-- video -->

        <div class="con1">
            <figure>
                <video muted autoplay loop>
                    <source src="video/tan.mp4" type="video/mp4">
                </video>
                <div class="capa2">
                    <h2 class="c1"> Estaremos encantados de atenderte contactanos</h2>
                    <li class="menu-list_item"><a class="button1" href="contacto.html">Contacto </a></li>
                </div>
            </figure>
        </div>

        <!-- Footer -->
        <div class="footer-wrapper">
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

    </main>

</body>

</html>