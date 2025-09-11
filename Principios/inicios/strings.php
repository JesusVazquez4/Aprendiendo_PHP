<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
    <link rel="stylesheet" href="../static/css/main.css">
</head>
<body>
    <h1>Strings</h1>
    <p>Regresar al <a href="../index.php">inicio</a></p>
    <h2><code>String</code></h2>
    <?php
        $x = "Jesús Vázquez";
        $y = 'Jesús Vázquez';

        var_dump($x);
        print("<br>");
        var_dump($y);
    ?> 
    <h2><code>strlen</code></h2>
    <p>Es para contar el número de caracteres.</p>
    <?php
        $x = "Jesús Vázquez";
        echo strlen($x);
    ?>
    <h2><code>str_word_count</code></h2>
    <p>Es para contar el número de palabras en una cadena de caracteres.</p>
    <?php
        $nombre = "Jesús Manuel Vázquez Granados";
        echo "<p>$nombre</p>";
        echo str_word_count($nombre);
        $nombre_1 = "Jesús Manuel Vazquez Granados";
        echo "<br>";
        echo "<p>$nombre_1</p>";
        echo str_word_count($nombre_1);
    ?>
</body>
</html>