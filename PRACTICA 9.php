<?php
require("BDLocal.php");

echo "<h1>Práctica: Creación de una tabla</h1><br><br>";

$conexion = mysqli_connect($servidor, $usuario, $password, $bd);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$tabla = "programacion";
$consulta = "CREATE TABLE IF NOT EXISTS $tabla (
    ID INT(9) AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(20),
    Apellido VARCHAR(40)
);";

if (mysqli_query($conexion, $consulta)) {
    echo "La tabla $tabla se creó con éxito.<br>";
    echo "El script utilizado fue: $consulta<br><br>";
} else {
    echo "La tabla $tabla no se ha podido crear.<br>" . mysqli_error($conexion);
}

echo "<br><br>";
mysqli_close($conexion);
?>
