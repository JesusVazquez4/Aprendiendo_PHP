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
    <h2><code>strpos</code></h2>
    <?php
        $x = "Jesús Vázquez";
        echo "<p>$x</p><br>";
        echo strpos($x, "Vázquez");
        echo "<br>" . strpos($x, "Jesús");
    ?>
    <h2><code>strtoupper</code></h2>
    <?php
        $x = "Jesús Vázquez";
        echo "<p>$x</p><br>";
        echo strtoupper($x);
    ?>
    <h2><code>strtolower</code></h2>
    <?php
        $x = "Jesús Vázquez";
        echo "<p>$x</p>";
        echo strtolower($x);
        $y = "JESUS VAZQUEZ";
        echo "<p>$y</p>";
        echo strtolower($y);
    ?>
    <h2><code>str_replace</code></h2>
    <?php
        $x = "Hola Mundo";
        echo "<p>$x</p>";
        echo str_replace("Mundo", "Jesus", $x);
    ?>
    <h2><code>strrev</code></h2>
    <?php
        $x = "Jesús Vázquez";
        echo "<p>$x</p>";
        echo strrev($x);
        $y = "Jesus Vazquez";
        echo "<p>$y</p>";
        echo strrev($y);
    ?>
    <h2><code>trim</code></h2>
    <?php
        $x = "   Jesús Vázquez   ";
        echo "<input type='text' value='". $x ."'>";
        echo "<br>";
        echo "<input type='text' value='" . trim($x) . "'>";
    ?>
    <h2><code>explode</code></h2>
    <?php
        $x = "Jesús Vázquez";
        $y = explode(" ", $x);
        print_r($y);
        echo("<br>");
        var_dump($y);
    ?>
    <h2><code>substr</code></h2>
    <?php
        $x = "Curso de PHP";
        echo substr($x, 4, 3);
        echo "<br>";
        echo substr($x, 4);
        echo "<br>";
        echo substr($x, -5, 3);
        echo "<br>";
        echo substr($x, -5);
        echo "<br>";
        echo substr($x, 2, -3);
    ?>
</body>
</html>