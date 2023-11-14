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
            <tr>
                <td ><img src="Imagenes/logo.jpg" height="150px" width="170px" alt="logo"></td>
                <td style=" width:70%; font-size: 120px;text-align:center; color:black">Kahuma</td>
            </tr>
        </tr>
    </tr>
    <tr>
    <td style=vertical-align:top>Opciones
        <a href='principal.php'>Regresar</a>
        </td>
        <td>
            Ingresa tu mensaje...
            <form id="frmMensajes" name="frmMensajes" action="guardarmensajes.php" method="POST">
                
                Para:
                <input type="text" id="txtPara" name="txtPara"/>
                <br/>
                Asunto:
                <input type="text" id="txtAsunto" name="txtAsunto"/>
                <br/>
                 Mensaje:
                <input type="text" id="txtMensaje" name="txtMensaje"/>
                <br/>
         <input type="submit" id="btnEnviarMen" name="btnEnviarMen" value="Registro"/>

        </td>
    </tr>
    </table>    
</body>
</body>
</html>