<?php
require_once("dbutils.php");
$conexion = conectarDB();

if($_POST){

    $query = "INSERT INTO Players (Alias, Nivel_Experiencia)
              VALUES (:Alias, :Nivel_Experiencia)";

    $argumentos = [
        ":Alias" => $_POST["Alias"],
        ":Nivel_Experiencia" => $_POST["Nivel_Experiencia"]
    ];

    realizarQuery($conexion, $query, $argumentos, false);

    echo "Insertado correctamente";
}
?>

<form method="post">
Alias : <input type="text" name="Alias"><br>
Experiencia: <input type="number" name="Nivel_Experiencia"><br>
<input type="submit" value="Insertar">
</form>