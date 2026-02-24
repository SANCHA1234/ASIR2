<?php
require_once("dbutils.php");
$conexion = conectarDB();

$mensaje = "";
if($_POST){
   
    $query="DELETE FROM Puntosflotantes WHERE ME + sum = 100";
    
   
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="mb-3">
        <a href="mostrar.php" class="btn btn-success btn-sm">Muestra todas las columnas</a>
        <a href="flotante.php" class="btn btn-primary btn-sm">Para que se muestren sum y el enlace/a>
        <a href="insertar.php" class="btn btn-danger btn-sm">Para insertar nuevas filas</a>
        <a href="actualizar.php" class="btn btn-danger btn-sm">Para sumar +1 a las filas</a>
    </div>

<div class="container mt-4" style="max-width: 400px;">
    <h3>Eliminar Juego</h3>
    
    <div class="mb-3">
        <a href="mostrar.php" class="btn btn-secondary btn-sm">Volver al listado</a>
    </div>

  

    <form method="post" >
        <div class="mb-3"> 
            <label class="form-label">ID de la fila que me +sum sume 100:</label>
            <input type="number" name="ID" class="form-control" placeholder="Ej: 1" required>
        </div>
        <button type="submit" class="btn btn-danger w-100">Borrar FILA</button>
    </form>
</div>


