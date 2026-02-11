<?php
require_once("dbutils.php");
$conexion = conectarDB();
$games = realizarQuery($conexion,"SELECT * FROM Partidas",null,true);
?>

<h2>Lista de Games</h2>
<a href="partidasI.php">Insertar nueva partida</a>
<a href="partidasD.php">Eliminar partida</a>
<a href="partidasU.php">Actualizar partida</a>
<table border="1">
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Dificultad</th>
</tr>

<?php foreach($games as $g){ ?>
<tr>
    <td><?= $g["ID"] ?></td>
    <td><?= $g["ID_games"] ?></td>
    <td><?= $g["ID_players"] ?></td>
    <td><?= $g["ID_players2"] ?></td>
    <td><?= $g["Nombre"] ?></td>
    <td><?= $g["Valoracion"] ?></td>
</tr>
<?php } ?>

</table>