<?php

require_once("conexion.php");

$correo = $_POST["emCorreo"];
$contrasena = $_POST["emPassword"];

    if ($correo == ""){
        echo "El campo correo no puede quedar vacio";
        die("<a href='index.html'>Regresar</a>");
    }

    if ($contrasena == ""){
        echo "El campo contrasena no puede quedar vacio";
        die("<a href='index.html'>Regresar</a>");
    }

    $sql ="SELECT * FROM tbluser WHERE  usuCorreo= '$correo'";

    $resultado = mysqli_query($conexion, $sql);

     if($registro = mysqli_fetch_assoc($resultado)){

    if(password_verify($contrasena, $registro["usuContrasena"])) {
        session_start();
        $_SESSION ["correo"]=$correo;
        $_SESSION ["nombre"]=$registro["usuNombre"];
        mysqli_close($conexion);
        header ("Location:principal.php");
    }
    else{
        echo"La contraseña esta mal.Verifique";
        die("<a href='index.html'>Regresar</a>");
    }
}
else{
    echo "El correo no existe";
}
mysqli_close($conexion);
?>