<?php
session_start();
if(!isset($_SESSION["correo"])){
    header("Location:index.html");
}
?>
<?php
require_once("conexion.php");

    $nuevacontrasena = $_POST["regnuevaContrasena"];
    
    $cifrada = password_hash($nuevacontrasena, PASSWORD_DEFAULT);
    $sql ="UPDATE tbluser  SET usuContrasena='$cifrada'";

    $resultado = mysqli_query($conexion, $sql);

     if($registro = mysqli_fetch_assoc($resultado)){
    if(password_verify($nuevacontrasena, $registro["usuContrasena"])) {
        session_start();
        $_SESSION ["correo"]=$correo;
        mysqli_close($conexion);
    }
    else{
        echo"Verifique";
        die("<a href='perfil.php'>Regresar</a>");
    }
}
header ("Location:perfil.php");
?>