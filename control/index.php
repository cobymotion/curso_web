<?php
session_start(); 
if(!isset($_SESSION['usuario']))
{
    header("location: ../");
}

if(isset($_GET['salir'])){
    session_destroy();
    header("Location: index.php");
}

?>


<a href="index.php?salir=1">Salir</a>