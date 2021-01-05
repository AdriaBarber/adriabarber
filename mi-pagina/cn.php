<?php
$conexion = mysqli_connect("localhost,"root", "","pagina_web");
if (!$conexion) {
  echo 'Error al conectar a la base de datos';
}
else {
  echo 'Conectado al abse de datos';
}
