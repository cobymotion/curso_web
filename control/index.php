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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aplicacion de pelicula </title>
</head>
<body>
 <a href="index.php?salir=1">Salir</a>   
 
 <form name="forma" action="upload.php" id="forma" method="post" enctype="multipart/form-data"
    target="peliculaFrame">
     <fieldset>
         <legend>
             Agregar Prelicula
         </legend>
         <label for="titulo">Titulo</label>
         <input type="text" id="titulo" placeholder="Titulo...." name="titulo"><br> 
         <label for="sinopsis">Sinopsis</label>
         <textarea name="sinopsis" id="sinopsis" cols="50" rows="3"></textarea><br>
         <label for="imagen">Imagen:</label>
         <input type="file" name="imagen" id="imagen"><br><br>
         <input type="submit" value="Agregar" > 
         | <input type="reset" value="limpiar" >
     </fieldset>
 </form>
 
 <iframe name="peliculaFrame"></iframe>
    <script type="text/javascript">
        function recarga() {
            window.location.href="index.php";
        }
    </script>
 </body>
</html>

