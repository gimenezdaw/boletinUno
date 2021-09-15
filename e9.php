<html>
    <head>
        <title>Ejercicio 9</title>
    </head>
    <body>
        <h1>EJERCICIO 9</h1>
        <form method="post" action="#">
            <p>Introduce un número: <input type="number" name="numero1" value="1">
            <p>Introduce otro número: <input type="number" name="numero2" value="1">
            <input type="submit" value="Verificar"></p>
        </form>

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
        ?>

        <br><br><button><a href="index.html">VOLVER</a></button>
    </body>
</html>