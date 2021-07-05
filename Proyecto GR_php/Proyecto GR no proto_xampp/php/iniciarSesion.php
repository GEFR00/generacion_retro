<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="/css/style_for_all.css">
    <link rel="stylesheet" href="/css/style_login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
    <!--Header-->
    <?php
        include_once 'header.php'
    ?>
    <!--Player-->
    <?php
        include_once 'player.php'
    ?>
    <!--Contenido: página inicio de sesion -->
    <div class="contenido_inicio_sesion">
            <div class="contenido_fondo">
                <h2>Iniciar sesión</h2>
            <form action="/includes/iniciarSesion.inc.php" method="post">
                <div class="bloque_inicio_sesion">
                    <div class="input_email">
                        <label for="email">Correo electrónico</label>
                        <input id="email" name="email" type="email">
                    </div>
                    <div class="input_password">
                        <label for="password">Contraseña</label>
                        <input id="password" name="password" type="password">
                    </div>
                    <button class="iniciar_boton" type="submit" name="submit">Iniciar Sesión</button>
                </div>
                <?php
                        if(isset($_GET["error"])) {
                            if($_GET["error"] == "inputvacio") {
                                echo "<p>Error: Se deben de llenar todos los campos. </p>";
                            }
                            else if($_GET["error"] == "inicioerroneo") {
                                echo "<p>Error: Los datos ingresados no son correctos. </p>";
                            }
                        }
                    ?>
            </form>
            </div>
            
        </div>

    <?php
        include_once 'footer.php'
    ?>