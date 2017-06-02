<?php 

// traer datos de login
$nombre_login = $_POST ["nombreLogin"];
$contrasena_login = $_POST ["contrasenaLogin"];

// conectar a la DB
require ("conexion.php");

$conexion = mysqli_connect($db_host,$db_user,$db_pass) or die ("Error del servidor");

mysqli_select_db($conexion,$db_name) or die("Error en la base de datos");

mysqli_set_charset($conexion,"utf8");

// Crear la consulta para verificar datos//
$query = "SELECT * FROM $db_table1 WHERE Usuario='$nombre_login' and Contrasena='$contrasena_login'";

// Ejecutar la conexion y la consulta //
$resultado = mysqli_query($conexion,$query) or die ("Error al acceder a la tabla");

// comprobar si los datos son correctos
$registros = mysqli_fetch_array($resultado,MYSQLI_ASSOC); // traer registros a array
$numero_registros = mysqli_num_rows($resultado); // ver numero de registros obtenidos

if ($numero_registros != 0){

	session_start(); 
	
	$_SESSION["variable_de_usuario"] = $_POST["nombreLogin"]; 
	
	header("Location: 1_area_privada.php");
}else {
	header("Location: pedidos.php");
}

?>
