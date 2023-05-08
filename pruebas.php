<?php
   require_once('sql.php');


    define('JUAN' , 'soy juan');

    echo JUAN;

 if(defined('JUAN')){
     echo "eco";
 }else{
     echo "oca";
 }
 echo constant('JUAN');

 $constante = constant('JUAN');

 echo $constante;

 echo var_dump($constante);

print_r($_SERVER);

$ip_server = $_SERVER['REMOTE_ADDR'];
echo $ip_server."esto el remote addr";




 if(!empty($_SERVER['HTTP_CLIENT_IP'])){
    $ip = $_SERVER['HTTP_CLIENT_IP'];
    echo $ip;
}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    echo $ip;
} else{
    $ip = $_SERVER['REMOTE_ADDR'];
    echo $ip;
}

if(!empty($ip)){
    $_SESSION['volver']=$_SERVER['PHP_SELF'];
    $_SESSION['id_usuario'] = str_replace(".",'',$ip);
    $_SESSION['cont_producto']= 0;

    echo "</br>".$_SESSION['id_usuario'];
}





?>