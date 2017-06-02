<?php

// destino(s)
$para = "estrada.george@gmail.com";

// variables mediante post
$nombre = $_POST["nombre"] ;
$telefono = $_POST["telefono"] ;
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

// cabeceras adicionales
$cabeceras = 'From: ' . $email ;

// concatenar datos
$contenido = "Nombre: " . $nombre . "\nE-mail: " . $email .  "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje ;

// Funcion mail 
mail ($para, $email, $contenido, $cabeceras);

header("Location:../contacto.php");

?>