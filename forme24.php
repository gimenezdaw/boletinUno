<?php
    $nota = $_POST['numero'];
    if ($nota >=0 && $nota <=10) {
        switch (true) {
        case ($nota < 5):
            echo "SUSPENSO!!!";
            echo "<br><br><button><a href='./e24.php'>VOLVER AL EJERCICIO</a></button>";
            echo "<br><br><button><a href='./index.html'>VOLVER AL INICIO</a></button>";
            break;
        case (($nota >= 5) && ($nota <= 6)):
            echo "APROBADO";
            echo "<br><br><button><a href='./e24.php'>VOLVER AL EJERCICIO</a></button>";
            echo "<br><br><button><a href='./index.html'>VOLVER AL INICIO</a></button>";
            break;
        case (($nota >= 6) && ($nota <= 7)):
            echo "BIEN";
            echo "<br><br><button><a href='./e24.php'>VOLVER AL EJERCICIO</a></button>";
            echo "<br><br><button><a href='./index.html'>VOLVER AL INICIO</a></button>";
            break;
        case (($nota >= 7) && ($nota <= 8)):
            echo "NOTABLE";
            echo "<br><br><button><a href='./e24.php'>VOLVER AL EJERCICIO</a></button>";
            echo "<br><br><button><a href='./index.html'>VOLVER AL INICIO</a></button>";
            break;
        case (($nota >= 8) && ($nota <= 10)):
            echo "SOBRESALIENTE";
            echo "<br><br><button><a href='./e24.php'>VOLVER AL EJERCICIO</a></button>";
            echo "<br><br><button><a href='./index.html'>VOLVER AL INICIO</a></button>";
            break;
    }
    }else{
        echo "Introduce una nota correcta";
        echo "<br><br><button><a href='./e24.php'>VOLVER AL EJERCICIO</a></button>";
        echo "<br><br><button><a href='./e24.php'>VOLVER</a></button>";
    }
?>