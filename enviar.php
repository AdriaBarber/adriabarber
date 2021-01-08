<?php
  $destino= "adriabarberesbert@gmail.com";
  $nombre = $_POST["username"];
  $correo = $_POST["useremail"];
  $mensaje = $_POST["usermessage"];
  $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;
  mail($destino,"Contacto", $contenido);
  header("Location:gracias.html");
?>
