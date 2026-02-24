<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Aceitunas - Redis & MySQL</title>
    <style>
        body { font-family: sans-serif; padding: 20px; background: #f0f0f0; display: flex; gap: 40px; }
        .box { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); width: 400px; }
        input, button { width: 100%; padding: 10px; margin: 5px 0; box-sizing: border-box; }
        button { background: #28a745; color: white; border: none; cursor: pointer; }
        .msg { color: #155724; background: #d4edda; padding: 10px; border-radius: 5px; }
    </style>
</head>
<body>

<div class="box">
    <?php if(isset($_GET['msg'])) echo "<p class='msg'>".$_GET['msg']."</p>"; ?>
    
    <h2>Registros</h2>
    <form action="insertar.php" method="POST">
        <input type="text" name="nombre_vareador" placeholder="Nombre del Vareador" required>
        <button type="submit" name="alta_vareador">Alta Vareador</button>
    </form>

    <form action="insertar.php" method="POST">
        <input type="text" name="ubicacion" placeholder="Ubicación Olivo" required>
        <button type="submit" name="alta_olivo">Alta Olivo</button>
    </form>

    <h2>Asignación (Relación M:N)</h2>
    <form action="insertar.php" method="POST">
        <input type="number" name="id_vareador" placeholder="ID Vareador" required>
        <input type="number" name="id_olivo" placeholder="ID Olivo" required>
        <button type="submit" name="asignar_tarea" style="background: #007bff;">Vincular</button>
    </form>
</div>

<div class="box">
    <h2>Consultar Olivo</h2>
    <form method="GET">
        <input type="number" name="ver_olivo" placeholder="ID del Olivo" required>
        <button type="submit" style="background: #6c757d;">Consultar (Redis/DB)</button>
    </form>

    <?php 
    if(isset($_GET['ver_olivo'])) {
        require_once("db.php");
        $res = obtenerVareadoresDeOlivo($_GET['ver_olivo']);
        echo "<h3>Vareadores en el Olivo #".$_GET['ver_olivo'].":</h3><ul>";
        foreach($res as $v) echo "<li>".htmlspecialchars($v)."</li>";
        if(!$res) echo "<li>Sin asignaciones (o ID no encontrado)</li>";
        echo "</ul>";
    }
    ?>
</div>

</body>
</html>