<?php  require "conexion.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Via Saludable</title>
</head>
<body>
    <center> <br><br><br>
       <form action="proceso_guardar.php" method="POST" enctype="multipart/form-data">
            <input type="text" REQUIRED name="nombre" placeholder="Nombre..." value=""><br><br>
            <input type="text" REQUIRED name="descripcion" placeholder="Descripcion..." value=""><br><br>
            <input type="file" REQUIRED name="imagen"><br><br>
            <input type="submit" value="Aceptar">
       </form> 
    </center>
</body>
</html>
