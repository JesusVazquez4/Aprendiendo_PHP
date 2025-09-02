<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
    <link rel="stylesheet" href="../static/css/main.css">
</head>
<body>
    <h1>Variables</h1>
    <h2>Ejemplos</h2>
    <p>Regresar al <a href="../index.php">inicio</a></p>
    <p>En PHP las variables se escriben con $</p>
    <?php
        $x  = 'Jesús Vázquez'; // $x es una variable
        echo "Mi primer programa en PHP escrito por $x";
    ?>
    <br>
    <p>Hay diversas formas de imprir variables</p>
    <p><?php echo "Mi primer programa en PHP escrito por $x."; ?></p>
    <p><?php echo "Mi primer programa en PHP escrito por " .$x. "."; ?></p>
    <p>Tipo de valor de $x: <?php var_dump($x); ?></p>

    <h2>Alcance</h2>
    <?php
        $n = 'Jesús';
        $a = 'Vázquez';

        function imprimir(){
            global $n, $a;
            echo "Mi nombre es $n $a";
        }
        imprimir();
        echo "<br>";

        function imprimir2(){
            $a = 'Jesús';
            $n = 'Vázquez';
            echo "Mi nombre es $a $n";
        }
        imprimir2();

        function imprimir3(){
            $b = 'Jesús';
            $m = 'Vázquez';
            echo "Mi nombre es $b $m";
        }
        echo "<br>";
        echo "Mi nombre es $b $m";

        function imprimir4(){
            echo "Mi nombre es $a $n"; #Como vemos no las reconoce si no llamamos a global y marca error
        }
        echo "<br>";
        imprimir4();

        function imprimir5(){
            $GLOBALS['nombre'] = $GLOBALS['n'] . ' ' . $GLOBALS['a'];
            global $nombre;
            echo "Mi nombre es $nombre";
        }
        echo "<br>";
        imprimir5();
        echo "<br>";
        echo "<p>Podemos seguir guardando el valor de una variable encapsulada en una función.</p>";
        function contador(){
            static $contador = 0;
            echo $contador . "<br>";
            $contador++;
        }
        contador();
        contador();
        contador();
    ?>
</body>
</html>