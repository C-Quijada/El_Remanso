<?php
include('session.php');
    if(isset($_POST['close'])){
        echo "</br>tenemos dato";
        print_r($_SESSION);
        $_SESSION['estado_session'] = 0;
        $_SESSION['id_usuario'] = " ";
        header('Location:http://localhost/elremanso/');


    }else{
       
        echo "no tenemos dato";
    }
?>