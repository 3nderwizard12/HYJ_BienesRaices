<?php
session_start();
session_destroy();
if(!isset($_SESSION["correo"])){
    header("Location:index.html");
}
header("Location:index.html");
?>