<html>
    <head>
        <title>Ejercicio 11</title>
    </head>
    <body>
        <h1>EJERCICIO 11</h1>
        <form method="post" action="#">
            <p>Introduce un número: <input type="number" name="numero" value="0">
            <input type="submit" value="Verificar"></p>
        </form>

        <?php 
        $number = $_POST['numero'];
        function tabla_mult($number){
            if($number<1 or $number>10){
                echo "Introduce un número del 1 al 10.";
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
        ?>

        <br><br><button><a href="index.html">VOLVER</a></button>
    </body>
</html>