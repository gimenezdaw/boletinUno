<?php
    echo "<title>Ejercicio 14</title>";
    $number = $_POST['numero'];

    function divisores($numero){
        if ($numero>=0) {
            $i = 1;
            echo "Los divisores de $numero son: ";
            while ($i <= $numero) {
                if ($numero % $i == 0) {
                    echo "$i ";
                }
                ++$i;
            }
        }else{
            echo "Introduce un número positivo";
            echo "<br><br><button><a href='./e14.php'>VOLVER AL EJERCICIO</a></button>";

        }           
    }
    divisores($number);
    echo "<br><br><button><a href='./index.html'>VOLVER AL INICIO</a></button>";
?>