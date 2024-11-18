<?php

require ("BDLocal.php");
echo "<h1>Prtáctica: Conexión a mi servidor de datos MYSQL </h1> <br>";
if ($conexión=mysqli_connect("$servidor", "$usuario", "$password", "$bd"))
{
    echo " Tu conexión ha sido exitosa";
}
else
{
    echo "Error conectando MYSQL <br> " .mysqli_connect_error();
}
    echo "<br><br>";

mysqli_close ($conexión);
?>