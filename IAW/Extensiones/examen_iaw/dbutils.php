<?php

function conectarDB()
{

    $db = new PDO("mysql:host=localhost;dbname=DB5","root","");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;

}

function realizarQuery($conexion, $texto, $argumentos=null, $isfench=false)
{
    $conexion = $conexion -> prepare($texto);
    $conexion -> execute($argumentos);
    if ($isfench) return $conexion -> fetchAll();
}

?>