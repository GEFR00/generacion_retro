<body>
    <!--Inicio de página-->
    <nav>
        <div id="banner">
            <img id="logo_banner" src="/image/Generacion Retro_LogoPrototipo.png" alt="logo_GR">
        </div>
        <ul class="nav_links">
            <li><a href="index.php">Home</a></li>
            <li><a href="envivo.php">EnVivo</a></li>
            <li><a href="programas.php">Programas</a></li>
            <li><a href="tienda.php">Tienda</a></li>
            <li><a href="noticias.php">Noticias</a></li>
            <?php
                if (isset($_SESSION["useremail"])) {
                    echo "<li><a href='perfilCuenta.php'>Cuenta</a></li>";
                    echo "<li><a href='/includes/cerrarSesion.inc.php'>Cerrar Sesion</a></li>";
                }
                else {
                    echo "<li><a href='crearSesion.php'>Crear Sesion</a></li>";
                    echo "<li><a href='iniciarSesion.php'>Iniciar Sesion</a></li>";
                }
            ?>
        </ul>
        <!--Lineas interactivas-->
        <div class="menu_responsive">
            <div class="linea_1"></div>
            <div class="linea_2"></div>
            <div class="linea_3"></div>
        </div>
    </nav>


