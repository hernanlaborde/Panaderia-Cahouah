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
   <script src="js/scripts.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Roboto" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="js/scripts.js"></script>
</head>
<body>
	
	<header id="no-fixed">
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
	

	<section class="contenido-paginas">
		<div class="container">
			
			<h1>Panaderia Cahouah</h1>
		
			<p class="imagenes"><img src="img/panaderia.jpg" alt="Panaderia Cahouah" title="Panaderia Cahouah"></p>
				<p>La panadería "Cahouah" es una pequeña panadería de barrio, ubicada en la ciudad de Bogotá en el barrio Victoria Norte, los datos de contacto son: 3194110335 y 6317452, sus propietarios son  Kelly y Felipe quienes iniciaron este negocio hace aproximadamente un año, la panadería pertenece y se puede incluir en el sector de los alimentos.</p>

				<p>Kelly es francesa y es la maestra panadera, ofrecen panadería francesa artesanal, sus productos se destacan por no tener conservantes ni saborizantes. Sus principales líneas de productos son los  Croissants y Baguettes que quienes los prueban quedan encantados.</p>

				<p>La competencia especifica de la panadería es casi nula, no existe en el sector ni en un radio  considerable, panaderías especializadas en el tipo y líneas de productos de la panadería Cahouah, por lo tanto su mercado es bastante seguro y su posición es destacada, los clientes son los residentes del sector, además de personas externas que van conociendo la panadería por diferentes canales y se desplazan hasta allí por la calidad de los  productos.
				</p>

		</div> <!-- container -->
	</section>


<!-- acordeon -->
<div class="acordion">
<div class="container">
<h2>Conozca mas sobre nosotros:</h2>
	
	<button class="accordion">Nuestros valores y principios ></button>
<div class="panel">
  <p>Estamos comprometidos con realizar productos de excelente calidad, por eso todos nuestros panes estan hechos con los mejores ingredientes organicos disponibles, no utilizamos conservantes ni saborizantes..</p>
</div>

<button class="accordion">Nuestra visión ></button>
<div class="panel">
  <p>Posicionarnos como una de las panaderias francesas mas importantes en la ciudd de Bogotá, y ser un referente en este mercado, logrando el reconocimiento de los clientes, igualmente adaptarnos y crecer acordemente al mercado. </p>
</div>

<button class="accordion">Mensaje e invitación para todos > </button>
<div class="panel">
  <p>Queremos agradecer a nuestros clientes por preferirnos, y reiterar nuestro compromiso con el mejoramiento continuo, igualmente hacemos una cordial invitación a todos para que nos visiten, nos conozcan y descubran nuestros exquisitos productos.</p>
</div>

</div>
</div>
<!-- acordeon -->



	<footer>
		<div class="container">
			<div class="elementos-footer">
			<p>Panaderia Cahouah &copy; 2017 - Calle 147a # 53-90 Barrio Victoria norte -  Bogotá / Colombia - Celular: 3194110335. </p>

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
				<li><a href="https://www.facebook.com/briochesdepapa/" target="_blank" alt="Facebook" title="Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
				<li><a href="https://twitter.com/?lang=es" target="_blank" alt="Twitter" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="https://www.instagram.com/?hl=es" target="_blank" alt="Instagram" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
			</div>
		</div>

	</footer>
	
<script>
		<!-- script del acordeon -->
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}

</script>
</body>
</html>