<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura de control if-else</title>
    <link rel="stylesheet" href="../static/css/main.css">
</head>
<body>
    <h1>Estructura if-else</h1>
    <p>Regresar al <a href="../index.php">inicio</a></p>
    <h2>if simple</h2>
    <?php
        $x = 'Hola';
        $y = 'hola';
        $z = '';

        if($x <> $y){
            print("Para PHP no es lo mismo $x, que $y");
        }

        echo '<br>';

        if($z){
            echo 'z tiene valor';
        }else{
            echo 'z no tiene valor, es una cadena vacía';
        }

        echo '<br>';

        $t = date('l');
        if($t == 'Monday'){
            echo 'Hoy es mi día favorito';
        } else {
            echo 'Si no es viernes o sábado, estoy de mal humor';
        }

        echo '<br>';

        $t2 = date('l');
        if($t2 == 'Monday'){
            echo 'Hoy es mi día favorito.';
        }elseif($t2 == 'Friday' || $t2 == 'Saturday'){
            echo 'Hoy es un dia de descanso y fresco para mi.';
        }else{
            echo 'Si no es viernes o sábado, estoy de mal humor.';
        }
    ?>
</body>
</html>