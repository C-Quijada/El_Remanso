
<?php
    require_once('header.php');
?>
 <?php
        if(isset($_GET['id']) && $_GET['id'] !== 0 ){
            $query_descriptor = "SELECT * FROM `productos` WHERE `RE_id_productos` = '$_GET[id]'";
            $resource_descriptor = $conn->query($query_descriptor); 
            $row_descriptor = $resource_descriptor->fetch_assoc();
        }
    ?>    
         <div class="bcolor-three">
            <div class="container">
               <div class="xs-twelve xl-twelve">
                     <p class="f-20 c-w light">estas en: <a href="" class="f-20 c-w"><a href="empanadas.php" class="c-w">Empanadas</a> </a> > <a href="descriptor_empanadas.php?id=<?php echo $row_descriptor['RE_id_productos']; ?>#nuetrasEmpanadas" class="c-w">Descriptor_empanadas</a> > <span class="bold c-w">Empanada <?php echo $row_descriptor['RE_nombre_producto']; ?></span></p>
                </div>
            </div>
        </div>
    </header>
    <section class="container pt-100">
        <article class="xs-twelve xl-four  ">
             <h2 class=" f-26 mb-30">Empanada <?php echo $row_descriptor['RE_nombre_producto']; ?> </h2> 
             
            <p class="f-22 light">Exquisita empanada con
                 un relleno hecho con <?php echo $row_descriptor['RE_descripcion_producto']; ?>.</p>           
            
        </article>
        
        <article class="xs-twelve xl-eight mb-30">
              <img src="img/empanada-<?php echo $row_descriptor['RE_id_productos'];  ?>.png" alt="" width="100%">
        </article>
        <article class="xs-twelve xl-six">
             <span class="text-left f-22 ">$<?php echo $row_descriptor['RE_valor_producto']; ?> CLP</span>
        </article>
        <article class="xs-twelve xl-six">
        <form  class="fm bcolor-proof-two" action="" method="">
                        <input type="hidden" value="<?php echo $row_descriptor['RE_nombre_producto']; ?>" name="nombre_producto">
                        <input type="hidden" value="<?php echo $id_usuario; ?>" name="id_usuario">
                        <input type="hidden" value="<?php echo $row_descriptor['RE_id_productos']; ?>" name="id_producto">
                        <button class="abrirModalConfirm btn f-22 fw-bold bcolor-succes c-w">Agregar</button>
                       </form>
        </article>
      
    </section>
      
    <div class="bcolor-two pb-50">
         <section id="nuetrasEmpanadas" class="container pt-50 mb-50">
        
                <div class="xs-twelve xl-twelve">
                    <h3 class="mb-30 f-26 fw-bold">Nuestrras empanadas</h3>
                </div>
         
           
            <?php
                //comenzamos obteniendo los productos de nuestra bd
                $queryIcon = " SELECT * FROM productos";
                $resourceIcon = $conn->query($queryIcon); 
                $totalIcon = $resourceIcon->num_rows;
                 while ($rowIcon = $resourceIcon->fetch_assoc()){
            ?>
            
            <a class="icono xs-six xl-two " href="descriptor_empanadas.php?id=<?php echo $rowIcon['RE_id_productos']; ?>">
                <img src="img/ico/icoEmpa-<?php echo $rowIcon['RE_id_productos']; ?>.svg" width="100px" alt="" >
                <p class="f-22 text-center"><?php echo $rowIcon['RE_nombre_producto']; ?></p>
            </a>
             <?php
            }
        ?>
        
        </section>
    </div>
       
       
       
    <div id="modalConfirm" class="p-15">
       <div id="wrapConfirm" class="bcolor-white">
        <div id="headerConfirm" >
                <h5 class="f-30 color-one">¿Cuantas quieres agregar?</h5>
        </div>
        <div id="confirmInfo">
          <form id="agregarCarroForm" method ="" action = "" >
             
            <input id="numero" type="number" name="cantidad_producto" class="cantidadProducto f-22 " placeholder="1" required >  
            <div id="agregarCarro">
                
            </div>
           
           <div class="options ">
            <button id="cerrarConfirm" class="btn bcolor-denger c-w f-22">Cancelar</button>
            <input id="agregar" type="submit" value="Agregar" name="agregar" class="btn f-22 fw-bold bcolor-succes c-w">
          </form>
           </div>
               
        </div>
       </div> 
    </div>   
       
       
       
     <?php require('menu-movil.php'); ?>
     <?php require_once('footer.php'); ?>
</body>
</html>