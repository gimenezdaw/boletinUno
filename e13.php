<html>
    <head>
        <title>Ejercicio 13</title>
    </head>
    <body>
        <h1>EJERCICIO 13 - WHILE</h1>
        <?php
            function crearPiramide($lineas){
                $simbolo = null;
                while($lineas){
                    $simbolo .= "*";
                    $lineas--;
                    echo "$simbolo <br>";
                }
            }
            crearPiramide(6);
        ?>
        <br><br>
        <button><a href="./index.html">VOLVER</a></button>
    </body>
</html>