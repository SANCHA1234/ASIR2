<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultados</title>
  <style>
      /* Estilo para separar los resultados */
      .resultado {
          margin-top: 30px;
          padding: 10px;
          border: 1px solid #ccc;
          width: 300px;
      }
  </style>
</head>
<body>
<form action="ph1.php" method="post">
  <h1>Resultados</h1>
  <div>
      <h4>Los puntos del oponente son: <?php echo $_POST['Puntos_oponente']; ?></h4>
  </div>
     <div>
      El resultado de la partida es de:
  </div>
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $dados = isset($_POST['num_dados']) ? intval($_POST['num_dados']) : 0;
    $caras = isset($_POST['num_caras']) ? intval($_POST['num_caras']) : 0;
    $Puntos_oponente = isset($_POST['Puntos_oponente']) ? intval($_POST['Puntos_oponente']) : 0;

   $resultados = [];


   if ($dados == 1 && $caras == 4) {
       echo "<img src='carpeta_imagenes/dado_4_caras.png' alt='Imagen fija' width='300'>";
       $randomValue_1_4 = rand(1, 4);
       $resultados[] = $randomValue_1_4;
       $resultado = $randomValue_1_4 - $Puntos_oponente; 
       echo "<p>Resultado: $randomValue_1_4 - $Puntos_oponente = $resultado</p>"; 
   } elseif ($dados == 1 && $caras == 6) {
       echo "<img src='carpeta_imagenes/dado_6_caras.png' alt='Imagen fija' width='300'>";
       $randomValue_1_6 = rand(1, 6);
       $resultados[] = $randomValue_1_6; 
       $resultado = $randomValue_1_6 - $Puntos_oponente; 
       echo "<p>Resultado: $randomValue_1_6 - $Puntos_oponente = $resultado</p>"; 
   } elseif ($dados == 1 && $caras == 8) {
       echo "<img src='carpeta_imagenes/dado_8_caras.png' alt='Imagen fija' width='300'>";
       $randomValue_1_8 = rand(1, 8);
       $resultados[] = $randomValue_1_8; 
       $resultado = $randomValue_1_8 - $Puntos_oponente; 
       echo "<p>Resultado: $randomValue_1_8 - $Puntos_oponente = $resultado</p>"; 
   } elseif ($dados == 1 && $caras == 10) {
       echo "<img src='carpeta_imagenes/dado_10_caras.png' alt='Imagen fija' width='300'>";
       $randomValue_1_10 = rand(1, 10);
       $resultados[] = $randomValue_1_10; 
       $resultado = $randomValue_1_10 - $Puntos_oponente; 
       echo "<p>Resultado: $randomValue_1_10 - $Puntos_oponente = $resultado</p>"; 
   } elseif ($dados == 1 && $caras == 12) {
       echo "<img src='carpeta_imagenes/dado_12_caras.png' alt='Imagen fija' width='300'>";
       $randomValue_1_12 = rand(1, 12);
       $resultados[] = $randomValue_1_12; 
       $resultado = $randomValue_1_12 - $Puntos_oponente; 
       echo "<p>Resultado: $randomValue_1_12 - $Puntos_oponente = $resultado</p>"; 
   } elseif ($dados == 1 && $caras == 14) {
       echo "<img src='carpeta_imagenes/dado_14_caras.png' alt='Imagen fija' width='300'>";
       $randomValue_1_14 = rand(1, 14);
       $resultados[] = $randomValue_1_14; 
       $resultado = $randomValue_1_14 - $Puntos_oponente; 
       echo "<p>Resultado: $randomValue_1_14 - $Puntos_oponente = $resultado</p>"; 
   } elseif ($dados == 1 && $caras == 20) {
       echo "<img src='carpeta_imagenes/dado_20_caras.png' alt='Imagen fija' width='300'>";
       $randomValue_1_20 = rand(1, 20);
       $resultados[] = $randomValue_1_20; 
       $resultado = $randomValue_1_20 - $Puntos_oponente; 
       echo "<p>Resultado: $randomValue_1_20 - $Puntos_oponente = $resultado</p>";
   }
   // 2 DADOS
   elseif ($dados == 2 && $caras == 4) {
       echo "<img src='carpeta_imagenes/dado_4_caras.png' alt='Imagen fija' width='300'>";
       echo "<img src='carpeta_imagenes/dado_4_caras.png' alt='Imagen fija' width='300'>";
       $randomValue_2_4 = rand(1, 4);
       $resultados[] = $randomValue_2_4; 
       $randomValue_2_4_1 = rand(1, 4);
       $resultados[] = $randomValue_2_4_1; 
       $resultado = $randomValue_2_4 + $randomValue_2_4_1 - $Puntos_oponente; 
       echo "<p>Resultado: $randomValue_2_4 + $randomValue_2_4_1 - $Puntos_oponente = $resultado</p>"; 
   } elseif ($dados == 2 && $caras == 6) {
       echo "<img src='carpeta_imagenes/dado_6_caras.png' alt='Imagen fija' width='300'>";
       echo "<img src='carpeta_imagenes/dado_6_caras.png' alt='Imagen fija' width='300'>";
       $randomValue_2_6 = rand(1, 6);
       $resultados[] = $randomValue_2_6; 
       $randomValue_2_6_1 = rand(1, 6);
       $resultados[] = $randomValue_2_6_1; 
       $resultado = $randomValue_2_6 + $randomValue_2_6_1 - $Puntos_oponente; 
       echo "<p>Resultado: $randomValue_2_6 + $randomValue_2_6_1 - $Puntos_oponente = $resultado</p>"; 
   } elseif ($dados == 2 && $caras == 8) {
       echo "<img src='carpeta_imagenes/dado_8_caras.png' alt='Imagen fija' width='300'>";
       echo "<img src='carpeta_imagenes/dado_8_caras.png' alt='Imagen fija' width='300'>";
       $randomValue_2_8 = rand(1, 8);
       $resultados[] = $randomValue_2_8; 
       $randomValue_2_8_1 = rand(1, 8);
       $resultados[] = $randomValue_2_8_1; 
       $resultado = $randomValue_2_8 + $randomValue_2_8_1 - $Puntos_oponente; 
       echo "<p>Resultado: $randomValue_2_8 + $randomValue_2_8_1 - $Puntos_oponente = $resultado</p>"; 
   } elseif ($dados == 2 && $caras == 10) {
       echo "<img src='carpeta_imagenes/dado_10_caras.png' alt='Imagen fija' width='300'>";
       echo "<img src='carpeta_imagenes/dado_10_caras.png' alt='Imagen fija' width='300'>";
       $randomValue_2_10 = rand(1, 10);
       $resultados[] = $randomValue_2_10; 
       $randomValue_2_10_1 = rand(1, 10);
       $resultados[] = $randomValue_2_10_1; 
       $resultado = $randomValue_2_10 + $randomValue_2_10_1 - $Puntos_oponente; 
       echo "<p>Resultado: $randomValue_2_10 + $randomValue_2_10_1 - $Puntos_oponente = $resultado</p>"; 
   } elseif ($dados == 2 && $caras == 12) {
       echo "<img src='carpeta_imagenes/dado_12_caras.png' alt='Imagen fija' width='300'>";
       echo "<img src='carpeta_imagenes/dado_12_caras.png' alt='Imagen fija' width='300'>";
       $randomValue_2_12 = rand(1, 12);
       $resultados[] = $randomValue_2_12; 
       $randomValue_2_12_1 = rand(1, 12);
       $resultados[] = $randomValue_2_12_1; 
       $resultado = $randomValue_2_12 + $randomValue_2_12_1 - $Puntos_oponente; 
       echo "<p>Resultado: $randomValue_2_12 + $randomValue_2_12_1 - $Puntos_oponente = $resultado</p>";  
   } elseif ($dados == 2 && $caras == 14) {
       echo "<img src='carpeta_imagenes/dado_14_caras.png' alt='Imagen fija' width='300'>";
       echo "<img src='carpeta_imagenes/dado_14_caras.png' alt='Imagen fija' width='300'>";
       $randomValue_2_14 = rand(1, 14);
       $resultados[] = $randomValue_2_14; 
       $randomValue_2_14_1 = rand(1, 14);
       $resultados[] = $randomValue_2_14_1; 
       $resultado = $randomValue_2_14 + $randomValue_2_14_1 - $Puntos_oponente; 
       echo "<p>Resultado: $randomValue_2_14 + $randomValue_2_14_1 - $Puntos_oponente = $resultado</p>"; 
   } elseif ($dados == 2 && $caras == 20) {
       echo "<img src='carpeta_imagenes/dado_20_caras.png' alt='Imagen fija' width='300'>";
       echo "<img src='carpeta_imagenes/dado_20_caras.png' alt='Imagen fija' width='300'>";
       $randomValue_2_20 = rand(1, 20);
       $resultados[] = $randomValue_2_20; 
       $randomValue_2_20_1 = rand(1, 20);
       $resultados[] = $randomValue_2_20_1; 
       $resultado = $randomValue_2_20 + $randomValue_2_20_1 - $Puntos_oponente; 
       echo "<p>Resultado: $randomValue_2_20 + $randomValue_2_20_1 - $Puntos_oponente = $resultado</p>"; 
   }
   // 3 DADOS
   elseif ($dados == 3 && $caras == 4) {
       echo "<img src='carpeta_imagenes/dado_4_caras.png' alt='Imagen fija' width='300'>";
       echo "<img src='carpeta_imagenes/dado_4_caras.png' alt='Imagen fija' width='300'>";
       echo "<img src='carpeta_imagenes/dado_4_caras.png' alt='Imagen fija' width='300'>";
       $randomValue_3_4 = rand(1, 4);
       $resultados[] = $randomValue_3_4; 
       $randomValue_3_4_1 = rand(1, 4);
       $resultados[] = $randomValue_3_4_1; 
       $randomValue_3_4_2 = rand(1, 4);
       $resultados[] = $randomValue_3_4_2; 
       $resultado = $randomValue_3_4 + $randomValue_3_4_1 + $randomValue_3_4_2 - $Puntos_oponente; 
       echo "<p>Resultado: $randomValue_3_4 + $randomValue_3_4_1 + $randomValue_3_4_2 - $Puntos_oponente = $resultado</p>"; // Mostrar la operación y el resultado
   } elseif ($dados == 3 && $caras == 6) {
       echo "<img src='carpeta_imagenes/dado_6_caras.png' alt='Imagen fija' width='300'>";
       echo "<img src='carpeta_imagenes/dado_6_caras.png' alt='Imagen fija' width='300'>";
       echo "<img src='carpeta_imagenes/dado_6_caras.png' alt='Imagen fija' width='300'>";
       $randomValue_3_6 = rand(1, 6);
       $resultados[] = $randomValue_3_6; 
       $randomValue_3_6_1 = rand(1, 6);
       $resultados[] = $randomValue_3_6_1; 
       $randomValue_3_6_2 = rand(1, 6);
       $resultados[] = $randomValue_3_6_2; 
       $resultado = $randomValue_3_6 + $randomValue_3_6_1 + $randomValue_3_6_2 - $Puntos_oponente; 
       echo "<p>Resultado: $randomValue_3_6 + $randomValue_3_6_1 + $randomValue_3_6_2 - $Puntos_oponente = $resultado</p>"; // Mostrar la operación y el resultado
   } elseif ($dados == 3 && $caras == 8) {
       echo "<img src='carpeta_imagenes/dado_8_caras.png' alt='Imagen fija' width='300'>";
       echo "<img src='carpeta_imagenes/dado_8_caras.png' alt='Imagen fija' width='300'>";
       echo "<img src='carpeta_imagenes/dado_8_caras.png' alt='Imagen fija' width='300'>";
       $randomValue_3_8 = rand(1, 8);
       $resultados[] = $randomValue_3_8; 
       $randomValue_3_8_1 = rand(1, 8);
       $resultados[] = $randomValue_3_8_1; 
       $randomValue_3_8_2 = rand(1, 8);
       $resultados[] = $randomValue_3_8_2; 
       $resultado = $randomValue_3_8 + $randomValue_3_8_1 + $randomValue_3_8_2 - $Puntos_oponente; 
       echo "<p>Resultado: $randomValue_3_8 + $randomValue_3_8_1 + $randomValue_3_8_2 - $Puntos_oponente = $resultado</p>"; // Mostrar la operación y el resultado
   } elseif ($dados == 3 && $caras == 10) {
       echo "<img src='carpeta_imagenes/dado_10_caras.png' alt='Imagen fija' width='300'>";
       echo "<img src='carpeta_imagenes/dado_10_caras.png' alt='Imagen fija' width='300'>";
       echo "<img src='carpeta_imagenes/dado_10_caras.png' alt='Imagen fija' width='300'>";
       $randomValue_3_10 = rand(1, 10);
       $resultados[] = $randomValue_3_10; 
       $randomValue_3_10_1 = rand(1, 10);
       $resultados[] = $randomValue_3_10_1; 
       $randomValue_3_10_2 = rand(1, 10);
       $resultados[] = $randomValue_3_10_2; 
       $resultado = $randomValue_3_10 + $randomValue_3_10_1 + $randomValue_3_10_2 - $Puntos_oponente; 
       echo "<p>Resultado: $randomValue_3_10 + $randomValue_3_10_1 + $randomValue_3_10_2 - $Puntos_oponente = $resultado</p>"; // Mostrar la operación y el resultado
   } elseif ($dados == 3 && $caras == 12) {
       echo "<img src='carpeta_imagenes/dado_12_caras.png' alt='Imagen fija' width='300'>";
       echo "<img src='carpeta_imagenes/dado_12_caras.png' alt='Imagen fija' width='300'>";
       echo "<img src='carpeta_imagenes/dado_12_caras.png' alt='Imagen fija' width='300'>";
       $randomValue_3_12 = rand(1, 12);
       $resultados[] = $randomValue_3_12; 
       $randomValue_3_12_1 = rand(1, 12);
       $resultados[] = $randomValue_3_12_1; 
       $randomValue_3_12_2 = rand(1, 12);
       $resultados[] = $randomValue_3_12_2; 
       $resultado = $randomValue_3_12 + $randomValue_3_12_1 + $randomValue_3_12_2 - $Puntos_oponente; 
       echo "<p>Resultado: $randomValue_3_12 + $randomValue_3_12_1 + $randomValue_3_12_2 - $Puntos_oponente = $resultado</p>"; // Mostrar la operación y el resultado
   } elseif ($dados == 3 && $caras == 14) {
       echo "<img src='carpeta_imagenes/dado_14_caras.png' alt='Imagen fija' width='300'>";
       echo "<img src='carpeta_imagenes/dado_14_caras.png' alt='Imagen fija' width='300'>";
       echo "<img src='carpeta_imagenes/dado_14_caras.png' alt='Imagen fija' width='300'>";
       $randomValue_3_14 = rand(1, 14);
       $resultados[] = $randomValue_3_14;
       $randomValue_3_14_1 = rand(1, 14);
       $resultados[] = $randomValue_3_14_1; 
       $randomValue_3_14_2 = rand(1, 14);
       $resultados[] = $randomValue_3_14_2; 
       $resultado = $randomValue_3_14 + $randomValue_3_14_1 + $randomValue_3_14_2 - $Puntos_oponente; 
       echo "<p>Resultado: $randomValue_3_14 + $randomValue_3_14_1 + $randomValue_3_14_2 - $Puntos_oponente = $resultado</p>"; // Mostrar la operación y el resultado
   } elseif ($dados == 3 && $caras == 20) {
       echo "<img src='carpeta_imagenes/dado_20_caras.png' alt='Imagen fija' width='300'>";
       echo "<img src='carpeta_imagenes/dado_20_caras.png' alt='Imagen fija' width='300'>";
       echo "<img src='carpeta_imagenes/dado_20_caras.png' alt='Imagen fija' width='300'>";
       $randomValue_3_20 = rand(1, 20);
       $resultados[] = $randomValue_3_20; 
       $randomValue_3_20_1 = rand(1, 20);
       $resultados[] = $randomValue_3_20_1; 
       $randomValue_3_20_2 = rand(1, 20);
       $resultados[] = $randomValue_3_20_2; 
       echo "<p>Resultado:$resultado = $randomValue_3_20 + $randomValue_3_20_1 + $randomValue_3_20_2  - $Puntos_oponente;</p>";
   }
   // Mostrar los resultados al final
   if (count($resultados) > 0) {
       echo "<div class='resultado'>";
       echo "<h3>Resultados numéricos:</h3>";
       foreach ($resultados as $valor) {
           echo "<p>$valor</p>"; // Mostrar cada valor
       }
       echo "</div>";
   }
}
?>
</body>
</html>
