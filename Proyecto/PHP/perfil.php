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
        <a href='principal.php'>Regresar</a>
        <br/>
        <a href='mensajes.php'>Mensajes</a>
            <br/>
            <a href='fotos.php'>Subir Fotos</a>
            <br/>
            <a href='verfotos.php'>Ver Fotos</a>
            <br/>
        </td>
        <td>
            PERFIL
            <br><br>
            Cambio de datos generales
            <form id="frmPerfil" name="frmPerfil" action="cambiosgenerales.php" method="POST">
                Nombre:
                <input type="text" id="txtNombre" name="txtNombre"/>
                <br/>
               Fecha de Nacimiento:
                <input type="date" id="regFecha" name="regFecha"/>
                <br/>
                <input type="submit" id="btnEnviarcambio" name="btnEnviarcambio" value="Enviar"/>
                <br><br>
            </form>
                
            <form id="frmPerfilcontrasena" name="frmPerfilcontrasena" action="cambiocontrasena.php" method="POST">
             Nueva Contraseña:
            <input type="password" id="regnuevaContrasena" name="regnuevaContrasena"/>
            <br/>
            Confirmar Nueva Contraseña:
            <input type="password" id="regnuevaConfirmacion" name="regnuevaConfirmacion"/>
            <br/>
         <input type="submit" id="btnNuevaContrasena" name="btnNuevaContrasena" value="Guardar"/>
         </form>
        </td>
    </tr>
    </table>    
</body>
</body>
</html>