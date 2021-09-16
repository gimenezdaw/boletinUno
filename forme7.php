<?php 
    $number = $_POST['numero'];
    function par_impar($number){
        if (($number % 2) === 0) {
            echo "$number es un número par";
            echo "<br><br><button><a href='./e7.php'>VOLVER AL EJERCICIO</a></button>";
        }else {
            echo "$number es un número impar";
            echo "<br><br><button><a href='./e7.php'>VOLVER AL EJERCICIO</a></button>";
        }
    }
    par_impar($number);
    echo "<br><br><button><a href='./index.html'>VOLVER AL INICIO</a></button>";
?>