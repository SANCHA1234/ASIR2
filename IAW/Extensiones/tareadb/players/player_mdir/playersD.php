<?php
require_once("dbutils.php");
$conexion = conectarDB();

if($_POST){
    $query="DELETE FROM Players WHERE ID_players=:ID";
    realizarQuery($conexion,$query,[":ID"=>$_POST["ID"]],false);
    echo "Borrado correctamente";
}
?>

<form method="post">
<a href="playersI.php">Insertar nuevos jugadores</a>
<a href="players.php">Ver los jugadores</a>
<a href="playersU.php">Actualizar nuevos jugadores</a>   
ID players: <input type="number" name="ID"><br>
<input type="submit" value="Borrar">
</form>