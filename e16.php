<html>
    <head>
        <title>Ejercicio 16</title>
    </head>
    <body>
        <h1>EJERCICIO 16</h1>
        <?php
            function fibonacci ($numero){
                echo "Los $numero términos de la serie de Fibonacci son: <br>";
                $x = 0;    
                $y = 1; 
                $total = 0;
                while ($total <= $numero) {
                        $z = $x + $y;
                        echo $z." ";
                        $x=$y;
                        $y=$z;
                        $total++;                    
                }
            }
            fibonacci(20);
        ?>
        <br><br>
        <button><a href="./index.html">VOLVER</a></button>
    </body>
</html>