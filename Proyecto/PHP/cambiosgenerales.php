<?php
require_once("conexion.php");

    $actualizarnombre = $_POST["txtNombre"];
    $actualizarfecha = $_POST["regFecha"];


    $sql ="UPDATE tbluser  SET usuNombre='$actualizarnombre', usuFecha='$actualizarfecha'";

    mysqli_query($conexion, $sql);

    mysqli_close($conexion);

    header ("Location:perfil.php");
?>