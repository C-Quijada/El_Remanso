<?php 
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    if(!empty($ip)){
        if(!isset($_SESSION))session_start();
        $_SESSION['volver']=$_SERVER['PHP_SELF'];
        $_SESSION['id_usuario'] = str_replace(".",'',$ip);
        $_SESSION['cont_producto']= 0;
    }
    
    ?>