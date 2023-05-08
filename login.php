<?php 
//comensamos verificando si tenemos datos por metodo post
require_once('sql.php');
require_once('session.php');   


 if(isset($_POST['ingresar']) &&  $_POST['ingresar']!= "" ){
     echo "si </br>";

     //guardamos los datos ingresados por el usuario en variables
    $nombrevalidar= $_POST['email'];
    $contraseñaValidar = $_POST['password'];

    echo $nombrevalidar."  ".$contraseñaValidar;
    //si tenemos utilizamos el correo ingresado por el usuario para realizar la consulta a la bd
    $queryValidar = "SELECT * FROM `usuario` WHERE `RE_email_usuario` LIKE '$nombrevalidar'";

    $resourceValidar = $conn->query($queryValidar);
    $rowValidar = $resourceValidar->fetch_assoc();
    //una vez la consulta antregue una respuesta sobre la consulta a la bd, dependiendo de lo recivido, hacemos una comparacion
    if($contraseñaValidar == $rowValidar['RE_password_usuario']){
        echo "si son iguales </br>";
        print_r($_SESSION);
        if(isset($_SESSION['estado_session'])){
          $_SESSION['id_usuario'] = $rowValidar['RE_id_usuario'];
          $_SESSION['estado_session'] = 2;

         header('Location: http://localhost/elremanso/index.php');
  
        }
    }else{
        echo "no son iguales";
    }


 }else{
    echo "no";
 }
 
 
 ?>
