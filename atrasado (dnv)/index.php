<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Visitas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
        }
        .contador {
            background-color: #fff;
            padding: 90px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .contador h1 {
            margin: 0;
            font-size: 2em;
            color: #933;
        }
    </style>
</head>
<body>
    <div class="contador">
        <?php
        include 'contador.php';
        $contador = incrementarContador();
        echo "<h1>Contador: $contador</h1>";
        ?>
    </div>
</body>
</html>
