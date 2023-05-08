<?php
    require_once('sql.php');
    require_once('session.php');   
    require_once('send_cookie.php');



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>ELremanso Portada</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/remanso.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"> 
</head>
<body>
    <header class="bcolor-one menu-nav xl-h-80  fixed xl-pt-25 xs-h-80">
        <div class="container ">
            <div class="xl-four xs-twelve  d-flex j-c-fs xs-j-c-c xs-pt-20">
                <a href="index.php"><img src="img/elremanso.svg" height="30" alt="logo el remanso"></a>
            </div>
            <div class="xl-two xs-disable"></div>
            <div class="xl-five  xs-disable">
                <ul class="nav ">
                    <li><a class="link-nav f-20 black c-w" href="index.php">Inicio</a></li>
                    <li><a class="link-nav f-20 c-w light" href="empanadas.php">Empanadas</a></li>
                    <li><a class="link-nav f-20 c-w light" href="conocenos.php">Conocenos</a></li>
                    <li><a class="link-nav f-20 c-w light" href="contactanos.php">Contactanos</a></li>             
                    <?php
                        if(isset($_SESSION['estado_session'])){
                           if($_SESSION['estado_session'] == 2){
                        ?>
                          <li><a href="mi_perfil.php" class="link-nav f-18 fw-300 c-w light" >MI cuenta</a></li>
                         <?php
                           }else{
                        ?>
                           <li ><a href="perfil.php" class=" link-nav f-18 fw-300 c-w">Cuenta</a></li>
                     <?php
                            }
                        } 
                        ?> 
                        
                </ul>
          </div>
          <div class="xs-disable xl-one">
          <?php
                           $id_usuario = $_SESSION['id_usuario'];
                           $query_carro_compras = "SELECT * FROM `carro_de_compras` WHERE `RE_id_usuario` LIKE '$id_usuario'";
                           $resource_carro_compras = $conn-> query($query_carro_compras);
                           $contador_producto=0;
                            if(empty($resource_carro_compras)){
                                echo "esta vacio";
                            }else{
                               while ($row_carro_compra = $resource_carro_compras->fetch_assoc()){
                                   $contador_producto= $contador_producto + $row_carro_compra['RE_cantidad_producto'];
                               }
                            ?>
                            <li id="shopp" class="xs-disable xl-disable j-c-c a-i-c ">
                            <a href="carro.php"> <img src="img/shopping-cart.svg" alt="carro de compra" width="30px">
                            <div id="shoppCont">
                                 <?php
                                     echo $contador_producto;
                                 ?>
                            </div>
                            </a>
                            
                            </li>
                            <?php
                                    }  
                            ?>
          </div>
    </div>
     
       
