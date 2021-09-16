<?php 
    $number = $_POST['numero'];
    function primo ($numero){             
        $resto = 0;
        for($x = 1; $x <= $numero; $x++){
            if($numero % $x == 0){
                $resto++;
            }
        }
        if ($resto == 2){
            echo "El $numero es primo";
        }else{
            echo "El $numero no es primo";
        }
    }
    primo($numero);
    echo "<br><br><button><a href='./e22.php'>VOLVER AL EJERCICIO</a></button>";
    echo "<br><br><button><a href='./index.html'>VOLVER AL INICIO</a></button>";
?>