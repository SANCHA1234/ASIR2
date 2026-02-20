<?php
require_once("dbutils.php");
$conexion = conectarDB();
 
if($_POST){
    $query="UPDATE Players SET Valoracion=:Valoracion WHERE ID=:ID";
    realizarQuery($conexion,$query,[
        ":Valoracion"=>$_POST["Valoracion"],
        ":ID"=>$_POST["ID"]
    ],false);
    echo "Actualizado correctamente";
}
?>

<form method="post">
<a href="partidasI.php">Insertar nueva partida</a>
<a href="partidasD.php">Eliminar partida</a>
<a href="partidas.php">Ver las partidas</a>
ID: <input type="number" name="ID"><br>
Valoracion: <input type="text" name="Valoracion"><br>
<input type="submit" value="Actualizar">
</form>