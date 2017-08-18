<?php
	session_start();
	include_once 'conectardb.php';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<title>Relojes Lincoln - El Legado de Lincoln</title>
	<link rel="stylesheet" href="css/estilos.css" type="text/css">
</head>

<body class="acerca">
	
	<?php include_once 'info_usuario.php'?>
	<div class="clear"></div>
	
	<div class="container">
		<div class="encabezado">
			<ul class="encabezado">
				<li class="encabezado"><a class="index" href="index.php">LINCOLN</a></li>
			</ul>
		</div>
		
		<div class="navegacion">
		<ul class="navegacion">
			<li class="nav"><a class="navegacion" href="acerca.php">Acerca de</a></li>
			<li class="nav"><a class="navegacion" href="coleccion.php">Colecci&#243;n</a></li>	
			<li class="nav"><a class="navegacion" href="tiendas.php">Tiendas</a></li>
			<li class="nav"><a class="navegacion" href="venta.php">Venta</a></li>
			<li class="nav"><a class="navegacion" href="consultas.php">Consultas</a></li>
		</ul>
		</div>
	
		<div class="sub-encabezado">
			<ul class="encabezado_doble_linea">
				<li class="encabezado">EL LEGADO DE LINCOLN</li>
			</ul>
		</div>
		
		<div class="sub-navegacion">
		<ul class="navegacion">
			<li class="nav"><a class="sub-navegacion" href="acerca.php">Nuestro legado</a></li>
			<li class="nav"><a class="sub-navegacion" href="relojeria.php">Relojer&#237;a</a></li>
			<li class="nav"><a class="sub-navegacion" href="historia.php">Historia</a></li>
			<li class="nav"><a class="sub-navegacion" href="contacto.php">Contacto</a></li>
		</ul>
		</div>
		
		<div>
			<img class="presentacion" alt="presentacion" src="img/varios/pueblo.jpg">
			<div class="contenido">
				<h2>VISI&#211;N A LARGO PLAZO</h2>
				<h3>Tradici&#243;n familiar</h3>
				Hijo y nieto de relojeros, Esteban Laureano Lincoln, la emblem&#225;tica figura cuya marca lleva su nombre, 
				est&#225; profundamente ligada a la excelencia del tradicional arte de la relojer&#237;a.
				Su vasta experiencia en el campo del dise&#241;o horol&#243;gico, desarrollo t&#233;cnico y terminaci&#243;n de componentes demuestra
				v&#237;vidamente su asiduidad y naturaleza inventiva. Nuestros talleres abrieron sus puertas en 1950, ubicado en
				una peque&#241;a poblaci&#243;n rodeada de cadenas monta&#241;osas en la municipalidad del Valle de Cantos a orillas 
				del Lago de Tisa.
			</div>
		</div>
		<div>
		<div class="contenido_flotante">
			<h2>UN SUE&#209;O HECHO REALIDAD</h2>
			<h3>Una vida dedicada a la horolog&#237;a</h3>
			En 1951, Esteban Lincoln presenta su primer modelo llevando su nombre: "Yo aliment&#233; el sue&#241;o de hacer relojes que representen
			mis valores hor&#243;logos: simplicidad, presici&#243;n y belleza sin adulteraciones.
			Estos valores guiaron mis elecciones en t&#233;rminos de dise&#241;o y caracter&#237;sticas t&#233;cnicas."
			&#201;l desarrolla sus propias creaciones horol&#243;gicas, desde su concepci&#243;n hasta el fin de su producci&#243;n, ayudado por
			su hijo Cristian, garantizando su continuidad.
		</div>
		<img class="presentacion_flotante" alt="presentacion" src="img/varios/taller_cartel2.jpg">
		
		<div class="clear"></div>
		
		<img class="presentacion_flotante_2" alt="presentacion" src="img/varios/taller_fachada2.jpg">
		
		<div class="contenido_flotante_2">
			<h2>DISE&#209;O</h2>
			<H3>Funcional y est&#233;tica</H3>
			Empezando por el dise&#241;o y pasando por toda la producci&#243;n hasta el control final, todo se realiza en nuestra misma instituci&#243;n.
			Aqu&#237; los prototipos son construidos, componentes terminados y finalmente se comienza el ensamble y su posterior control de calidad.
			Si alg&#250;n reloj LINCOLN necesita un service, &#233;ste se realiza dentro de nuestros talleres o es encomendado a uno de nuestros
			centros de service con personal capacitado para su tarea.
			Este amplio rango de manofactura enteramente dentro de nuestra organizaci&#243;n es una caracter&#237;stica de LINCOLN.
			S&#243;lo un pu&#241;ado de fabricantes pueden acreditarse tales niveles de excelencia.
			<br><br><br><h2>COLECCIONES</h2>
			<h3>Ingenio e invenci&#243;n</h3>
			La colecci&#243;n LINCOLN ofrece una variedad de relojes de piloto, cl&#225;sicos sumergibles de buceo, sobrios y elegantes de 
			dise&#241;os atemporales, y nuestra l&#237;nea especial "Invento", que ofrece la combinaci&#243;n de altas complicaciones 
			horol&#243;gicas, con terminaciones hechas a mano en cada pieza.
		</div>
		</div>
		
		<div class="clear"></div>
		
		<div>
			<div class="contenido_flotante_3">
				<h2>MOVIMIENTOS</h2>
				<h3>El coraz&#243;n del reloj</h3>
				Todos nuestros movimientos son dise&#241;ados, manofacturados y terminados por nuestros especialistas.
				Todos los modelos de movimiento mec&#225;nico, ofrecen una amplia gama de complicaciones: indicadores de d&#237;a, mes, 
				mecanismos autom&#225;ticos, cron&#243;grafos, sumergibilidad, indicadores de reserva, resistencia magn&#233;tica, 
				anti-golpes, entre otras.
			</div>
			<img class="presentacion_flotante_3" alt="presentacion" src="img/varios/relojero.jpg">
		</div>
		<div>
			<img id="presentacion_pie" alt="presentacion" src="img/varios/movimiento3.jpg">
		</div>
	
		<div class="clear"></div>
	
		<div class="pie">
			<a class="pie-navegacion-index" href="index.php">LINCOLN</a><br>
			<?php 
				if(!isset($_SESSION['idUsuario'])) {
					?>
					<a class="pie-navegacion" href="login.php">Login</a> | 
					<a class="pie-navegacion" href="registrarse.php">Registrarse</a> | 
					<?php
				}
			?>
			<a class="pie-navegacion" href="legal.php">Legal</a> | 
			<a class="pie-navegacion" href="contacto.php">Contacto</a> |
			<a class="pie-navegacion" href="mapa.php">Mapa del sitio</a>
			<p>
			    <a href="http://validator.w3.org/check?uri=referer">
			    	<img src="http://www.w3.org/Icons/valid-html401" alt="Valid HTML 4.01 Strict" height="31" width="88">
			   	</a>
		
				<a href="http://jigsaw.w3.org/css-validator/check/referer">
					<img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="CSS V&#225;lido!">
				</a>
			</p>
			<p>&#169; Lincoln 2015</p>
		</div>
	</div>
</body>
</html>