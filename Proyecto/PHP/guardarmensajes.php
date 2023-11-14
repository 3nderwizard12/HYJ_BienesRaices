<?php

session_start();
if(!isset($_SESSION["correo"])){
    header("Location:index.html");
}

require_once("conexion.php");

    $para = $_POST["txtPara"];
    $de = $_SESSION["correo"];
    $asunto = $_POST["txtAsunto"];
    $mensaje = $_POST["txtMensaje"];
    

    if ($para == ""){
        echo "El campo no puede quedar vacio";
    }
    if ($asunto == ""){
        echo "El campo no puede quedar vacio";
    }

    if ($mensaje== ""){
        echo "El campo confirmación no puede quedar vacio";
    }

    echo $sql = "INSERT INTO tblmensajes VALUES(NULL,'$para','$de','$asunto','$mensaje', NOW())";

    mysqli_query($conexion, $sql);

    mysqli_close($conexion);

  header ("Location:mensajes.php");
   
?>
