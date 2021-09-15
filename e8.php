<html>
    <head>
        <title>Ejercicio 8</title>
    </head>
    <body>
        <h1>EJERCICIO 8</h1>
        <form method="post" action="#">
            <p>Introduce un número: <input type="number" name="numero1" value="0">
            <p>Introduce otro número: <input type="number" name="numero2" value="0">
            <input type="submit" value="Verificar"></p>
        </form>

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
        ?>

        <br><br><button><a href="index.html">VOLVER</a></button>
    </body>
</html>