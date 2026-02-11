<?php
require_once("dbutils.php");
$conexion = conectarDB();
$players = realizarQuery($conexion,"SELECT * FROM Players",null,true);
?>

<h2>Lista de Players</h2>

<a href="playersI.php">Insertar</a>
<a href="playersD.php">Eliminar</a>
<a href="playersU.php">Actualizar</a>

<table border="1">
<tr>
    <th>ID_players</th>
    <th>Alias</th>
    <th>Nivel_Experiencia</th>
</tr>

<?php foreach($players as $p){ ?>
<tr>
    <td><?= $p["ID_players"] ?></td>
    <td><?= $p["Alias"] ?></td>
    <td><?= $p["Nivel_Experiencia"] ?></td>
</tr>
<?php } ?>

</table>
