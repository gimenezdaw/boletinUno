<?php 
    $number1 = $_POST['numero1'];
    $number2 = $_POST['numero2'];
    function nombre_mayor($number1, $number2){
        $nombre = "Sandra ";
        $apellidos = "Giménez Guillard";    
        if($number1 > 0 && $number2 <$number1){
            echo $nombre;
        }else if($number1 > 0 && $number2 >= $number1){
            echo $apellidos;
        }else if($number1<0){
            echo $nombre.$apellidos;
        }else {
            echo "Opción no definida";
        }
    }
    nombre_mayor($number1, $number2);
    echo "<br><br><button><a href='./index.html'>VOLVER</a></button>";
?>