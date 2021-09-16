<?php 
    $number = $_POST['numero'];

    function primo($numero){             
        $divisor=2;
        while($divisor <= $numero) {
            if (($numero%$divisor)==0) {
                echo "El número $numero no es primo";
                echo "<br><br><button><a href='./e15.php'>VOLVER AL EJERCICIO</a></button>";
                echo "<br><br><button><a href='./index.html'>VOLVER AL INICIO</a></button>";
                $divisor++;
            }
        }
        echo "El número $numero es primo"; 
        echo "<br><br><button><a href='./e15.php'>VOLVER AL EJERCICIO</a></button>";
        echo "<br><br><button><a href='./index.html'>VOLVER AL INICIO</a></button>";
    }
    primo($number);
?>