<?php

session_start();
if(!isset($_SESSION["correo"])){
    header("Location:index.html");
}

    $correo = $_SESSION["correo"];
    $idFoto = $_POST["txtidMegusta"];
    //$Fecha=date("Y-m-d H:i");
    
    require_once("conexion.php");
    
    $sql1= "SELECT COUNT(*) FROM tblmegusta WHERE likFoto=$idFoto AND likCorreo='$correo'";
    $resultado1= mysqli_query($conexion, $sql1);
    $registro1= mysqli_fetch_row($resultado1);
    if($registro1[0]== 0){
    $sql = "INSERT INTO tblmegusta VALUES(NULL,'$correo','$idFoto', NOW())";
}
    else{
  $sql ="DELETE FROM tblmegusta WHERE likFoto=$idFoto AND likCorreo ='$correo'";
}
    mysqli_query($conexion, $sql);
    mysqli_close($conexion);

     header ("Location:verfotos.php");
   
?>
