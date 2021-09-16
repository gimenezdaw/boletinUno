<html>
    <head>
        <title>Ejercicio 20</title>
    </head>
    <body>
        <h1>EJERCICIO 20 - FOR</h1>
        <?php
            function crearPiramide($lineas){
                $simbolo = null;
                for ($i =1; $i <= $lineas; $i++){
                    for($x = $i; $x <= $i; $x++){
                        $simbolo .= "*";
                    }
                    echo "$simbolo<br>";
                }
            }
            crearPiramide(6);
        ?>
        <br><br>
        <button><a href="./index.html">VOLVER</a></button>
    </body>
</html>