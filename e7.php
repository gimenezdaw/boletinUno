<html>
    <head>
        <title>Ejercicio 7</title>
    </head>
    <body>
        <h1>EJERCICIO 7</h1>
        <form method="post" action="#">
            <p>Introduce un número: <input type="number" name="numero" value="0">
            <input type="submit" value="Verificar"></p>
        </form>

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
        ?>

        <br><br><button><a href="index.html">VOLVER</a></button>
    </body>
</html>