<?php

  // Llamando a los campos
  $correo = $_POST['useremail'];
  $nombre = $_POST['username'];
  $mensaje = $_POST['usermessage'];

  //Datos para el Correo

  $destinatario = "adriabarberesbert@gmail.com";
  $asunto = "Contacto desde nuestra web";

  $carta = "De: $nombre \n";
  $carta .= "Correo: $correo \n";
  $carta .= "Mensaje: $mensaje ";

  //Enviando mensaje

  mail($destinatario, $asunto, $carta);
  header('Location:mensaje-de-envio.html')

?>
