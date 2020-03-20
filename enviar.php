<?php
	$destino= "esteban.pechuan@gmail.com";
	$nombre = $_POST["Nombre"];
	$email = $_POST["Email"];
	$mensaje = $_POST["Mensaje"];
	$contenido = "Nombre: " . $nombre . "\nEmail" . $email . "\nMensaje" . $mensaje;
	mail($destino, "Contacto", $contenido);

?>