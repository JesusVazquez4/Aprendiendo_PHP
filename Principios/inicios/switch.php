<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
    <link rel="stylesheet" href="../static/css/main.css">
</head>
<body>
    <h1>Estructura <code>switch</code></h1>
    <p>Regresar al <a href="../index.php">inicio</a></p>
    <h2>switch</h2>
    <?php
        $x = random_int(1, 5);
        switch ($x) {
            case 1:
                echo "x es 1";
                break;
            case 2:
                echo "x es 2";
                break;
            case 3:
                echo "x es 3";
                break;
            default:
                echo "x es otro";
                //break; //No es necesario si default es el ultimo
        }
    ?>    
</body>
</html>