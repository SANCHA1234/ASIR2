<?php
require_once("dbutils.php");
$conexion = conectarDB();
$games = realizarQuery($conexion,"SELECT * FROM Puntosflotantes",null,true);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


<div class="container mt-4">
    <h2 class="mb-4">Lista de filas</h2>
    
    <div class="mb-3">
        <a href="suma100.php" class="btn btn-success btn-sm">Para borrar la fila que sum y me de más  de 100</a>
        <a href="flotante.php" class="btn btn-primary btn-sm">Para que se muestren sum y el enlace/a>
        <a href="insertar.php" class="btn btn-danger btn-sm">Para insertar nuevas filas</a>
        <a href="actualizar.php" class="btn btn-danger btn-sm">Para sumar +1 a las filas</a>
    </div>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
                <tr>
                    <th>x</th>
                    <th>x</th>
                    <th>y</th>
                    <th>z</th>
                    <th>ME</th>
                    <th>cxyz</th>
                    <th>sum</th>
                    <th>Enlace</th>
                </tr>


<?php foreach($games as $g){ ?>
<tr>
    <td><?= $g["ID"] ?></td>
    <td><?= $g["x"] ?></td>
    <td><?= $g["y"] ?></td>
    <td><?= $g["z"] ?></td>
    <td><?= $g["ME"] ?></td>
    <td><?= $g["cxyz"] ?></td>
    <td><?= $g["sum"] ?></td>
    <td><?= $g["Enlace"] ?></td>
</tr>
<?php } ?>

</table>