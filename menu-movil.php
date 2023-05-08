<?php
    require_once('sql.php');
    require_once('session.php');

  
  
       $id_usuario_movil = $_SESSION['id_usuario'];
       $query_carro_movil= "SELECT * FROM `carro_de_compras` WHERE `RE_id_usuario` LIKE '$id_usuario_movil'";
       $resource_carro_movil = $conn-> query($query_carro_movil);
       $contador_producto_movil=0;
        if(empty($resource_carro_compras)){
               
         }else{
            while ($row_carro_movil = $resource_carro_movil->fetch_assoc()){
           
           $contador_producto_movil= $contador_producto_movil + $row_carro_movil['RE_cantidad_producto'];


         }  
   

       

    
    //comenzamos obteniendo los productos de nuestra bd
        
?>  
<a href="carro.php" class="c-w xs-disable">      
<div id="carro-compras" class="xl-disable bcolor-one xs-d-flex xs-j-c-c xs-a-i-c">

<img src="img/shopping-cart.svg" alt="carro de compra" width="30px">
   <span id="cantidad"><?php echo $contador_producto_movil; ?></span>           
</div>
</a>
<?php 

} 

?> 


<div id="btn-menu" class="xl-disable bcolor-one  xs-d-flex xs-j-c-c xs-a-i-c">
           <img src="img/menuMovil.svg" alt="menu" height="30px">
           
</div>
       
       <div id="menu-movil" class="xl-disable bcolor-one">
           <ul class="xs-w-300 xs-h-400  link-nav">
               <li><img src="img/elremanso.svg" alt="logo el remanso" width="200px"></li>
               <li class=""><a href="index.php" class="link-nav f-26 c-w">Inicio</a></li>
               <li><a href="empanadas.php" class="link-nav f-26 c-w">Empanadas</a></li>
               <li><a href="conocenos.php" class="link-nav f-26 c-w">Conocenos</a></li>
               <li><a href="contactanos.php" class="link-nav f-26 c-w">Contactanos</a></li>
           
               <?php
                        if(isset($_SESSION['estado_session'])){
                           if($_SESSION['estado_session'] == 2){
                        ?>
                          <li><a href="mi_perfil.php" class="link-nav f-26 c-w" >MI cuenta</a></li>
                         <?php
                           }else{
                        ?>
                           <li ><a href="perfil.php" class=" link-nav f-26 c-w">Cuenta</a></li>
                     <?php
                            }
                        } 
                        ?> 
               <li><div id="cerrar" class="c-w f-26">X</div></li>
           </ul>
       </div>