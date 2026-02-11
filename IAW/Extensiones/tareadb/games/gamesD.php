<?php
require_once("dbutils.php");
$conexion = conectarDB();

if($_POST){
    $query="DELETE FROM Games WHERE ID_games=:ID";
    realizarQuery($conexion,$query,[":ID"=>$_POST["ID"]],false);
    echo "Borrado correctamente";
}
?>

<form method="post">
<a href="gamesI.php">Insertar nuevo juego</a>
<a href="games.php">Ver los juegos</a>
<a href="gamesU.php">Actualizar juegos</a>   
ID Game: <input type="number" name="ID"><br>
<input type="submit" value="Borrar">
</form>