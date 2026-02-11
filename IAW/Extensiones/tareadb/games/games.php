<?php
require_once("dbutils.php");
$conexion = conectarDB();
$games = realizarQuery($conexion,"SELECT * FROM Games",null,true);
?>

<h2>Lista de Games</h2>
<a href="gamesI.php">Insertar nuevo juego</a>
<a href="gamesD.php">Eliminar Juego</a>
<a href="gamesU.php">Actualizar Juegos</a>
<table border="1">
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Dificultad</th>
</tr>

<?php foreach($games as $g){ ?>
<tr>
    <td><?= $g["ID_games"] ?></td>
    <td><?= $g["NOMBRE"] ?></td>
    <td><?= $g["Dificultad"] ?></td>
</tr>
<?php } ?>

</table>