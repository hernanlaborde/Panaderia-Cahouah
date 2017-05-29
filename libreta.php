		<?php

			 session_start();

			 if(!isset($_SESSION["variable_de_usuario"])){
			 	header("Location: pedidos.php");
			 }

		?>

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

<h1>Libreta de clientes</h1>


<table>
		<tr class="titulos-tabla">
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Telefono</td>
			<td>Email</td>
			<td>Direccion</td>
			<td>Usuario</td>
			<td>Contraseña</td>
		</tr>

<?php 

// Conectar a la base de datos //
require("conexion.php");

$conexion = mysqli_connect($db_host,$db_user,$db_pass) or die ("Error del servidor");

mysqli_select_db($conexion,$db_name) or die("Error en la base de datos");

mysqli_set_charset($conexion,"utf8");

// Crear la consulta para insertar los datos//
$query = "SELECT * FROM $db_table1";

// Ejecutar la conexion y la consulta //
$resultado = mysqli_query($conexion,$query) or die ("Error al acceder a la tabla");	

// Manejo del array obtenido //
while ($registros = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){

	echo "
	<tr>
		<td>" .  $registros['Nombre'] . " </td>
		<td>" .  $registros['Apellido'] . " </td>
		<td>" .  $registros['Telefono'] . " </td>
		<td>" .  $registros['Email'] . " </td>
		<td>" .  $registros['Direccion'] . " </td>
		<td>" .  $registros['Usuario'] . " </td>
		<td>" .  '*********' . " </td>
	</tr>
	";
}

mysqli_close($conexion);

?>

</table>

<p> <a href="1_area_privada.php"><< Volver al area de clientes</a> </p>
			
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