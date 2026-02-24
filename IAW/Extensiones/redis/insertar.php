<?php
require_once("db.php");
$db = conectarDB();
$redis = conectarRedis();

if (isset($_POST['alta_vareador'])) {
    $stmt = $db->prepare("INSERT INTO Vareadores (nombre) VALUES (?)");
    $stmt->execute([$_POST['nombre_vareador']]);
    header("Location: index.php?msg=Vareador creado con ID: " . $db->lastInsertId());
}

if (isset($_POST['alta_olivo'])) {
    $stmt = $db->prepare("INSERT INTO Olivos (ubicacion) VALUES (?)");
    $stmt->execute([$_POST['ubicacion']]);
    header("Location: index.php?msg=Olivo creado con ID: " . $db->lastInsertId());
}


if (isset($_POST['asignar_tarea'])) {
    $id_v = $_POST['id_vareador'];
    $id_o = $_POST['id_olivo'];

    $stmt = $db->prepare("INSERT IGNORE INTO Vareadores_Olivos (vareador_id, olivo_id) VALUES (?, ?)");
    $stmt->execute([$id_v, $id_o]);

    $redis->del("olivo:vareadores:$id_o");

    header("Location: index.php?msg=Tarea asignada. Caché de Redis actualizada.");
}
?>