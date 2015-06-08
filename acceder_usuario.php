<?php 
   	session_start(); # Inicializa o carga las variables de sesión
	header ('Content-type: text/html; charset=utf-8'); # Ajusta el programa para trabajar con ñ y acentos 
	include "cabecera.php"; // llama al programa cabecera.php que es el head de la página contenido en un programa independiente 
	                        // se utiliza de esta manera para no tener que repetir el head o cabecera en todos los programas
	                        // se cierra php
?>
        <!--se abre html a los efectos de ubicar la ejecución del programa en el formulario,
		el se encuentra en el body o cuerpo de la pagina-->
		<body>
			<section class="formulario">

<?php // se abre php de nuevo

	$error = false; // se establece la variable error = "falso"
	$errores = array ("usuario"=>"", "clave"=>"", "correo"=>""); // Esa variable error falso debe verificarse a una lista definida en un array, 
	                                                             //en este caso seran el error en "usuario", "clave" y "correo"
																 
	if (isset($_REQUEST['acceder'])) // se establece como instruccion "si existe algun valor en la variable acceder"
	
	    // e instruye que esos valores sean validados llamando a los programas validarusuario.php y validarclave.php
		
		{
        $acceder = $_REQUEST['acceder'];	
		$usuario = $_REQUEST['usuario'];
		$clave = $_REQUEST['clave'];
		
		include "validarusuario.php";
		include "validarclave.php";
		}

	if (isset($_REQUEST['acceder']) && !($error)) // Pregunta si existe en la variable acceder algun valor distinto a la variable error
        // instruye que llame a la bd en la que selecciona la tabla usuario, para validar las variables usuarios y clave.	
		{

		include "conexionbasedatos.php";
		
		$sql = "SELECT * FROM usuario WHERE usuario = '$usuario' and clave = '$clave'";
        //establece que si es valido conecta, o de lo contrario mostrara el mensaje "fallo al acceder a la cuenta"
  		
		$result = mysqli_query($conn, $sql) or die ("Fallo al acceder a la cuenta del usuario");

		if (mysqli_num_rows($result) > 0) 
			{

   			$_SESSION['registro_seleccionado'] = mysqli_fetch_assoc($result);

			include "modificar_usuario_incompleto.php";

			}
		else
			{
			echo "Usuario o clave inválida";
			print ("<p><a href='acceder_usuario.php'>Volver al formulario</a></p>\n"); 
			}
				
		mysqli_free_result($result);
			
		mysqli_close($conn);

		}
	else
		{

?>			
			<h1>Modificar la cuenta de usuario:</h1>
			<form action="acceder_usuario.php" name="acceder" method="post">

			<p class="etiqueta">Usuario:*</p>
				<p class="campo"><input type="text" name="usuario" size="10" maxlenght="10" 

<?php

	if (isset($_REQUEST['acceder']))
		print ("value='$usuario'></p>");

	else	
		print ("></p>");

	if ($errores["usuario"] != "")
		print "<p>Error: {$errores['usuario']}</p>";
?>										
					
				<p class="etiqueta">Clave:*</p>				
				<p class="campo"><input type="password" name="clave" id="miclave" size="10" maxlenght="10" 

<?php
		
	if (isset($_REQUEST['acceder']))
		print ("value='$clave'></p>");

	else 
		print ("></p>");
		
	if ($errores["clave"] != "")
		print "<p>Error {$errores['clave']}</p>";
?>										
				<p class="campo"><input type="submit" name="acceder" value="Acceder"></p>
			</form>
				<p class="campo">Nota: Los datos marcados con (*) deben ser rellenados obligatoriamente.</p>
				<p class="campo"><a href="index.php">Volver al inicio</a></p>		
		</section>

<?php	
			}
?>

		</body>
	</html>					
