<?php
session_start();
if(!isset($_SESSION["correo"])){
    header("Location:index.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kahuma</title>
    <style>
        body{
        color:black;
        font-family: Arial, Helvetica,sans-serif;
    }
    </style>
</head>
<body>
    <body background="Imagenes/frutas.jpg">
    <table>
    <tr>
                <td ><img src="Imagenes/logo.jpg" height="150px" width="170px" alt="logo"></td>
                <td style=" width:70%; font-size: 120px;text-align:center; color:black">Kahuma</td>
            </tr>
    <tr>
        <td style=vertical-align:top>Opciones
        <br/>
        <a href='mensajes.php'>Mensajes</a>
            <br/>
            <a href='fotos.php'>Subir Fotos</a>
            <br/>
            <a href='verfotos.php'>Ver Fotos</a>
            <br/>
            <a href='perfil.php'>Perfil</a>
            <br/>
            <a href="cerrarsesion.php">Cerrar Sesión</a>
        </td>
        <td>
            BIENVENIDO...  <?php echo $_SESSION["nombre"]; ?>
            <br>
            <?php
            require_once("conexion.php");
            $correoPara = $_SESSION["correo"];
            $sql= "SELECT M.*,U.usuNombre FROM tblmensajes M
            INNER JOIN tbluser U On M.menDE = U.usuCorreo
            WHERE menPara= '$correoPara'";
            $resultado = mysqli_query($conexion,$sql);
            while($registro=mysqli_fetch_assoc($resultado))
            {
                echo "<br><br>";//Separacion (saltos)
                echo "De:". $registro["usuNombre"]."<br>";
                echo "Asunto:". $registro["menAsunto"]."<br>";
                echo "Mensaje: ". $registro["menMensaje"]."<br>";
                echo "Fecha: ". $registro["menFecha"]."<br>";
            }
            ?>
        </td>
    </tr>
    </table>    
</body>
</body>
</html>