<?php
	session_start();
	include_once 'conectardb.php';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<title>Relojes Lincoln</title>
	
	<link rel="stylesheet" href="css/estilos.css" type="text/css">	
	<link rel="stylesheet" type="text/css" href="engine1/style.css">
	<script type="text/javascript" src="engine1/jquery.js"></script>
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
				<li class="encabezado">NOVEDADES</li>
			</ul>
		</div>
		
		<div class="sub-navegacion">
			<ul class="navegacion">
				<li class="nav"><a class="sub-navegacion" href="galet.php">Galet</a></li>
				<li class="nav"><a class="sub-navegacion" href="diamagnetico.php">Diamagnetico</a></li>
				<li class="nav"><a class="sub-navegacion" href="buceo_alarma_ii.php">Buceo Alarma II</a></li>
				<li class="nav"><a class="sub-navegacion" href="resonancia.php">Resonancia</a></li>
			</ul>
		</div>
		
		<div class="clear"></div>
		
		<div>
			<div id="wowslider-container1">
				<div class="ws_images"><ul>
						<li><a href="galet.php"><img src="data1/images/galet.jpg" alt="Galet" title="Galet" id="wows1_0"></a></li>
						<li><a href="diamagnetico.php"><img src="data1/images/diamagnetico.jpg" alt="Diamagnetico" title="Diamagnetico" id="wows1_1"></a></li>
						<li><a href="buceo_alarma_ii.php"><img src="data1/images/buceo_alarma_ii.jpg" alt="Buceo Alarma II" title="Buceo Alarma II" id="wows1_2"></a></li>
						<li><a href="resonancia.php"><img src="data1/images/resonancia.jpg" alt="Resonancia" title="Resonancia" id="wows1_3"></a></li>
					</ul></div>
				<div class="ws_shadow"></div>
				</div>	
			<script type="text/javascript" src="engine1/wowslider.js"></script>
			<script type="text/javascript" src="engine1/script.js"></script>
			
			<div id="contenido_2">
				Bienvenido a la p&#225;gina oficial de LINCOLN relojes.<br><br>
				M&#225;s de 50 a&#241;os de experiencia en la industria relojera acredita la excelencia de nuestra empresa.
				Empezando por el dise&#241;o y pasando por la producci&#243;n de cada pieza, hasta el control final de calidad, 
				todo se realiza en nuestra misma instituci&#243;n por nuestro diligente personal de relojeros y diciplinados t&#233;cnicos
				especializados.	Aqu&#237; los prototipos son dise&#241;ados, manufacturados, sus componentes terminados y finalmente se 
				pasa al ensamble del reloj, seguido de un riguroso control de calidad.
				Este rango de manofactura enteramente dentro de nuestra organizaci&#243;n es una caracter&#237;stica propia de LINCOLN,
				pocos fabricantes en el mundo pueden acreditarse tales niveles de constancia y compromiso con su producto.<br><br>
				
				La colecci&#243;n LINCOLN ofrece una variedad de relojes de piloto, cl&#225;sicos modelos sumergibles de buceo, sobrios y 
				elegantes relojes con dise&#241;os atemporales, y nuestra l&#237;nea exclusiva "Invento", que ofrece alguna de las m&#225;s altas
				complicaciones horol&#243;gicas combinando dise&#241;o y terminaci&#243;	n de alt&#237;sima calidad.<br><br>
				
				Por favor navegue nuestro sitio, descubra el cat&#225;logo de colecciones donde presentamos nuestros relojes, que incluye
				descripciones y precisas especificaciones t&#233;cnicas, y ordene su compra directamente desde nuestras tiendas online.
				Y si se encuentra en cercan&#237;a de nuestras premisas en el Valle de Cantos, usted es muy bienvenido a visitarnos y observar
				directamente nuestro trabajo y dedicaci&#243;n con estas magn&#237;ficas piezas de relojer&#237;a que aqu&#237; presentamos para usted.
			</div>
			<a class="titulo_buscar" href="buscar.php">
				<span class="titulo_buscar_1">Perm&#237;tanos ayudarle a encontrar su reloj Lincoln</span>
				<br><span class ="titulo_buscar_2">&#60;Click aqu&#237;&#62;</span>
			</a>
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