<?php           
    $number = $_POST['numero'];
    if($number<1 or $number>10){
        echo "Introduce un número del 1 al 10.";
        echo "<br><br><button><a href='./e18.php'>VOLVER</a></button>";
    }else{
        function tablaFor($numero){
            echo "La tabla de multiplicar de $numero es:<br>";
            for ($i = 1; $i <= 10; $i++) {
                $producto = $numero * $i;
                echo "$numero x $i = $producto<br>";
            }
        }
        tablaFor($number);
        echo "<br><br><button><a href='./index.html'>VOLVER</a></button>";
    }
?>