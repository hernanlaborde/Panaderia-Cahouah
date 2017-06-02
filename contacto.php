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
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Roboto" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="js/scripts.js"></script>
      <style>   
      #map {
        height: 450px;
		width: 550px;
      }
	  </style>
</head>
<body>
	
	<header id="no-fixed">
		<div class="container">
			<nav>
				<a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
				<a href="panaderia.php"><i class="fa fa-coffee" aria-hidden="true"></i> La panadería</a>
				<a href="productos.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Productos</a>
				<a href="pedidos.php"><i class="fa fa-cart-plus" aria-hidden="true"></i> Clientes </a>
				<a href="contacto.php"><i class="fa fa-comments-o" aria-hidden="true"></i> Contacto</a>
			</nav>
		</div>
	</header>
	

	<section class="contenido-paginas">
		<div class="container">
			
			<h1>Comuniquese con nosotros</h1>
			
			<p>Usted nos puede contactar a traves de diversos medios, por nuestras redes sociales, a nuestro correo info@panaderiacahouah.com, nos puede visitar a la direccion Calle 147a # 53-90 Barrio Victoria norte en bogota. </p>
			<p>Tambien puede escribirnos utilizando el siguiente formulario y con gusto le responderemos:</p>
			

			<div class="contacto-fm">


			<form action="" method="post" id="contacto">
				<p>Nombre: <br/><input type="text" name="nombre" required=""></p>
				<p>Telefono: <br/><input type="text" name="telefono" required=""></p>
				<p>E-mail: <br/><input type="email" name="email" required=""></p>
				<p>Mensaje:<br/> <textarea rows="4" cols="50" name="mensaje" required=""> </textarea></p>
				<p><input type="Submit" name="enviando" value="Enviar" class="btn-submit js-send-contact"></p>
			</form>

			 <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.19841035656!2d-74.06251998515201!3d4.735565096560602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f8511f0408185%3A0xbd293a0f2c22f880!2sCra.+56+%23151-55%2C+Bogot%C3%A1%2C+Colombia!5e0!3m2!1ses-419!2ses!4v1494861546376" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
			 
			 <div id="map"></div>
			 <script type="text/javascript">
	         var map;
			 var myLatLng = {lat: 4.736538, lng: -74.060052};
			function initMap() {
				map = new google.maps.Map(document.getElementById('map'), {
				center: myLatLng,
				zoom: 18
			});
			
			var marker = new google.maps.Marker({
				position: myLatLng,
				map: map,
				title: 'Panaderia Cahouah'
				});
			}
			//Validación del formulario
			$(document).ready(function(){
				$("#contacto").validate({
				submitHandler: function(form) {
				form.submit();
				}
				});
			}); 
			</script>
			 
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNZhs_NqBSkVGtvZBjYfK4IqPgZkTa7fs&callback=initMap"async defer></script>
			    
			 </div>
		</div> <!-- container -->
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
				<li><a href="https://www.facebook.com/briochesdepapa/" target="_blank" alt="Facebook" title="Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
				<li><a href="https://twitter.com/?lang=es" target="_blank" alt="Twitter" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="https://www.instagram.com/?hl=es" target="_blank" alt="Instagram" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
			</div>
		</div>
	</footer>
	

</body>
</html>