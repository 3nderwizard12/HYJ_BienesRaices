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
            Ver foto...
            <?php
            require_once("conexion.php");
            $correo= $_SESSION["correo"];
            $archivo = ["name"];//trae la informacion de la foto
            $sql= "SELECT F.*,U.usuNombre FROM tblfoto F
            INNER JOIN tbluser U On F.fotCorreo = U.usuCorreo
            ORDER BY FotFecha DESC ";//ASC (Mas antigua) DESC (Agregado actual)
            $resultado = mysqli_query($conexion,$sql);
            
            while($registro=mysqli_fetch_assoc($resultado))
            {
               echo "<br><br>";//Separacion (saltos)
                echo "De:". $registro["usuNombre"]."<br>";
                echo "Fecha/Hora : ". $registro["fotFecha"]."<br>";
                echo "Descripcion:". $registro["fotDescripcion"]."<br>";
                $archivo =$registro ["fotArchivo"];
                echo "<img src= 'Fotos/$archivo' height='200px' width='auto'>";
            ?>
         
            <form id="frmMegusta" name="frmMegusta" method="POST" action= "guardarMegusta.php">
            <input type="hidden" id="txtidMegusta" name="txtidMegusta" value="<?php echo $registro["fotId"];?>"/>
            <input type="image" id="btnMegusta" name="btnMegusta" src="Imagenes/logo.jpg" height="50px" width="auto">
            </form>
           
           <?php include("contarMegusta.php"); ?>

             <form id="frmComentarios" name="frmComentario" method="POST" action="guardarcomentarios.php" >
                 <input type="hidden" id="txtid" name="txtid"  value="<?php echo $registro["fotId"];?>"/>
                Comentarios
                <input type="text" id="txtComentario" name="txtComentario"/>
                <br/>
                <input type="submit" id="btnEnviarComentario" name="btnEnviarComentario" value="Enviar"/>
            </form>
            <?php
              $idFoto = $registro ["fotId"];
              $sql1 = "SELECT * FROM tblcomentarios WHERE comFoto = $idFoto";
              $resultado1 = mysqli_query($conexion,$sql1);

              while($registro1=mysqli_fetch_assoc($resultado1))
              {
                echo "<br><br>";//Separacion (saltos)
                echo "Comentario de:". $registro1 ["comCorreo"]."<br>";
                echo "Fecha/Hora : ". $registro1 ["comFecha"]."<br>";
                echo "Comentario:". $registro1["comComentario"]."<br>";
              }
            }
            ?>
        </td>
       
    </tr>
    </table>    
</body>
</body>
</html>