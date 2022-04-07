<?php
include ("php/conexion.php"); 

$conn = conexion();

$fecha= $_POST['fecha'];
$medida= $_POST['medida'];

$sql="INSERT INTO medidas (fecha, medida) VALUES ('$fecha','$medida')";
$query= mysqli_query($conn,$sql);

 
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="estilos.css">
     <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
     <title>Exito</title>
 </head>
 <body>
          <h1>Haz agragado una medida a la base de datos</h1>
          <br>
          <div class="contenedor">
          <a href="index.php">Volver</a>
          </div>
          

 </body>
 </html>