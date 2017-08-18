<?php
	session_start();
	include_once 'conectardb.php';
	
	$query = mysql_query("SELECT activo FROM productos WHERE idProducto='12'");
	$fila = mysql_fetch_array($query);
	
	if (!$fila['activo']) {
		header("Location: coleccion.php");
	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<title>Relojes - Colecci&#243;n Cl&#225;sico: Ultra Fino</title>
	<link rel="stylesheet" href="css/estilos.css" type="text/css">
</head>

<body class="clasico">

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
				<li class="encabezado">COLECCI&#211;N CL&#193;SICO</li>
			</ul>
		</div>
		
		<div class="sub-navegacion">
			<ul class="navegacion">
				<?php 
					$SQL = "SELECT * FROM productos WHERE coleccion='Clasico'";
					$result = mysql_query($SQL);
						
					while ( $db_field = mysql_fetch_assoc($result) ) {
						if ($db_field['activo']) {
							?><li class="nav"><a class="sub-navegacion" href="<?php echo $db_field['link']; ?>" >
							<?php echo $db_field['modelo']; ?></a> <?php
						}
					}
				?>
			</ul>
		</div>
		
		<div>
			<div class="cuadro">
				<h2 class="claro">ULTRA FINO</h2><br>
				Presenta una super delgada caja hecha en oro rosado, gracias al movimiento manual construido en m&#237;nimas
				dimensiones. De l&#237;neas geom&#233;tricas sencillas, con manecillas y marcadores en oro rosado, sobre el dial
				color crema que combinan con el estilo c&#225;lido del reloj. Una ventana para la fecha se encuentra a las 6
				en punto.
			</div>
			
			<div>
				<div class="titulo_especificacion">
					<h4>especificaciones t&#233;cnicas</h4><br>
				</div>
				
			    <div>
			    	<a href="img/relojes/3 clasico - ultra fino/+00.jpg" title="ultra fino 01"><img class="modeloder" src="img/relojes/ultra fino.jpg" alt="ultra fino"></a>
				</div>
	        
				<table class="especificaciones">
	          <tr>
	            <th>Movimiento</th>
	            <td>Calibre 1177.<br>
	            	Mec&#225;nico manual y autom&#225;tico.<br>
	            	27 rub&#237;es.<br>
	            	<hr class="linea">
	            </td>
	          </tr>
	          <tr>
	            <th>Dimensiones Movimiento</th>
	            <td>Largo: 26.00mm.<br>
	            	Di&#225;metro interior caja: 26.00mm.<br>
	            	Altura: 3.60mm.<br>
	            	Altura corona: 2.69mm.<br>
	            	Altura manecillas: 1.65mm.<br>
	            	<hr class="linea">
	            </td>
	          </tr>
	          <tr>
	            <th>Balance</th>
	            <td>Regulado.<br>
	            	Cuatro pesas de inercia ajustables.<br>
	            	Frecuencia: 28.800 v/h (4 Hz).<br>
	            	Inercia: 10.10 mg/cm2.<br>
	            	&#193;ngulo de levante: 52&#176;.<br>
	            	<hr class="linea">
	            </td>
	          </tr>
	          <tr>
	            <th>Escape</th>
	            <td>Escape por v&#225;lvula en l&#237;nea.<br>
	            	Rueda de escape de quince dientes.<br>
	            	<hr class="linea">
	            </td>
	          </tr>
	          <tr>
	            <th>Funciones</th>
	            <td>Hora, minuto y segundo.<br>
	            	Fecha.<br>
	            	Sistema de parada del segundero para puesta en hora precisa.<br>
	            	<hr class="linea">
	            </td>
	          </tr>
	          <tr>
	            <th>Indicadores</th>
	            <td>Hora, minuto y segundo central.<br>
	            	Fecha a las 6 en punto.<br>
	            	<hr class="linea">
	            </td>
	          </tr>
	          <tr>
	            <th>Resistencia al agua</th>
	            <td>50 metros.
	            <hr class="linea">
	            </td>
	          </tr>
	          <tr>
	            <th>Reserva de energ&#237;a</th>
	            <td>40 horas aprox.<br>
	            	Carga completa: 24 rotaciones de la corona.<br>
	            	<hr class="linea">
	            </td>
	          </tr>
	          <tr>
	            <th>Caja</th>
	            <td>Oro rosado.<br>
	            	Di&#225;metro: 39mm (sin corona).<br>
	            	Di&#225;metro: 40mm (con corona).<br>
	            	Largo: 42mm.<br>
	            	Grosor total: 8.50mm.<br>
	            	Longitud de asas: 20mm.<br>
	            	<hr class="linea">
	            </td>
	          </tr>
	          <tr>
	            <th>Cristal</th>
	            <td>Safiro resistente a rayaduras aplicaci&#243;n anti-reflejo.<br>
	            	<hr class="linea">
	            </td>
	          </tr>
	          <tr>
	            <th>Terminaci&#243;n</th>
	            <td>Material pulido.<br>
	            	Pulido circular en tapa trasera de caja.<br>
	            	Cabeza de tornillos azulados pulidos y aberturas limadas.<br>
					Movimiento con placas decoradas.<br>
	            	<hr class="linea">
	            </td>
	          </tr>
	          <tr>
	            <th>N&#250;mero de partes</th>
	            <td>Movimiento sin dial: 196.<br>
	            	Armado con correa: 227.<br>
	            	<hr class="linea">
	            </td>
	          </tr>
	          <tr>
	            <th>Peso</th>
	            <td>107 gramos.</td>
	          </tr>
	        </table>
	    
		</div>
		
		<a href="img/relojes/3 clasico - ultra fino/+01.jpg" title="ultra fino 01"><img class="sub-imagen" src="img/relojes/3 clasico - ultra fino/01.jpg" alt="ultra fino 01" width="131" height="130"></a>
		<a href="img/relojes/3 clasico - ultra fino/+02.jpg" title="ultra fino 02"><img class="sub-imagen" src="img/relojes/3 clasico - ultra fino/02.jpg" alt="ultra fino 02" width="131" height="130"></a>
		<a href="img/relojes/3 clasico - ultra fino/+03.jpg" title="ultra fino 03"><img class="sub-imagen" src="img/relojes/3 clasico - ultra fino/03.jpg" alt="ultra fino 03" width="130" height="130"></a>
		<a href="img/relojes/3 clasico - ultra fino/+04.jpg" title="ultra fino 04"><img class="sub-imagen" src="img/relojes/3 clasico - ultra fino/04.jpg" alt="ultra fino 04" width="131" height="131"></a>
		
		<div class="clear"></div>
		
		</div>
		
		<?php 
			$resultado = mysql_query("SELECT idProducto, modelo, precio, cantidad FROM productos WHERE idProducto='12'");
			$productos = mysql_fetch_array($resultado);
			
			if ($productos['cantidad'] <= 0) {
				echo "<td style='text-align:right'>
					<div class='pie_precio'>Sin stock</div>";
			} else {
				echo "<td style='text-align:right'>
					<div class='pie_precio'>Precio: $ " . $productos['precio'] . "</div>";
			}
			
			if ((isset($_SESSION['idUsuario'])) && ($_SESSION['tipoUsuario'] == 'cliente')) {
				if ($productos['cantidad'] > 0) {
					?><div>
						<?php 
						echo "<a class='pie_menu_carrito' href='carrito.php?idProducto=" . $productos['idProducto'] . "&action=";
						//Detectamos si el producto ya se ha agregado al carrito de compras.
						//Si ya se agrego mostramos 'Eliminar', sino 'Agregar'.
						if (isset($_SESSION['carrito'][$productos['idProducto']])){
							echo "removeProd' <p>Eliminar del carrito</p>";
						} else {
							echo "add' <p>Agregar al carrito</p>";
						}
						echo "</a></td>";
						?>
					</div>
					<?php
				}
			} else {
				if ($_SESSION['tipoUsuario'] == 'admin') {
					?><div>
						<a class="pie_menu_carrito" href="editar_producto.php?idProducto=<?php echo $productos['idProducto']; ?>" >Editar</a>
						<a class="pie_menu_carrito" href="eliminar_producto.php?idProducto=<?php echo $productos['idProducto']; ?>" >Eliminar</a>
					</div>
					<?php 
				}
			}
		?>
		
		<div class="clear"></div>
		
		<div>
			<a class="pie_menu" href="tiendas.php" title="tiendas">Encuentrar un punto de venta</a>
		</div>
		<div>
			<a class="pie_menu" href="coleccion.php" title="tiendas">Volver a colecciones</a>
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