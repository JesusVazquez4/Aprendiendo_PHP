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
    ?>

    <h2>if else</h2>
    <?php
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
    ?>

    <h2>if elseif else</h2>
    <?php
        $t2 = date('l');
        if($t2 == 'Monday'){
            echo 'Hoy es mi día favorito.';
        }elseif($t2 == 'Friday' || $t2 == 'Saturday'){
            echo 'Hoy es un dia de descanso y fresco para mi.';
        }else{
            echo 'Si no es viernes o sábado, estoy de mal humor.';
        }
    ?>

    <h2>if corto</h2>
    <?php
        $t3 = date('j');
        if ($t3 != 15 || $t3 != 30 || $t3 != 31) echo 'Hoy no es quincena';
    ?>

    <h2>if-else corto (ternario)</h2>
    <?php
        $t4 = date('j');
        //   Condicion ? Verdadero : Falso
        echo ($t4 == 15 || $t4 == 30 || $t4 == 31) ? 'Hoy es quincena' : 'Hoy no es quincena';
    ?>

    <h2>if-else anidado</h2>
    <?php
        $t5 = date('j');
        $t6 = date('l');

        if ($t5 == 15 || $t5 == 30 || $t5 == 31){
            if ($t6 == 'Monday'){
                echo 'Hoy es un día supremo para mi.';
            }else{
                echo 'Hoy se come bien.';
            }
        }else{
            if ($t6 == 'Monday'){
                echo 'Hoy es mi día favorito, aunque no coma bien.';
            }elseif($t6 == 'Saturday' || $t6 == 'Sunday'){
                echo 'Hoy es un dia de descanso y fresco para mi.';
            }else{
                echo 'Que dia más aburrido.';
            }
        }
    ?>
</body>
</html>