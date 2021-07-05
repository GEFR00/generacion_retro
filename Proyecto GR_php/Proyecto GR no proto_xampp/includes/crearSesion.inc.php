<?php
    if(isset($_POST["submit"])) {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordRepeat = $_POST["passwordRepeat"];

        require_once 'dbh.inc.php';
        require_once 'funciones.inc.php';

        if(inputVaciosCrear($nombre, $email, $password, $passwordRepeat) !== false) {
            header("location: ../php/crearSesion.php?error=inputvacio");
            exit();
        }
        if(invalidoEmail($email) !== false) {
            header("location: ../php/crearSesion.php?error=invalidoemail");
            exit();
        }
        if(pwdIguales($password, $passwordRepeat) !== false) {
            header("location: ../php/crearSesion.php?error=passdistintas");
            exit();
        }
        if(existeEmail($conn, $email) !== false) {
            header("location: ../php/crearSesion.php?error=emailregistrado");
            exit();
        }

        ##No hubo errores 
        crearUsuario($conn, $nombre, $email, $password); ##crear apellido label 
    }

    else {
        header("location: ../crearSesion.php");
        exit();
    }
