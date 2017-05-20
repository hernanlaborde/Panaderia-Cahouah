<?php

// variable creada con el/los correo de destino
$para = "rodinzon@gmail.com, rodinzon@live.com";

// variables con los datos recibidos del formulario mediante post
$nombre = $_POST["nombre"] ;
$telefono = $_POST["telefono"] ;
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

// se crean las cabeceras adicionales
$cabeceras = 'From: ' . $email ;

// concatenar todos los datos recibidos
$contenido = "Nombre: " . $nombre . "\nE-mail: " . $email .  "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje ;


// Funcion mail que realiza el envio
// parametro 1: destino
// parametro 2: asunto
// parametro 3: mensaje
// parametro 4: cabecera

mail ($para, $email, $contenido, $cabeceras);

header("Location:../contacto.php");

?>