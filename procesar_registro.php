<?php 
// Traer el formulario //
$nombre      = $_POST["nombre"] ;
$apellido    = $_POST["apellido"] ;
$telefono    = $_POST["telefono"] ;
$email       = $_POST["email"] ;
$direccion   = $_POST["direccion"] ;
$usuario   = $_POST["usuario"] ;
$contrasena   = $_POST["contrasena"] ;

// Conectar a la base de datos //
require("conexion.php");

$conexion = mysqli_connect($db_host,$db_user,$db_pass) or die ("Error del servidor");

mysqli_select_db($conexion,$db_name) or die("Error en la base de datos");

mysqli_set_charset($conexion,"utf8");

// Crear la consulta para insertar los datos//
$query = "INSERT INTO $db_table1 (Nombre,Apellido,Telefono,Email,Direccion,Usuario,Contrasena) VALUES ('$nombre','$apellido','$telefono','$email','$direccion','$usuario','$contrasena')";

// Ejecutar la conexion y la consulta //
$resultado = mysqli_query($conexion,$query) or die ("Error al acceder a la tabla");

// Mensaje tras la ejecución //
if($resultado){
	echo "Registro exitoso";
		echo " <a href='pedidos.php'> " . "Volver" . "</a>";
}else{
	echo "Registro incorrecto";
		echo " <a href='pedidos.php'> " . "Volver" . "</a>";
}
mysqli_close($conexion);
 ?>