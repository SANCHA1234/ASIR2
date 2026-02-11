<?php
require_once("dbutils.php");
$conexion = conectarDB();

if($_POST){
    $query="INSERT INTO Partidas (Nombre,Valoracion) VALUES (:Nombre,:Valoracion)";
    realizarQuery($conexion,$query,$_POST,false);
    echo "Insertado correctamente";
}
?>

<form method="post">
<a href="partidas.php">Ver los juegos</a>
<a href="partidasD.php">Eliminar juego</a>
<a href="partidasU.php">Actualizar juego</a>
Nombre: <input type="text" name="Nombre"><br>
Valoracion: <input type="text" name="Valoracion"><br>
ID: <input type="number" name="ID"><br>
<input type="submit" value="Insertar">
</form>