<?php 
    $number1 = $_POST['numero1'];
    $number2 = $_POST['numero2'];
    $suma = $number1 + $number2;
    $producto = $number1 * $number2;
    function suma_m_producto($number1, $number2, $suma, $producto){
        
    if($suma > $producto){
        echo "La suma es mayor que el producto.<br>";
    }else if($producto > $suma){
        echo "El producto es mayor que la suma";
    }else
        echo "El producto y la suma son iguales";
    }
    suma_m_producto($number1, $number2, $suma, $producto);
    echo "<br><br><button><a href='./e8.php'>VOLVER AL EJERCICIO</a></button>";
    echo "<br><br><button><a href='./index.html'>VOLVER AL INICIO</a></button>";
?>