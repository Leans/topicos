<?php
	session_start();
	include_once 'conectardb.php';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<title>Relojes Lincoln - Mapa del sitio</title>
	<link rel="stylesheet" href="css/estilos.css" type="text/css">
</head>

<body class="index">
	
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
			<ul class="encabezado">
				<li class="encabezado">MAPA DEL SITIO</li>
			</ul>
		</div>
		
		<div class="sub-navegacion">
				<ul class="encabezado">
				<li class="encabezado">Seleccione una p&#225;gina para visualizar.</li>
			</ul>
		</div>
		
		<div class="clear"></div>
		
		<div id="mapa">
			<div class="columna">
				<a class="h2_c" href="coleccion.php">COLECCIONES</a>
				<h3>Colecci&#243;n de Buceo</h3>
				<a class="mapa-navegacion" href="buceo_alarma.php">Buceo Alarma</a><br>
				<a class="mapa-navegacion" href="buceo_alarma_ii.php">Buceo Alarma II</a><br>
				<a class="mapa-navegacion" href="pelagos.php">Pelagos</a><br>
				<h3>Colecci&#243;n de Piloto</h3>
				<a class="mapa-navegacion" href="piloto_bronce.php">Piloto Bronce</a><br>
				<a class="mapa-navegacion" href="piloto_cronografo.php">Piloto Cron&#243;grafo </a><br>
				<a class="mapa-navegacion" href="piloto_nocturno.php">Piloto Nocturno </a><br>
				<h3>Colecci&#243;n Cl&#225;sico</h3>
				<a class="mapa-navegacion" href="tetra.php">Tetra</a><br>
				<a class="mapa-navegacion" href="tetra_ii.php">Tetra II</a><br>
				<a class="mapa-navegacion" href="galet.php">Galet</a><br>
				<a class="mapa-navegacion" href="constelacion.php">Constelaci&#243;n</a><br>
				<a class="mapa-navegacion" href="ceruleo.php">Cer&#250;leo</a><br>
				<a class="mapa-navegacion" href="ultra_fino.php">Ultra Fino</a><br>
				<a class="mapa-navegacion" href="ultra_fino_ii.php">Ultra Fino II</a><br>
				<h3>Colecci&#243;n Invento</h3>
				<a class="mapa-navegacion" href="centigrafo.php">Cent&#237;grafo</a><br>
				<a class="mapa-navegacion" href="resonancia.php">Resonancia</a><br>
				<a class="mapa-navegacion" href="diamagnetico.php">Diamagn&#233;tico</a><br>
				<a class="mapa-navegacion" href="diagrafo.php">Diagrafo</a><br>
				<a class="mapa-navegacion" href="dual_crono.php">Dual Crono</a><br>
			</div>
			<div class="columna">
				<h2>ACERCA DE LINCOLN</h2>
				<a class="mapa-navegacion" href="acerca.php">Nuestro legado</a><br>
				<a class="mapa-navegacion" href="relojeria.php">Relojer&#237;a</a><br>
				<a class="mapa-navegacion" href="historia.php">Historia</a><br>
				<a class="mapa-navegacion" href="contacto.php">Contacto</a><br><br><br><br>
				<h2>TIENDAS</h2>
				<h3>Por su ubicaci&#243;n</h3>
				<a class="mapa-navegacion" href="tiendaseu.php">Eurpoa</a><br>
				<a class="mapa-navegacion" href="tiendasna.php">Norteam&#233;rica</a><br>
				<a class="mapa-navegacion" href="tiendasoc.php">Ocean&#237;a</a><br>
				<a class="mapa-navegacion" href="tiendas.php">Sudam&#233;rica</a><br><br><br><br>
				<h2>ACCESORIOS</h2>
				<h3>Brazaletes y correas</h3>
				<a class="mapa-navegacion" href="accesorios.php">Accesorios</a><br>
			</div>
			<div class="columna">
				<h2>VENTA</h2>
				<h3>Informaci&#243;n de venta</h3>
				<a class="mapa-navegacion" href="venta.php">Venta</a><br><br><br><br>
				<h2>CONSULTAS</h2>
				<h3>Consultas en l&#237;nea</h3>
				<a class="mapa-navegacion" href="consultas.php">Consultas</a><br>
			</div>
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