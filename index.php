<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Panaderia Cahouah | El mejor pan frances en Bogota</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="panaderia Cahouah, panaderia,pan,frances,colombia,Cahouah,bogota">
	<meta name="description" content="Panaderia Cahouah | El mejor pan frances en bogota, nos especializamos en Croissants y Baguettes sin conservantes ni saborizantes">
	<meta name="author" content="Panaderia Cahouah">
   <link rel="stylesheet" href="css/estilos.css">
   
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	
	<header>
		<div class="container">
			<nav>
				<a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
				<a href="panaderia.php"><i class="fa fa-coffee" aria-hidden="true"></i> La panadería</a>
				<a href="productos.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Productos</a>
				<a href="pedidos.php"><i class="fa fa-cart-plus" aria-hidden="true"></i> Clientes</a>
				<a href="contacto.php"><i class="fa fa-comments-o" aria-hidden="true"></i> Contacto</a>
			</nav>
		</div>
	</header>



	<section id="portada">
		<div class="container">
			<div class="textos-portada">
			<h1>Cahouah</h1>

			<h2>El mejor pan frances en Bogota</h2>

			<div class="boton">
				<a href="productos.php">Ver Productos</a>
				<a href="pedidos.php">Hacer Pedido</a>
			</div>
			</div>
		</div>
	</section>

	
	<section class="contenido-portada">
		<div class="container">
			<h1>Un poco de nosotros</h1>
			<p>La panadería "Cahouah" es una panaderia francesa ubicada en la ciudad de Bogotá en el barrio Victoria Norte.
			Todos nuestros productos son 100% naturales, hechos con la mejor selección de ingredientes para lograr la perfecta fusión de la fina comida francesa con los sabores colombianos, sin dejar de lado la creatividad y buen sabor. Ofrecemos servicio en linea de nuestros productos a su domicilio. Nos puede contactar a los telefonos: 3194110335 y 6317452. </p>
			<p>Nuestros productos destacan por no tener saborizantes ni conservantes, nuestras principales líneas de productos son los  Croissants y Baguettes que quienes los prueban quedan encantados. <a href="" class="more">Leer mas...</a></p>
		</div>
	</section>



	<section class="cajas">
		<div class="container">
			<div class="cajas-interno">
				<a href="productos.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Productos</a>
				<a href="pedidos.php"><i class="fa fa-cart-plus" aria-hidden="true"></i> Clientes</a>
				<a href="contacto.php"><i class="fa fa-comments-o" aria-hidden="true"></i> Contacto</a>
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="elementos-footer">

			<p>Panaderia Cahouah &copy; 2017 - Calle 147a # 53-90 Barrio Victoria norte -  Bogotá / Colombia - Celular: 3194110335.</p>

<p class="visitas"> 
<?php 
	$archivo = "contador.txt"; 
	$contador = 0; 

	$fp = fopen($archivo,"r"); 
	$contador = fgets($fp, 26); 
	fclose($fp); 

	++$contador; 

	$fp = fopen($archivo,"w+"); 
	fwrite($fp, $contador, 26); 
	fclose($fp); 

	echo "Total visitas: $contador"; 
?>
			</p>

			<ul>
				<li><a href="https://www.facebook.com/briochesdepapa/" target="_blank"  title="Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
				<li><a href="https://twitter.com/?lang=es" target="_blank"  title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="https://www.instagram.com/?hl=es" target="_blank" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
			</div>
		</div>

	</footer>
	

</body>
</html>