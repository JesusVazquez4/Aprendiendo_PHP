<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
    <link rel="stylesheet" href="../static/css/main.css">
</head>
<body>
    <h1>Constantes</h1>
    <p>Regresar al <a href="../index.php">inicio</a></p>
    <h2>Definición con <code>define</code></h2>
    <p>Podemos definir una constante de la forma define("SALUDO", "Hola Mundo").</p>
    <?php
        define("SALUDO", "Hola Mundo, les saluda Jesús.");
        echo SALUDO;
    ?>
    <h2>Definición con <code>const</code></h2>
    <p>También se puede hacer de la forma const CONSTANTE = <i>valor</i>.</p>
    <?php
        const VERSION_PHP = "Usamos la versión 8.4.12 de PHP";
        echo VERSION_PHP;
    ?>
    <h2>Definiendo un areglo constante</h2>
    <?php
        define("Auto", ["BMW", "Rojo", "4x4", "Alemania"]);
        echo Auto[0];
    ?>
</body>
</html>