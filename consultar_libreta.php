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
// header('Content-Type: application/json');
// echo json_encode($resultado);

mysqli_close($conexion);

?>