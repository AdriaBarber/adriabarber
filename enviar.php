<?php
  $destino="adriabarberesbert@gmail.com";
  $correo = $_POST["useremail"];
  $nombre = $_POST["username"];
  $mensaje = $_POST["usermessage"];
  $contenido = "Correo: " . $correo . "\nNombre: " . $nombre . "\nMensaje: " . $mensaje;
  mail($destino,"Contacto",$contenido);
  header("Location:gracias.html");




?>
