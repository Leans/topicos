<?php
	session_start();
	include_once 'conectardb.php';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<title>Relojes Lincoln - Tiendas</title>
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
			<ul class="encabezado_doble_linea">
				<li class="encabezado">TIENDAS<br>Ocean&#237;a</li>
			</ul>
		</div>
		
		<div class="sub-navegacion">
		<ul class="navegacion">
			<li class="nav"><a class="sub-navegacion" href="tiendaseu.php">Europa</a></li>
			<li class="nav"><a class="sub-navegacion" href="tiendasna.php">Norteam&#233;rica</a></li>
			<li class="nav"><a class="sub-navegacion" href="tiendasoc.php">Ocean&#237;a</a></li>
			<li class="nav"><a class="sub-navegacion" href="tiendas.php">Sudam&#233;rica</a></li>
		</ul>
		</div>
		
		<div class="clear"></div>
		
		<div>
			<img class="presentacion" alt="presentacion" src="img/varios/tienda4.jpg">
			<div class="contenido">
				<div class="dir_info">
					<h2>Direcci&#243;n</h2>
					<h2>LINCOLN Boutique</h2>
						<p>
							Ginza<br>
							Nikolas G. Hayato Center 2F,<br>
							7-9-24 Ginza, Chuo-ku<br>
							Tokyo Downtown East 100-8668<br>
							Jap&#243;n<br><br>
						</p>
				</div>
				<div class="dir_info">
					<h2>Contacto</h2>
						<p>
							Tel. +94 33 3487 0093<br>
							Fax +94 33 8734 0092<br>
							E-mail<br>
							lincolntj@lincoln.com.jp<br><br>
						</p>
				</div>
				<div class="dir_info">
					<h2>Horario comercial</h2>
						<p>
							Lun - Dom	09:00 - 19:00<br>
						</p>
				</div>
				
				<div class="clear"></div>			
				
				<div class="dir_info">
					<h2>Direcci&#243;n</h2>
					<h2>LINCOLN Boutique</h2>
						<p>
							Osaka<br>
							Horbis Plaza Ent 2F<br>
							2-2-22 Umeda, Kita-ku, Osaka<br>
							Osaka 830-8001<br>
							Jap&#243;n<br><br>
						</p>
				</div>
				<div class="dir_info">
					<h2>Contacto</h2>
						<p>
							Tel. +94 11 1536 1247<br>
							Fax +94 11 5345 3484<br>
							E-mail<br>
							lincolnoj@lincoln.com.jp<br><br>
						</p>
				</div>
				<div class="dir_info">
					<h2>Horario comercial</h2>
						<p>
							Lun - Dom	09:00 - 19:00<br>
						</p>
				</div>
				
				<div class="clear"></div>			
				
				<div class="dir_info">
					<h2>Direcci&#243;n</h2>
					<h2>LINCOLN Boutique</h2>
						<p>
							Hyundai Busan Department Store<br>
							7F<br>
							62-2 Beomil-Dong<br>
							Dong-Gu<br>
							677718 Busan<br>
							Corea del Sur<br><br>
						</p>
				</div>
				<div class="dir_info">
					<h2>Contacto</h2>
						<p>
							Tel. +88 11 4576 7754<br>
							Fax +88 11 6535 2246<br>
							E-mail<br>
							lincolnbc@lincoln.com.ko<br><br>
						</p>
				</div>
				<div class="dir_info">
					<h2>Horario comercial</h2>
						<p>
							Lun - Dom	10:00 - 18:00<br>
						</p>
				</div>
				
				<div class="clear"></div>			
				
				<div class="dir_info">
					<h2>Direcci&#243;n</h2>
					<h2>Hardy Brothers Jewellers</h2>
						<p>
							8.12/8.25 MLB Centre<br>
							11 - 21 Martin Place<br>
							NSW 2100 Sydney<br>
							Australia<br><br>
						</p>
				</div>
				<div class="dir_info">
					<h2>Contacto</h2>
						<p>
							Tel. +81 34 3465 4468<br>
							Fax +81 34 4568 3476<br>
							E-mail<br>
							lincolnsa@lincoln.com.au<br><br>
						</p>
				</div>
				<div class="dir_info">
					<h2>Horario comercial</h2>
						<p>
							Lun - Dom	10:00 - 18:00<br>
						</p>
				</div>
				
				<div class="clear"></div>
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