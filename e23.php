<html>
    <head>
        <title>Ejercicio 23</title>
    </head>
    <body>
        <h1>EJERCICIO 23</h1>
        <?php
            function fibonacci ($numero){
                echo "Los $numero primeros términos de la serie de Fibonacci son: <br>";
                $x = 0;    
                $y = 1; 
                for($i=0;$i<=$numero;$i++){    
                    $z = $x + $y;    
                    echo $z." ";         
                    $x=$y;       
                    $y=$z;     
                } 
            }
            fibonacci(20);
        ?>
        <br><br>
        <button><a href="./index.html">VOLVER</a></button>
    </body>
</html>