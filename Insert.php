<?php
require("BDLocal.php");
$conexion=mysqli_connect($servidor, $usuario, $password, $programacion);

$Nombre= $_POST['Nombre'];
$Email= $_POST ['Email'];
$Edad= $_POST ['Edad'];

$consulta= "INSERT INTO Usuario (Nombre, Email, Edad) VALUES ('$Nombre', '$Email', '$Edad')";
if ($resultado= mysqli_query($conexion, $consulta))
{
    echo "Registro guardado con exito";
}
else
{
    echo "Error al guardar el registro:".mysqli_error($conexion);
}
mysqli_close($conexion);
?>