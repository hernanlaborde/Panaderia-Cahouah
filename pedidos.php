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

			<article class="cont-forms" >
				<form class="forms" action="" method="post" id="formRegistro">
				<h2>Clientes nuevos</h2>
					<p> Nombre: <br/>  <input type="text" name="nombre" maxlength="80" required> </p>
					<p style="margin-top: -15px;"><label id="nombre-error" class="error" for="nombre"></label></p>
					<p> Apellido: <br/>  <input type="text" name="apellido" maxlength="80" required></p>
					<p style="margin-top: -15px;"><label id="apellido-error" class="error" for="apellido"></label></p>
					<p> Telefono: <br/>  <input type="tel" name="telefono" maxlength="15" required></p>
					<p style="margin-top: -15px;"><label id="telefono-error" class="error" for="telefono"></label></p>
					<p> Email: <br/>  <input type="email" name="email" maxlength="80" required></p>
					<p style="margin-top: -15px;"><label id="email-error" class="error" for="email"></label></p>
					<p> Dirección: <br/>  <input type="text" name="direccion" maxlength="100" required></p>
					<p style="margin-top: -15px;"><label id="direccion-error" class="error" for="direccion"></label></p>
					<p> Usuario: <br/>  <input type="text" name="usuario" maxlength="50" required></p>
					<p style="margin-top: -15px;"><label id="usuario-error" class="error" for="usuario"></label></p>
					<p> Contraseña: <br/>  <input type="password" name="contrasena" maxlength="50" required></p>
					<p style="margin-top: -15px;"><label id="contrasena-error" class="error" for="contrasena"></label></p>
					<p> <input class="forms-inputs" type="submit" value="Registrar"></p>		
				</form>

				<form class="forms" action="" method="post" id="formLogin">
				<h2>Clientes existentes</h2>
					<p> Nombre: <br/> <input type="text" name="nombreLogin" required=""> </p>
					<p style="margin-top: -15px;"><label id="nombreLogin-error" class="error" for="nombreLogin"></label></p>
					<p> Contraseña: <br/> <input type="password" name="contrasenaLogin" required=""></p>
					<p style="margin-top: -15px;"><label id="contrasenaLogin-error" class="error" for="contrasenaLogin"></label></p>
					<p> <input class="forms-inputs" type="submit" value="Ingresar"></p>
				</form>
			</article>
			
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
	<script>
		setupValidateRegister();
		setupValidateLogin();
	</script>
</body>
</html>