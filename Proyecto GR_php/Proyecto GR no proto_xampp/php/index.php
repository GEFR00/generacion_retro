<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Generacion Retro</title>  <!-- CAMBIAR -->
    <link rel="stylesheet" href="/css/style_for_all.css">
    <link rel="stylesheet" href="/css/style_index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
</head>

<!--Header-->
<?php
    include_once 'header.php';
?>
    <!--Player-->
    <?php
        include_once 'player.php';
    ?>    
    <!--Contenido: página Inicio-->
    <section class="bloque_principal">
        <video src="/video/vinilo_2_video.mov" muted loop autoplay></video>
        <div class="texto_bloque_principal">
            <h2>Tu radio de los 80's</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis iusto tempora accusantium. Quisquam in illum omnis explicabo quam totam minus pariatur, ullam, quia autem voluptates repudiandae, ea vitae officia sint.</p>
        </section>
        
    </div>
    <!--Bloque Team-->
    <div class="bloque_equipo">
        <h2 class="bloque_equipo_titulo">Nuestro Equipo</h2>
        <div class="equipos">
            <div class="equipo">
                <img src="/image/m_otey.jpg" class="imagen_perfil">
                <h3 class="integrante">Mauricio Otey</h3>
                <h5 class="cargo_radio">Locutor GR</h5>
            </div>
            <div class="equipo">
                <img src="/image/c_lopez.jpg" class="imagen_perfil">
                <h3 class="integrante">Claudio Lopez</h3>
                <h5 class="cargo_radio">Locutor KM90</h5>
            </div>
            <div class="equipo">
                <img src="/image/c_diaz.jpg" class="imagen_perfil">
                <h3 class="integrante">Cesar Díaz</h3>
                <h5 class="cargo_radio">Locutor SonidosRetro</h5>
            </div>
            <div class="equipo">
                <img src="/image/m_montana.jpeg" class="imagen_perfil">
                <h3 class="integrante">Mauricio Montaña</h3>
                <h5 class="cargo_radio">Locutor PatagoniaFunk</h5>
            </div>
            <div class="equipo">
                <img src="/image/g_figueroa.jpg" class="imagen_perfil">
                <h3 class="integrante">Gabriel Figueroa</h3>
                <h5 class="cargo_radio">Dj</h5>
            </div>
        </div>
            
    </div>
    <!--Footer-->
    <?php
        include_once 'footer.php';
    ?>
    
</html>