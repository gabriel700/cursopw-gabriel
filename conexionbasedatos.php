<?php
/*crear las variables necesarias para conectar con la base de datos
y asignarle los valores correspondientes*/

$servername = "localhost";
$username = "cursophp";
$password = "";
$dbname="clientes";

/*Creamos la variable "$conn" y le asiganmos la instruccion "mysqli_connect" 
y las variables necesarias para conectar a la base de datos "clientes" */

$conn = mysqli_connect ($servername, $username, $password, $dbname);

/*Intenamos conectar, si al intentar la variable "$conn" retorna el valor "false"
quiere decir que la conexion a la base de datos falló, entonces, abortamos el programa
y mostramos un mensaje de error por pantalla */

if (!($conn))
{
die ("conexion fallida" . mysqli_connect_error());
}

?>
