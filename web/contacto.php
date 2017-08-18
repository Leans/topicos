<?php
	session_start();
	include_once 'conectardb.php';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<title>Relojes Lincoln - Contacto </title>
	<link rel="stylesheet" href="css/estilos.css" type="text/css">
</head>

<body class="contacto">
	
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
				<li class="encabezado">CONTACTO</li>
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
		
		<div class="clear"></div>
			
		<div>
			<img class="presentacion" alt="presentacion" src="img/varios/relojero4.jpg">
			<div class="contenido">
				<h2>TALLER LINCOLN</h2><br>
				Ruta San Marcos 150<br>
				Valle de Cantos<br>
				C&#243;digo Postal 3707<br><br>
				
				<h2>INFORMACI&#211;N</h2><br>
				info@lincolnrelojes.com<br>
				Tel: +07 [0]86 737 33 88<br><br>
				
				<h2>SERVICIO POST-VENTA</h2><br>
				service@lincolnrelojes.com<br>
				Tel: +07 [0]86 737 33 98<br><br>
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