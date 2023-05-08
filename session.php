<?php
//comensaremos verificando si exixte session
//echo "</br>SESSION</br>";
if(!isset($_SESSION))session_start();

if(isset($_SESSION['estado_session'])){
  //  echo "si existe estado";
}else{
    //echo "no existe estado";
    $_SESSION['estado_session'] = "0";
}


 
//echo "</br>";
?>