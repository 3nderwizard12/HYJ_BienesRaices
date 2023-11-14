<?php

$idFotoMegusta= $registro["fotId"];
$sqlMegusta= "SELECT COUNT(*) FROM tblmegusta WHERE likFoto=$idFotoMegusta";

$resultadoMegusta=  mysqli_query($conexion, $sqlMegusta);
$registroMegusta = mysqli_fetch_row($resultadoMegusta);
echo $registroMegusta[0]

?>