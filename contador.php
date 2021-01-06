<?php
if(isset($_COOKIE['contador'])){
  setcookie('contador', $_COOKIE['contador']+1, time()+2628000);
  echo "Número de visitas: ".$_COOKIE['contador'];
}else {
  setcookie('contador', 1, time()+2628000);
  echo "Bienvenido por primera vez a nuestra página web";
}
?>
