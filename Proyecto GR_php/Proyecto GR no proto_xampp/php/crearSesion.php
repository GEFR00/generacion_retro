<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Crear cuenta</title>
    <link rel="stylesheet" href="/css/style_for_all.css">
    <link rel="stylesheet" href="/css/style_singup.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
    <!--Header -->
    <?php 
        include_once 'header.php'
    ?>
    <!--Player -->
    <?php 
        include_once 'player.php'
    ?>
    <!--Contenido: página crear sesión-->
    <div class="split-screen">
            <div class="left">
                <section class="copy">
                    <h1>Sé parte de la Comunidad Retro</h1>
                    <p>Podrás participar en nuestros concursos y comprar nuestros productos retros</p>
                </section>
            </div>
            <div class="right">
                <form action="/includes/crearSesion.inc.php" method="post">
                    <section class="copy">
                        <h2>Crear Cuenta</h2>
                        <div class="login-container">
                            <p>¿Ya tienes una cuenta?<a href="iniciarSesion.php">
                                <strong>Iniciar Sesión</strong></a></p>
                        </div>
                    </section>
                    <div class="input-container name">
                        <label for="fname">Nombre</label>
                        <input id="fname" name="nombre" type="text">
                    </div>
                    <div class="input-container email">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email">
                    </div>
                    <div class="input-container pass">
                        <label for="password">Contraseña</label>
                        <input id="password" name="password" placeholder="Debe contener al menos 6 letras" type="password">
                    </div>
                    <div class="input-container pass">
                        <label for="password">Repetir contraseña</label>
                        <input id="password" name="passwordRepeat" placeholder="Ingresar contraseña" type="password">
                    </div>
                    <div class="input-container cta">
                        <label class="checkbox-container">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            Guardar información. 
                        </label>
                    </div>
                    <button class="signup-btn" type="submit" name="submit">Crear cuenta</button>
                    <!--Mensaje de errores -->
                    <?php
                        if(isset($_GET["error"])) {
                            if($_GET["error"] == "inputvacio") {
                                echo "<p>Error: Se deben de llenar todos los campos. </p>";
                            }
                            else if($_GET["error"] == "invalidoemail") {
                                echo "<p>Error: El e-mail igresado es inválido. </p>";
                            }
                            else if($_GET["error"] == "passdistintas") {
                                echo "<p>Error: Las contraseñas ingresadas no coinciden. </p>";
                            }
                            else if($_GET["error"] == "emailregistrado") { 
                                echo "<p>Error: Ya existe una cuenta vinculada con este e-mail. </p>";
                            }
                            else if($_GET["error"] == "stmfailed") { 
                                echo "<p>Algo salió mal, inténtalo de nuevo. </p>";
                            }
                            else if($_GET["error"] == "ninguno") { 
                                echo "<p>Cuenta creada con éxito.  </p>";
                            }
                        }
                    ?>
                </form>
            </div>
        </div>
    
    <!--Footer -->
    <?php 
        include_once 'footer.php'
    ?>