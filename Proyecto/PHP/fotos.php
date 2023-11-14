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
    </tr>
    <tr>
        <td>Opciones
        <a href='principal.php'>Regresar</a>
        </td>
        <td>
            Elige tu foto...
            <form id="frmSubirFotos" name="frmSubirFotos" action="subirfotos.php" method="POST" enctype="multipart/form-data">
            <br/>
            <input type= "file" id= "filFoto" name="filFoto"/>
            <br/>
                Descripcion
                <input type="text" id="txtDescripcion" name="txtDescripcion"/>
                <br/>
         <input type="submit" id="btnEnviarFoto" name="btnEnviarFoto" value="Guardar"/>
        </td>
    </tr>
    </table>    
</body>
</body>
</html>