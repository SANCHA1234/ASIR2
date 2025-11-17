<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DADOS</title>
    <style>
        body {
            background-color: #b3d9ff; 
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
        }
        form {
            display: inline-block;
            background-color: white;
            padding: 30px 50px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        div {
            margin: 15px 0;
        }
        input[type="number"] {
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #999;
            width: 80px;
            text-align: center;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 8px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>DADOS</h1>
    <form action="ph2.php" method="post">
        <div>
            Nº Dados (Tienes que elegir entre 1, 2, 3): 
            <input type="number" name="num_dados"> 
        </div>
        <div>    
            Nº Caras (Tienes que elegir entre 4, 6, 8, 10, 12,14, 20): 
            <input type="number" name="num_caras"> 
        </div>
        <div>
            Puntos oponente: 
            <input type="number" name="Puntos_oponente"> 
        </div>
        <div>   
            <input type="submit" value="Dame!">  
        </div> 
    </form>
</body>
</html>

"link del video:https://youtu.be/qPrI2rXkNmY"
