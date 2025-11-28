<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pitufo gruñon</title>
  <style>
  
  </style>
</head>
<body>
<h1>Resumen </h1>

<h1>Pitufro gruñon</h1>
    <form action ="p4.php" method ="post">
    <div> 
         
         Vuelve a introducir un numero del 1 al 9<input type= "number" name ="num_suerte_2">
         </div>
        <div>
            <input type="submit" value = "Suerte">
        </div>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $edad = isset($_POST['edad']) ? intval($_POST['edad']) : 0;
    $num_suerte= isset($_POST['num_suerte']) ? intval($_POST['num_suerte']) : 0;
    $nombre_1 = isset($_POST['nombre_1']) ? htmlspecialchars($_POST['nombre_1']) : '';    
    $apellidos_1 = isset($_POST['apellidos_1']) ? htmlspecialchars($_POST['apellidos_1']) : ''; 


    echo "<p>La edad es: $edad</p>"; 
    echo "<p>El apellido es: $num_suerte</p>";
    echo "<p>El nombre es: $nombre_1</p>"; 
    echo "<p>El apellido es: $apellidos_1</p>";
    $nombre = isset($_GET['nombre']) ? htmlspecialchars($_GET['nombres']) : '';
    $apellidos = isset($_GET['apellidos']) ? htmlspecialchars($_GET['apellidos']) : '';

    ?>
    <?php
   
    
   
}