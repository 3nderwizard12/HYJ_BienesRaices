<?php

require_once("conexion.php");

    $correo = $_POST["regCorreo"];
    $contrasena = $_POST["regContrasena"];
    $confirmarcontrasena = $_POST["regConfirmacion"];
    $nombre = $_POST["regNombre"];
    $fecha = $_POST["regFecha"];

    if ($contrasena != $confirmarcontrasena){
        echo "La contraseña y la confirmación no coinciden";
        die("<a href='index.html'>Regresar</a>");
    }

    if ($correo == ""){
        echo "El campo correo no puede quedar vacio";
        die("<a href='index.html'>Regresar</a>");
    }

    if ($contrasena == ""){
        echo "El campo contrasena no puede quedar vacio";
        die("<a href='index.html'>Regresar</a>");
    }

    if ($confirmarcontrasena== ""){
        echo "El campo confirmación no puede quedar vacio";
        die("<a href='index.html'>Regresar</a>");
    }

    if ($nombre == ""){
        echo "El campo nombre no puede quedar vacio";
        die("<a href='index.html'>Regresar</a>");
    }

    if ($fecha == ""){
        echo "El campo fecha no puede quedar vacio";
        die("<a href='index.html'>Regresar</a>");
    }

    $cifrada = password_hash($contrasena, PASSWORD_DEFAULT);
    $sql = "INSERT INTO tbluser VALUES('$cifrada','$correo','$fecha','$nombre')";

    mysqli_query($conexion, $sql);

    mysqli_close($conexion);

    echo "<a href='index.html'>Regresar</a>";
?>