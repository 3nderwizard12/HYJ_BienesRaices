<?php

session_start();
if(!isset($_SESSION["correo"])){
    header("Location:index.html");
}

require_once("conexion.php");

    $descripcion= $_POST["txtDescripcion"];
    $archivo = $_FILES["filFoto"]["name"];//trae la informacion de la foto
    $correo = $_SESSION["correo"];
   

     $sql = "INSERT INTO tblfoto VALUES(NULL, '$correo' ,'$descripcion','$archivo',NOW())";

    mysqli_query($conexion, $sql);

    move_uploaded_file($_FILES["filFoto"]["tmp_name"],"Fotos/$archivo");

    mysqli_close($conexion);

  header ("Location:fotos.php");
   
?>
