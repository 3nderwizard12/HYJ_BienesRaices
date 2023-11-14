<?php
define("SERVIDOR","localhost");
define("USUARIO","root");
define("CONTRASENA","");
define("BD","kahuma");

$conexion = mysqli_connect(SERVIDOR, USUARIO, CONTRASENA, BD);
?>