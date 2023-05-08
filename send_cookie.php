<?php

// Comenzamos obteniendo los datos del cliente que entra a nuesto sitio.
//los datos recogidos son una direccion ip    
if(!empty($_SERVER['HTTP_CLIENT_IP'])){
    $ip = $_SERVER['HTTP_CLIENT_IP'];
}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else{
    $ip = $_SERVER['REMOTE_ADDR'];
}
if(isset($_SESSION['estado_session'])){
    // echo "si";
    $uip= str_replace(".",'',$ip);
     if($_SESSION['estado_session'] == 0 ){
         
         $_SESSION['id_usuario'] =$uip;
         $_SESSION['estado_session']= 1;
     }

 }else{
     //echo "no";
 }


//echo "</br>COOKIE</br>";
//verificamos la existencia de una cookie-
if(isset($_COOKIE) && $_COOKIE != ""){
   // echo "</br>si tenemos cookie, el cual es </br>";
    //print_r($_COOKIE);
    //verificamos si existe dentro de la cookie el dato de la ip
    if(isset($_COOKIE['ip'])){
       //// echo "</br>si tenemos el ip del usuario</br>";
         //echo "IP:".$_COOKIE['ip']."</br>";
        if(isset($_COOKIE['usuario'])){
           // echo "</br>si tenemos usuario</br>";
          
            
            

        }else{ 
           // echo "</br>no tenemos usuario</br>";
         
           // echo "</br>".$uip."</br>";
            $cookie = setcookie('usuario' ,$uip, time()+(30*24*3600));
            $cookie = setcookie('id_usuario' ,$uip, time()+(30*24*3600));
        }


    }else{
        //echo "no tenemos ip de origen, por lo que lo definiremos";
        $cookie = setcookie('ip:' , '$ip', time() +(30*24*3600));

        if(isset($_COOKIE['usuario'])){
            //echo "</br>si tenemos usuario</br>";
            
        }else{
           // echo "</br>no tenemos usuario</br>";
           // echo "</br>".$uip."</br>";
            $cookie = setcookie('usuario:' ,$uip, time()+(30*24*3600));
        }


    }
    
   
} else {
   // echo "no, no tenemos dato";

}
//print_r($_SESSION);
?>