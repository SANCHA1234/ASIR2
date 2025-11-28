<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
      
body {
           font-family: 'Arial', sans-serif;
           background-color: #f4f7f6;
           display: flex;
           justify-content: center;
           align-items: center;
           min-height: 100vh;
           margin: 0;
       }

       
       .form-container {
           background-color: #ffffff;
           padding: 30px 40px;
           border-radius: 12px;
           box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
           width: 100%;
           max-width: 450px;
       }

       h1 {
           color: #333;
           text-align: center;
           margin-bottom: 25px;
           font-size: 1.8em;
           border-bottom: 2px solid #007bff;
           padding-bottom: 10px;
       }
       p{
           color: #333;
           text-align: center;
           margin-bottom: 25px;
           font-size: 1.8em;
           border-bottom: 2px solid #007bff;
           padding-bottom: 10px;
       }
       

       
       .input-group {
           margin-bottom: 20px;
       }

       
       .input-group label {
           display: block;
           margin-bottom: 8px;
           font-weight: bold;
           color: #555;
       }

       
       input[type="number"],
       select {
           width: 100%;
           padding: 10px;
           border: 1px solid #ccc;
           border-radius: 6px;
           box-sizing: border-box; /
           
       }

       input[type="number"]:focus,
       select:focus {
           border-color: #007bff;
           outline: none;
           box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
       }

       
       input[type="submit"] {
           width: 100%;
           padding: 12px;
           background-color: #28a745; /* Verde */
           color: white;
           border: none;
           border-radius: 6px;
           font-size: 1.1em;
           cursor: pointer;
           transition: background-color 0.3s ease;
       }

       input[type="submit"]:hover {
           background-color: #218838;
       }

      
       .input-group input[type="checkbox"] {
           margin-right: 10px;
       }

       .input-group label.checkbox-label {
           font-weight: normal;
           color: #333;
           display: flex;
           align-items: center;
       }

    </style> 
<body>
    <div clas="form-container">
        <h1>Pitufro gruñon</h1>
        <form action ="p3.php" method ="post">
            
            <div>
                <input type="submit" value = "Probar suerte de nuevo">
            </div>
        </form>
    </div>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $num_suerte_2 = isset($_POST['num_suerte_2']) ? intval($_POST['num_suerte_2']) : 0;
    $num_aleatorio= rand(1, 5);
    $Puntuacion = $num_suerte_2 * $num_aleatorio *100;
    echo "<p>$Puntuacion</p>";
    if($Puntuacion > 0){
        echo "<p>El premio obtenido es:</p><br>";
        echo "<img src=examenphp/img/pitufrogru_3.jpeg";
    }
    if($Puntuacion>3000){
        echo "<p>El premio obtenido es:</p><br>";
        echo "<h1>800</h1>";
    }
   

}
?>

</html>