<?php
require_once("dbutils.php");
$conexion = conectarDB();

if($_POST){
    $query="DELETE FROM Partidas WHERE ID=:ID";
    realizarQuery($conexion,$query,[":ID"=>$_POST["ID"]],false);
    echo "Borrado correctamente";
}
?>

<form method="post">
<a href="partidasI.php">Insertar partidas</a>
<a href="partidas.php">Ver partidas</a>
<a href="partidasU.php">Actualizar partidas</a>   
ID : <input type="number" name="ID"><br>
<input type="submit" value="Borrar">
</form>
