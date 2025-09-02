<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxis</title>
    <link rel="stylesheet" href="../static/css/main.css">
</head>
<body>
    <h1>Mi primer página de PHP</h1>

    <?php
        $x  = 'Jesús'; // $x es una variable
        echo "Mi primer programa en PHP";
        eCHo "Hola Mundo"; // No hay sencibilidad a mayúsculas y minúsculas en PHP mas que en variables
        echo "Mi nombre es $x"; # Otra forma de comentar
        $suma = 2 + /* se puede comentar así, en medio de las cosas, con este tipo de comemntarios */2;
        echo "2 + 2 = $suma";
    ?>

    <p>Regresar al <a href="../index.php">inicio</a></p>
    
</body>
</html>