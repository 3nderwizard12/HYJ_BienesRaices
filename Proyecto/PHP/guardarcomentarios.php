<?php

session_start();
if(!isset($_SESSION["correo"])){
    header("Location:index.html");
}

    $correo = $_SESSION["correo"];
    $comentario = $_POST["txtComentario"];
    $idFoto = $_POST["txtid"];
    //$Fecha=date("Y-m-d H:i");
    
    require_once("conexion.php");
    
    echo $sql = "INSERT INTO tblcomentarios VALUES(NULL,'$correo','$comentario','$idFoto',NOW())";

    mysqli_query($conexion, $sql);

    mysqli_close($conexion);

  header ("Location:verfotos.php");
   
?>
