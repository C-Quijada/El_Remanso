
<?php 
include('sql.php');
include('header.php');
include('menuMovil.php');

if(isset($_POST['']))


?>



<div class="falsoHeader mb-100">
    
</div>

<div class="wrap">
   <h1 class="f-26 fw-bold mb-50">Carro de compras</h1>
    <section class="datosForm mb-100">
        <h2 class="f-22 fw-bold mb-30">Datos de despacho</h2>
            <p class="f-18 ">Despachamos solo dentro de la region Metropolitana. Tu despacho sera realizado dentro de las proximas 24 Hrs.</p>
                                       
            <p class="f-18 fw-bold mb-30">Cuentanos donde quieres que enviemos tus ptoductos.</p>
                    <form action="#" method="post" id="datosDespacho">
                            <input type="text" name="direccionDespacho" placeholder="Dirección" value="" required>
                            <input type="text" name="numeracionDespacho" placeholder="numereción" value=""  required>
                            <input type="text" name="departamentoDespacho" placeholder="departamento" value=""  >
                            <input type="text" name="comunaDespacho" placeholder="comuna"  required class="mb-30">
                            <input type="submit" value="Guardar">
                    </form>
               
                               <h3 class="f-22 fw-bold text-left mb-30">Datos de Facturación</h3>
                              <p class="f-18 fw-bold mb-30">En esta sección ingresa los datos de facturación.</p>
                                <form action="" id="datosFacturacion">
                                 <input type="text" name="nombreFacturacion" placeholder="Nombres" required>
                                 <input type="text" name="apellidosFacturacion" placeholder="Apellidos" required>
                                 <input type="text" name="emailFacturacion" placeholder="E-mail" required class="mb-30">
                                 
                                 
                                <button class="guardar btn btn-success f-22">Enviar</button>
                          </form>
    </section>
    <section class="carroCompras mb-50">
        <h4 class="f-22 fw-bold">Mi pedido</h4>
        
                <?php 
                
                             if(isset($_SESSION['id_usuario']) && $_SESSION['id_usuario'] !== ""){  
                                 
                             $usuario_conectado =  $_SESSION['id_usuario'];
                             $queryCompras = "SELECT * FROM `carro_de_compras` WHERE `RE_id_usuario` = '$usuario_conectado' ";
                             $resourceCompras = $conn->query($queryCompras);
                             $totalResultado =$resourceCompras->num_rows;
                             $montoTotalTotal = 0;   
                             $cantidadTotalTotal = 0;
                             while($row = $resourceCompras->fetch_assoc()){ 
                    
                    $queryProductoCarro = "SELECT * FROM `productos` WHERE `RE_id_productos` = $row[RE_id_producto]";
                   
                    $resourceProductosCarro = $conn->query($queryProductoCarro);
                    
                        while($rowProductos = $resourceProductosCarro->fetch_assoc()){ 

                            
                           
                           ?>
                <article class="cesta">
                    <div class="img-cesta abrirModalConfirm"><img src="img/ico/icoEmpa-<?php echo $rowProductos['RE_id_productos']; ?>.svg" alt="empanadas del remanos ,<?php echo $rowProductos['RE_descripcion_producto']; ?>" width="75%"></div>
                    <div class="nombre-cesta"><a href=""><?php echo $rowProductos['RE_nombre_producto']; ?></a>
                      </div>
                    <div class="catidad-cesta"> <p class=" f-18">
                            <?php $c = $row['RE_cantidad_producto']; echo " $c"; ?>
                       </p></div>
                    <div class="borrar-cesta"><form action="borrarCarro.php" method="post" id="delete">
                                               <input type="hidden" name="id" value="<?php echo $rowProductos['RE_id_productos']; ?>">
                                               <input type="hidden" name="id_usser" value="<?php echo $_SESSION['id_usuario']; ?>">
                                               <button class="borrar">
                                                   <svg height="30" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg>
                                                </br>borrar
                                               </button>
                                           </form></div>
                                           <?php $totalProducto = $rowProductos['RE_valor_producto'] * $row['RE_cantidad_producto']; ?>
                    <div class="total-cesta">
                         $<?php echo " $totalProducto"; ?>
                    </div>
                    

               
                                    </article>
                                    <?php 
                                        $cantidadTotalTotal = $cantidadTotalTotal + $c;
                                        $montoTotalTotal = $montoTotalTotal + $totalProducto;
                                    ?>
                                    
                                    
                                  
                                    
                                    
                                    
                                    
                                 <?php } }  } ?>  
                                     <article class="costoEnvio">
                                       <img src="img/ico/envio-ico.svg" width="100 px" alt="">
                                        <p class="f-18 ">Costo de envio</p>
                                        <p>$<?php $costoEnvio = 1900; echo $costoEnvio;
                                            $montoTotalTotal= $montoTotalTotal+ $costoEnvio;?></p>
                                      
                                    </article>
    
                                 <article class="total mb-30">
                                        <p>N° Empnadas </p>
                                        <p> <?php echo  $cantidadTotalTotal;?></p>
                                        <p>Total </p>
                                        <p>$<?php echo  $montoTotalTotal;?></p>
                                    </article>
                                    
                                <article class="">
                                    <p>Antes de pagar, debe ingresar los datos de despacho.</p>
                                    <form action="#" id="pagar">
                                       <input type="hidden" name="direccionDespacho" required>
                                        <input type="hidden" name="numeracionDespacho"  required>
                                        <input type="hidden" name="departamentoDespacho" >
                                        <input type="hidden" name="comunaDespacho"  required class="mb-30">
                                       
                                       <input type="hidden" name="nombreFacturacion"required>
                                       <input type="hidden" name="apellidosFacturacion" required>
                                       <input type="hidden" name="emailFacturacion"  required class="mb-30">
                                       
                                       
                                        <input type="submit" class="btn btn-success" name="comprar" value="Comprar" disabled>
                                    </form>
                                </article>
    </section>
    
    
  
    
    
</div>



  <div id="modalConfirm">
       <div id="wrapConfirm">
        <div id="headerConfirm">
                <h5 class="f-26">Agregando al Carro</h5>
                <p class="f-22">Empanadas de <span id="nombreP"></span></p>
        </div>
        <div id="confirmInfo">
          <form id="agregarCarroForm" action="agregandoAlCarrito.php" method="post" >
                       
            <div id="agregarCarro">
                <input type="number" name="cantidadProducto" class="cantidadProducto f-22" placeholder="¿1? " >
            </div>
            
            <div id="cerrarConfirm">
                <button class="btn btn-danger btn-lg">Cancelar</button>
            </div>
            <input id="agregar" type="submit" value="Agregar"  name="agregar"  class=" btn btn-success  btn-lg">
          </form>
        </div>
       </div>
    </div>

<?php include('footer.php'); ?>





