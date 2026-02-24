<?php
require_once("dbutils.php");
$conexion = conectarDB();
$games = realizarQuery($conexion,"SELECT * FROM Puntosflotantes",null,true);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


<div class="container mt-4">
    <h2 class="mb-4">Lista de Partidas</h2>
    
    <div class="mb-3">
        <a href="mostrar.php" class="btn btn-success btn-sm">Muestra todas las columnas</a>
        <a href="suma100.php" class="btn btn-primary btn-sm">Para borrar las filas que me y sum sumen 100</a>
        <a href="insertar.php" class="btn btn-danger btn-sm">Para insertar nuevas filas</a>
        <a href="actualizar.php" class="btn btn-danger btn-sm">Para sumar +1 a las filas</a>

    </div>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
                <tr>
                    <th>sum</th>
                    <th>Enlace</th>
                </tr>


<?php foreach($games as $g){ ?>
<tr>
    <td><?= $g["sum"] ?></td>
    <td><?= $g["Enlace"] ?></td>
</tr>
<?php } ?>

</table>