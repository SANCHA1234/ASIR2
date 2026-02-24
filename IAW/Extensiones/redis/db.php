<?php
function conectarDB() {
    try {
        return new PDO("mysql:host=localhost;dbname=aceitunas;charset=utf8", "root", "");
    } catch (PDOException $e) {
        die("Error DB: " . $e->getMessage());
    }
}

function conectarRedis() {
    $redis = new Redis();
    try {
        $redis->connect('127.0.0.1', 6379);
        return $redis;
    } catch (Exception $e) {
        die("Error Redis: Asegúrate de que el servidor Redis esté activo.");
    }
}

function obtenerVareadoresDeOlivo($olivo_id) {
    $redis = conectarRedis();
    $key = "olivo:vareadores:" . $olivo_id;

    $vareadores = $redis->sMembers($key);

    if (empty($vareadores)) {
        $db = conectarDB();
        $stmt = $db->prepare("SELECT v.nombre FROM Vareadores v 
                              JOIN Vareadores_Olivos vo ON v.id = vo.vareador_id 
                              WHERE vo.olivo_id = :id");
        $stmt->execute([':id' => $olivo_id]);
        $vareadores = $stmt->fetchAll(PDO::FETCH_COLUMN);

        if (!empty($vareadores)) {
            
            $redis->sAdd($key, ...$vareadores);
            $redis->expire($key, 60); 
        }
    }
    return $vareadores;
}
?>