<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Programas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/style_for_all.css">
    <link rel="stylesheet" href="/css/style_programas.css">
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
    <!--Bloque Programas-->
    <div class="container">
            <h2 class="titulo_programas">Comparte junto a Nosotros</h2>
            <div id="slider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#slider" data-slide-to="0" class="active"></li>
                    <li data-target="#slider" data-slide-to="1"></li>
                    <li data-target="#slider" data-slide-to="2"></li>
                    <li data-target="#slider" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-4">
                                <div>
                                    <h3 class="titulo_programa">Generación Retro</h3>
                                    <h4 class="info_programa">Luneas a Viernes</h4>
                                    <h5 class="info_programa">8:30 a 12:00</h5>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <img src="/image/programa_7.jpg" class="imagen_programa">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-4">
                                <div>
                                    <h3 class="titulo_programa">Sonidos Retro</h3>
                                    <h4 class="info_programa">Luneas y Viernes</h4>
                                    <h5 class="info_programa">21:00 a 22:00hrs</h5>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <img src="/image/programa_2.jpeg" class="imagen_programa">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-4">
                                <div>
                                    <h3 class="titulo_programa">KM 90</h3>
                                    <h4 class="info_programa">Viernes</h4>
                                    <h5 class="info_programa">Desde las 17:00hrs</h5>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <img src="/image/programa_5.jpeg" class="imagen_programa">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-4">
                                <div>
                                    <h3 class="titulo_programa">Patagonia Funk</h3>
                                    <h4 class="info_programa">Sábado</h4>
                                    <h5 class="info_programa">16:00 a 17:00hrs</h5>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <img src="/image/programa_4.jpeg" class="imagen_programa">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-4">
                                <div>
                                    <h3 class="titulo_programa">GR Discoteque</h3>
                                    <h4 class="info_programa">Sábado</h4>
                                    <h5 class="info_programa">Desde las 22:00hrs</h5>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <img src="/image/programa_3.jpeg" class="imagen_programa">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#slider" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Atrás</span>
                </a>
                <a class="right carousel-control" href="#slider" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>

    <!--Footer -->
    <?php
        include_once 'footer.php'
    ?>