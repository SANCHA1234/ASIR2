<?php
require_once("dbutils.php");
$conexion = conectarDB();

if($_POST){
    $query="UPDATE Players SET Alias=:Alias WHERE ID_players=:ID";
    realizarQuery($conexion,$query,[
        ":Alias"=>$_POST["Alias"],
        ":ID"=>$_POST["ID"]
    ],false);
    echo "Actualizado correctamente";
}
?>

<form method="post">
<a href="playersI.php">Insertar nuevo jugador</a>
<a href="playersD.php">Eliminar jugadores</a>
<a href="players.php">Ver los jugadores</a>
ID players: <input type="number" name="ID"><br>
Experiencia: <input type="number" name="Nivel_Experiencia"><br>
<input type="submit" value="Actualizar">
</form>