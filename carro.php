<?php
    require_once('header.php');


    $q_consulta = "SELECT * FROM `carro_de_compras` WHERE `RE_id_usuario` = '$_SESSION[id_usuario]'";
    $r_consulta = $conn -> query($q_consulta);

    if($r_consulta == TRUE){
        $n_consulta = $r_consulta->num_rows;
        echo  $n_consulta;
        if($n_consulta == 0){
            header('Location: http://localhost/elremanso/index.php');
        }
    }

   
?>

<div class="bcolor-three">
            <div class="container">
               <div class="xs-twelve xl-twelve">
                     <p class="f-20 c-w light">estas en: <span class="bold c-w"> Carro de Compras</span></p>
                </div>
            </div>
        </div>
</header>


        <div class="xs-headerfalso-xl xl-headerFalso xl-mb-20 xs-mb-50"> 
        </div>
      <section class="container xs-p-15">
          <div class="xs-twelve xl-twelve">
              <h2 class="f-30 bold">Carro de Compras</h2>
          </div>
          
          <div class="xs-twelve xl-six">
              <p class="f-26 mb-20">Datos de Despacho</p>
              <p class="f-22 light mb-20">Despachamos solo dentro de la region Metropolitana.
Tu despacho sera realizado dentro de las proximas 24 Hrs.</p>
         <p class="f-22 bold mb-50 ">Ingrese los siguientes datos para el envio del 
producto.</p>
         
         <form action="#" method="get" id="datosDespacho">
                            <input type="text" name="direccionDespacho" placeholder="Dirección" value="" required class="f-22 mb-20 light">
                            <input type="text" name="numeracionDespacho" placeholder="numereción" value=""  required class="f-22 mb-20 light">
                            <input type="text" name="departamentoDespacho" placeholder="departamento/ oficina/ otros" value=""  class="f-22 mb-20 light">
                            <input type="text" name="comunaDespacho" placeholder="comuna"  required class="f-22 mb-20 light">
                            <button class="guardar btn-large bcolor-succes c-w f-22 mb-50" >Enviar</button>
                    </form>
                    
                      <h3 class="f-22 fw-bold text-left mb-30">Datos para la emisión de boleta electronica</h3>
                              <p class="f-18 fw-bold mb-30">En esta sección ingresa los datos del receptor de la boleta electronica.</p>
                                <form action="" id="datosFacturacion">
                                 <input type="text" name="nombreFacturacion" placeholder="Nombres" required class="f-22 mb-20 light">
                                 <input type="text" name="apellidosFacturacion" placeholder="Apellidos" required class="f-22 mb-20 light">
                                 <input type="text" name="emailFacturacion" placeholder="E-mail" required class="f-22 mb-20 light">
                                 
                                 
                                <button class="guardar btn-large bcolor-succes c-w f-22 mb-20">Enviar</button>
                          </form>
          </div>
          
          <div class="xs-twelve xl-six height-100 xs-r-1">
              <h4 class="f-30 fw-bold mb-10">Mi pedido</h4>
        
                <?php 
                             if(isset($_SESSION['id_usuario']) && $_SESSION['id_usuario'] !== ""){   
                             $queryCompras = "SELECT * FROM `carro_de_compras` WHERE `RE_id_usuario` = '$_SESSION[id_usuario]' ";
                             $resourceCompras = $conn->query($queryCompras);
                             $totalResultado =$resourceCompras->num_rows;
                             $montoTotalTotal = 0;   
                             $cantidadTotalTotal = 0;
                             while($row = $resourceCompras->fetch_assoc()){ 
                    
                    $queryProductoCarro = "SELECT * FROM `productos` WHERE `RE_id_productos` = '$row[RE_id_producto]'";
                    $resourceProductosCarro = $conn->query($queryProductoCarro);
                    
                        while($rowProductos = $resourceProductosCarro->fetch_assoc()){ 
                           
                           ?>
                <article class="caja container border p-15  mb-10">
                    <div class=" abrirModalConfirm  xs-three xl-three"><img src="img/ico/icoEmpa-<?php echo $rowProductos['RE_id_productos']; ?>.svg" alt="empanadas del remanos" height="40px"></div>
                    <div class="nombre-cesta  xs-trhee xl-three"><a href="" class="link-nav f-20 light text-center"><?php echo $rowProductos['RE_nombre_producto']; ?></a>
                      </div>
                    <div class="catidad-cesta  xs-two xl-two"> <p class=" f-20 bold">
                            <?php $c = $row['RE_cantidad_producto']; echo " $c"; ?>
                       </p></div>
                    <div class="borrar-cesta xs-two xl-two">
                        <form action="borrar.php" method="post" class="delete">
                                               <input type="hidden" name="id_boleta" value="<?php echo $row['RE_id_boleta']; ?>">
                                               <button class="borrar">
                                                   <svg height="30" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg>
                                               </button>
                                           </form></div>
                                           <?php $totalProducto = $rowProductos['RE_valor_producto'] * $row['RE_cantidad_producto']; ?>
                    <div class="total-cesta   xs-two xl-two">
                         <p class="f-20 bold">$<?php echo " $totalProducto"; ?></p>
                    </div>
                    

               
                                    </article>
                                    <?php 
                                        $cantidadTotalTotal = $cantidadTotalTotal + $c;
                                        $montoTotalTotal = $montoTotalTotal + $totalProducto;
                                    ?>
                                    
                                    
                                  
                                    
                                    
                                    
                                    
                                 <?php } }  } ?>  
                                     <article class="costoEnvio container border p-15 mb-10 bcolor-proof-three">
                                       <div class="xs-four xl-four">
                                           <img src="img/ico/delivery.svg" height="50px" alt="">
                                       </div>
                                        <p class="f-20 light xs-six xl-six c-w">Costo de envio</p>
                                        <p class="f-20 bold xs-two xl-two c-w">$<?php $costoEnvio = 1900; echo $costoEnvio;
                                            $montoTotalTotal= $montoTotalTotal+ $costoEnvio;?></p>
                                      
                                    </article>
    
                                 <article class="total mb-30 container border p-15 bcolor-proof-three">
                                        <p class="f-20 light xs-three xl-three c-w">N° Empnadas </p>
                                        <p class="f-20 light xs-three xl-three c-w"> <?php echo  $cantidadTotalTotal;?></p>
                                        <p class="f-20 light xs-four xl-four c-w">Total </p>
                                        <p class="f-20 bold xs-two xl-two c-w">$<?php echo  $montoTotalTotal;?></p>
                                    </article>
                                    
                                <article class="">
                                    <form action="" id="pagar">
                                       <input type="hidden" name="direccionDespacho"  required>
                                        <input type="hidden" name="numeracionDespacho"  required>
                                        <input type="hidden" name="departamentoDespacho" >
                                        <input type="hidden" name="comunaDespacho"  required class="mb-30">
                                       
                                       <input type="hidden" name="nombreFacturacion"required>
                                       <input type="hidden" name="apellidosFacturacion" required>
                                       <input type="hidden" name="emailFacturacion"  required class="mb-30">
                                       
                                       
                                        <input type="submit" class="btn bcolor-succes c-w f-22" name="comprar" value="Pagar" disabled>
                                    </form>
                                </article>
          </div>
      </section> 
       
        
      <?php require('menu-movil.php'); ?>
      <?php require_once('footer.php'); ?>
</body>
</html>