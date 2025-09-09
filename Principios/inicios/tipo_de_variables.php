<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de variables</title>
    <link rel="stylesheet" href="../static/css/main.css">
</head>
<body>
    <h1>Tipos de variables</h1>
    <p>Regresar al <a href="../index.php">inicio</a></p>
    <h2><code>String</code></h2>
    <?php
        $x = "Jesús Vázquez";
        $y = 'Jesús Vázquez';

        var_dump($x);
        print("<br>");
        var_dump($y);
    ?>
    <h2><code>Integer</code></h2>
    <?php
        $a = 10;
        var_dump($a);
    ?>
    <h2><code>Float</code></h2>
    <?php
        $b = 10.5;
        var_dump($b);
    ?>
    <h2><code>Boolean</code></h2>
    <?php
        $c = true;
        var_dump($c);
    ?>
    <h2><code>Array</code></h2>
    <?php
        $d = array("Jesús", "Manuel", "Vázquez", "Granados");
        var_dump($d);
    ?>
    <h2><code>Object</code></h2>
    <?php
        class Car {
            public $color;
            public $model;
            public function __construct($color, $model) {
                $this->color = $color;
                $this->model = $model;
            }
            public function message() {
                return "My car is a " . $this->color . " " . $this->model . "!";
            }
        }

        $myCar = new Car("red", "Volvo");
        var_dump($myCar);
        print("<br>");
        var_dump($myCar->model);
    ?>
    <h2><code>Null</code></h2>
    <?php
        $e = "Jesús";
        $e = null;
        var_dump($e);
        echo "<br>";
        var_dump($guiamos);
    ?>
</body>
</html>