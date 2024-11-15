<?php

require ("BDLocal.php");
echo "<h1>Práctica: Creación de una base de datos</h1><br><br>";
$conexión=mysqli_connect($servidor, $usuario, $password, $bd);
$basededatos="programación";

$consulta="create database $basededatos";
if ($resultado=mysqli_query($conexión, $consulta))
{
    echo "La base de datos $basededatos, se creó con éxito <br>";
    echo "El script utilizado fue: $consulta <br><br>";
}
else
{
    echo "La base de datos $basededatos no se ha podido crear <br>" .mysqli_error ($conexicón);
}
echo "<br><br>";
mysqli_close($conexicón);
?>