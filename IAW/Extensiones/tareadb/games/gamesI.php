<?php
require_once("dbutils.php");
$conexion = conectarDB();

if($_POST){
    $query="INSERT INTO Games (NOMBRE,Dificultad) VALUES (:NOMBRE,:Dificultad)";
    realizarQuery($conexion,$query,$_POST,false);
    echo "Insertado correctamente";
}
?>

<form method="post">
<a href="gamesI.php">Ver los juegos</a>
<a href="gamesD.php">Eliminar juego</a>
<a href="gamesU.php">Actualizar juego</a>
Nombre: <input type="text" name="NOMBRE"><br>
Dificultad: <input type="text" name="Dificultad"><br>
<input type="submit" value="Insertar">
</form>