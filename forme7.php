<?php 
    $number = $_POST['numero'];
    function par_impar($number){
        if (($number % 2) === 0) {
            echo "$number es un número par";
        }else {
            echo "$number es un número impar";
        }
    }
    par_impar($number);
    echo "<br><br><button><a href='./index.html'>VOLVER</a></button>";
?>