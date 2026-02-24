<?php
require_once("dbutils.php");
$conexion = conectarDB();

$mensaje = "";

if ($_POST && isset($_POST['ID_'])) {
    
    $query = "UPDATE Puntosflotantes SET x + 1 = :x, y + 1 = :y, z +1 = z:, xyz +1 = xyz:, ME +1 = ME:, sum +1 = sum;  WHERE ID :ID";
    
  
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4" style="max-width: 500px;">
    <h3>Actualizar filas</h3>
    <div class="mb-3">
        <a href="mostrar.php" class="btn btn-success btn-sm">Muestra todas las columnas</a>
        <a href="suma100.php" class="btn btn-primary btn-sm">Para borrar las filas que me y sum sumen 100</a>
        <a href="insertar.php" class="btn btn-danger btn-sm">Para insertar nuevas filas</a>
        <a href="flotante.php" class="btn btn-danger btn-sm">Para mostrar suma y enlace</a>

    </div>
    

   

    <form method="post">
        <div class="mb-3">
            <label class="form-label">ID de la fila a incrementar +1:</label>
            <input type="number" name="ID" class="form-control" placeholder="Ej: 1" required>
        </div>
        
             
        <button type="submit" class="btn btn-primary w-100">Actualizar fila</button>
    </form>
</div>