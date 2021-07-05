<?php 
    if(isset($_POST["submit"])) {
        $email = $_POST["email"]; 
        $password = $_POST["password"];
        
        require_once 'dbh.inc.php';
        require_once 'funciones.inc.php';

        if(inputVaciosIniciar($email, $password) !== false) {
            header("location: ../php/iniciarSesion.php?error=inputvacio");
            exit();
        }

        inicioUsuario($conn, $email, $password);
    }
    else {
        header("location ../php/iniciarSesion.php");
        exit();
    }
    