<?php
require_once("dbutils.php");
$conexion = conectarDB();

$mensaje = "";
if($_POST){
   
    $query = "INSERT INTO Puntosflotante (x, y,z,cxyz,ME,sum) VALUES (:x, :y, :z, :xyz, :ME, :sum)";
    
   
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4" style="max-width: 500px;">
    <h3>Insertar Nuevo Juego</h3>
    
    <div class="mb-3">
        <a href="suma100.php" class="btn btn-success btn-sm">Para borrar la fila que sum y me de más  de 100</a>
        <a href="flotante.php" class="btn btn-primary btn-sm">Para que se muestren sum y el enlace</a>
        <a href="mostrar.php" class="btn btn-danger btn-sm">Para mostrar todas las filas</a>
        <a href="actualizar.php" class="btn btn-danger btn-sm">Para sumar +1 a las filas</a>

    </div>

   

    <form method="post" class="border p-3 rounded bg-light">
        <div class="mb-3">
            <label class="form-label">x:</label>
            <input type="number" name="x" class="form-control"  required>
        </div>
        
        <div class="mb-3">
            <label class="form-label">y:</label>
            <input type="number" name="y" class="form-control"  required>
        </div>
        
        <div class="mb-3">
            <label class="form-label">z:</label>
            <input type="number" name="z" class="form-control"  required>
        </div>

        <div class="mb-3">
            <label class="form-label">x,y,x:</label>
            <input type="number" name="x,y,z" class="form-control"  required>
        </div>

        <div class="mb-3">
            <label class="form-label">ME:</label>
            <input type="number" name="ME" class="form-control"  required>
        </div>

        <div class="mb-3">
            <label class="form-label">sum:</label>
            <input type="number" name="sum" class="form-control"  required>
        </div>
        <button type="submit" class="btn btn-success w-100">Insertar nuevas filas</button>
    </form>
</div>