<?php 
    $number = $_POST['numero'];
    function tabla_mult($number){
        if($number<1 or $number>10){
            echo "Introduce un número del 1 al 10.";
            echo "<br><br><button><a href='./e11.php'>VOLVER</a></button>";
        }else{
            echo "La tabla de multiplicar de $number es:<br>";
            $i = 1;
            while($i <= 10){
                $producto = $number * $i;
                echo "$number x $i = $producto<br>";
                $i++;
            }
        }
    }
    tabla_mult($number);
    echo "<br><br><button><a href='./index.html'>VOLVER</a></button>";
?>
