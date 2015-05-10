<!DOCTYPE html>
  <html lang="es">
    <head>
		<meta charset="utf-8">
		<meta name="description" content="Ejercicio 1 de programacion web">
		<meta content="width=device-width, initial-scale=1, minimum-scale=1" name="viewport">
		<title>Ejercicio 1 de programacion web</title>
		<link href="escritorio" rel="stylesheet">
    </head>
	<!--de esta forma se hace un formulario el $nbsp es para generar espacio distinto a ese campo-->
    <body>
	     <section class="formulario">
		 <!--ahora de aqui en adelante embebemos codigo php dentro de html para conectar a la base de datos-->
<?php
//Obtener los valores las variables de HTML embebemos php / En la instruccion de abajo  de la linea 16 estamos preguntando si es verdadero que en el boton insertar hay valores hacer tal o cual operacion= enviar a la base de datos
   
    if (isset($_REQUEST['insertar']))
	{
	$insertar = $_REQUEST ['insertar'];
	$usuario = $_REQUEST ['usuario'];
	$clave= $_REQUEST ['clave'];
	$correo= $_REQUEST ['correo'];
	//Conectar con la base de datos clientes:
	$servername = "localhost";
	$
    }
	
	else
	    
    





?>
	<!--de esta forma se hace un formulario en html nota: el $nbsp es para generar espacio distinto a ese campo-->	 
		 <h1>Registrarse:</h1>
		 <form action="insertar_usuario.php" name="insertar" method="post">
		      <p class="campo">Usuario:*<input type="text" name="usuario" size="10" maxlenght="10" required></p>
			  <p class="campo">Clave:*&nbsp;&nbsp;&nbsp;<input type="text" name="clave" id="miclave" size="10" maxlenght="10" required></p>
              <p class="campo">Correo:*<input type="email" name="correo" id="micorreo" required></p>
              <p class="campo"><input type="submit" name="insertar" value="Registrarse"></p>
         </form>
              <p class="campo">Nota: Los datos marcados con (*) deben ser rellenados obligatoriamente</p>
              <p><a href="index.html">Volver al inicio</a></p>			  
		 </section>
    </body>