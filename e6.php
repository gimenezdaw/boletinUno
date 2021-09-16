<html>
    <head>
        <title>Ejercicio 6</title>
    </head>
    <body>
        <h1>EJERCICIO 6</h1>
        <?php 
        $min = 1; $max = 50; $estrellas = 9;
        $numero1 = rand ($min, $max);
        $numero2 = rand ($min, $max);
        $numero3 = rand ($min, $max);
        $numero4 = rand ($min, $max);
        $numero5 = rand ($min, $max);
        $estrella1 = mt_rand ($min, $estrellas);
        $estrella2 = mt_rand ($min, $estrellas);
        echo "Generador EUROMILLONES:<br>Números: $numero1 $numero2 $numero3 $numero4 $numero5<br>Estrellas: $estrella1 $estrella2";
        ?>
        <br><br>
        <button><a href="./index.html">VOLVER</a></button>
    </body>
</html>