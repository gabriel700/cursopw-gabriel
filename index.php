<?php
session_start ();
header ('Content-type: text/html; charset=utf-8');
include "cabecera.php";
?>
	  <body>
	       <div id="agrupar">
		      <header id="cabecera">
			      <h1><marquee behavior="alternate">Titulo de mi sitio web</marquee></h1> 
			  </header>
			  <nav id="menu">
			     <ul>
				     <li>Inicio</li>
					 <li>¿Quienes somos?</li>
					 <li><a class="opcionmenu" href="insertar_usuario.php">Registrarse<a/></li>
					 <li><a class="opcionmenu" href="acceder_usuario.php">Modificar perfil<a/></li>
					 <li>Contacto</li>
			    </ul>
			  </nav>
			  <section id="seccion">
			       <article>
				       <header>
					        <time datetime="2015-04-19T11:18:22" pubdate>Publicado el 19-04-2015</time>
							<h2>Titulo de la sección principal</h2>
					   </header>
					   <span>Esta es la <mark>primera</mark> línea de la <cite>sección</cite> principal</span>
					   <p>Este es un parrafo de la seccion principal</p>
					   <p class="texto1"> SECCION PRINCIPAL </p>
					   <figure>
					   <img src="imagen1.jpg">
					         <figcaption>
							 Esta es la imagen del mensaje
							 </figcaption>
						</figure>
                        <footer>
                               <address>
                                     <a href="http://www.notitarde.com">Notitarde</a>
                               </address>
                               <small>Pie de pagina del articulo</small>
                        </footer>							   
				   </article>
			  </section>
			  <aside id="columna">
			  <h3>Primer mensaje de la columna lateral</h3>
			  <br>
			  <br>
			  <br>
			  <h3>Segundo mensaje de la columna lateral</h3>
			  </aside>
			         <footer id="pie">
					        <small>Derechos reservados</small>
					 </footer>		
		   </div>
      </body>		   
	  </html>
