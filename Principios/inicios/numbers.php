<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números</title>
    <link rel="stylesheet" href="../static/css/main.css">
</head>
<body>
    <h1>Números en PHP</h1>
    <p>Regresar al <a href="../index.php">inicio</a></p>
    <h2>Enteros</h2>
    <?php
        $x = 578;
        $y = 578.1;
        echo '<p> $x = '. $x . ', tipo '. var_dump(is_int($x)) . '</p>';
        echo '<p> $y = '. $y . ', tipo '. var_dump(is_int($y)) . '</p>';
    ?>
    <p>Los demás me dieron hueva, pero hay flotante, numero letra como "510" y así. Además de los especiales, infinito, finito (solo para reconocer el rango de PHP) y NaN. Este último es cuando no hay forma de asignarle un valor con PHP.</p>
    
</body>
</html>