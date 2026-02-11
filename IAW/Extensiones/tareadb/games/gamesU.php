<?php
require_once("dbutils.php");
$conexion = conectarDB();

if($_POST){
    $query="UPDATE Games SET Dificultad=:Dificultad WHERE ID_games=:ID";
    realizarQuery($conexion,$query,[
        ":Dificultad"=>$_POST["Dificultad"],
        ":ID"=>$_POST["ID"]
    ],false);
    echo "Actualizado correctamente";
}
?>

<form method="post">
<a href="gamesI.php">Insertar nuevo juego</a>
<a href="gamesD.php">Eliminar juegos</a>
<a href="games.php">Ver los juegos</a>
ID Game: <input type="number" name="ID"><br>
Nueva Dificultad: <input type="text" name="Dificultad"><br>
<input type="submit" value="Actualizar">
</form>