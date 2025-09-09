<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo vs Print</title>
    <link rel="stylesheet" href="../static/css/main.css">
</head>
<body>
    <h1>Ejemplos</h1>
    <p>Regresar al <a href="../index.php">inicio</a></p>
    <h2><code>echo</code></h2>
    <?php
    echo "Esto es un ejemplo de echo";
    echo "<br>";
    echo("Esta también, pero encerrado en parentesis");
    $txt1 = "Aprendiendo PHP";
    $txt2 = "Jesús Vázquez";
    echo "<br>";
    echo "<p>$txt1 por cuenta propia con $txt2</p>";
    echo "<p>Cuando se usa '', la comillas simples, la variables se imprimer concatenando con punto (.)  como en el siguente mensaje:</p>";
    echo('Mi nombre es ' . $txt2 . ', y estoy ' . $txt1 . '.');
    ?>
    <h2><code>print</code></h2>
    <?php
    print("Esto es un ejemplo de print");
    print "<br>";
    print "Este también, sin usar parentesis en el print";
    print "Igual que echo se pueden insertar elementos html\n";
    print "<input type='text'>";
    $frase1 = "Todo";
    $frase2 = "print";
    $frase3 = "echo";
    print "<p>$frase1, parece ser los mismo entre $frase2 y $frase3</p>";
    print '<p>Incluso en insertar variables con las millas sencillas en ' . $frase1 . ' lugar que se use así ' . $frase2 . ' o ' . $frase3 . '</p>';

    ?>
</body>
</html>