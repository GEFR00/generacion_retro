<?php

function inputVaciosCrear($nombre, $email, $password, $passwordRepeat) {
    $resultado;
    if(empty($nombre) || empty($email) || empty($password) || empty($passwordRepeat)) {
        $resultado = true; 
    }
    else {
        $resultado = false;
    }

    return $resultado;
}

function invalidoNombre($nombre) {
    $resultado;
    if(!preg_match("/^[a-zA-Z]*$/", $nombre)) {
        $resultado = true; 
    }
    else {
        $resultado = false;
    }

    return $resultado;
}

function invalidoEmail($email) {
    $resultado;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $resultado = true; 
    }
    else {
        $resultado = false;
    }

    return $resultado;
}

function pwdIguales($password, $passwordRepeat) {
    $resultado;
    if($password !== $passwordRepeat) {
        $resultado = true; 
    }
    else {
        $resultado = false;
    }

    return $resultado;
}

function existeEmail($conn, $email) {
    $sql = "SELECT * FROM usuarios WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../php/crearSesion.php?error=stmterror");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultadoData = mysqli_stmt_get_result($stmt); 

    if($fila = mysqli_fetch_assoc($resultadoData)) {
        return $fila;
    }
    else {
        $resultado = false;
        return $resultado;
    }

    mysqli_stmt_close($stmt);
}
function crearUsuario($conn, $nombre, $email, $password) {
    $sql = "INSERT INTO usuarios (nombre, email, pass) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../php/crearSesion.php?error=stmterror");
        exit();
    }
    
    $encripPass = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $nombre, $email, $encripPass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../php/crearSesion.php?error=ninguno");
    exit();
}
## --------------- INICIO SESION  ---------------------------
function inputVaciosIniciar($email, $password) {
    $resultado;
    if(empty($email) || empty($password)) {
        $resultado = true; 
    }
    else {
        $resultado = false;
    }

    return $resultado;
}

function inicioUsuario($conn, $email, $password) {
    $existeEmail = existeEmail($conn, $email);

    if($existeEmail === false) {
        header("location: ../php/iniciarSesion.php?error=inicioerroneo");
        exit();
    }

    $passEncrip = $existeEmail["pass"]; #password de la BD
    $compruebaPass = password_verify($password, $passEncrip);

    if($compruebaPass === false) {
        header("location: ../php/iniciarSesion.php?error=inicioerroneo");
        exit();
    }
    else if($compruebaPass === true) {
        session_start();
        $_SESSION["userid"] = $existeEmail["id"];
        $_SESSION["useremail"] = $existeEmail["email"];
        header("location: ../php/index.php");   
        exit();     
    }
}
