<?php
    $number = $_POST['numero'];
    function divisores($numero)
    {
        echo "Los divisores de $numero son: ";
        for ($i = 1, $total = 0; $i <= $numero; $i++) {
            if ($numero % $i == 0) {
                $total++;
                echo "$i\n";
            }
        }
        echo "<br>Total divisores: $total";
    }
    divisores($number);
    echo "<br><br><button><a href='./index.html'>VOLVER</a></button>";
?>