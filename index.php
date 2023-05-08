<?php 
    require_once('header.php');
?>
</header>
   <div class="xl-headerfalsoindex xs-headerfalso"></div>
   <div class="bcolor-two">
         <section id="portadaIndex" class="container">
           <div class="xl-six xs-disable ">      
           </div>
           <div class="xl-six xs-twelve d-flex flex-direction-column">
               <img src="img/elremanso.svg" alt="logo de El Remanso" width="50%" class="mb-30">
               <h2 class="f-30 text-center c-w fw-bold">Las mejores empanadas de la zona sur de Santiago</h2>
           </div>
        </section>   
        <section class="container pt-50">
            <div class="xl-twelve xs-twelve ">
                <h3 class="f-30 text-center">¿Cómo comprar? </h3> 
            </div>
            <div class="xl-four xs-twelve h-300 d-flex flex-direction-column j-c-c">
                <img src="img/ico/carShoop.svg" height="120px" alt="carro de supermercado">
                 <p class="f-20 text-center color-one">Agrega al carro las empanadas que
        quieras</p>
            </div>
            <div class="xl-four xs-twelve h-300 d-flex flex-direction-column j-c-c a-i-s">
                <img src="img/ico/delivery.svg" alt="icono de un camion de delivery de El Remanso" height="120px" alt="camion de transporte">
                <p class="f-20 text-center color-one">Indícanos donde quieres que tu
        pedido sea enviado</p>
            </div>
            <div class="xl-four xs-twelve h-300 d-flex flex-direction-column j-c-c a-i-s">
                <img src="img/ico/entrega.svg" height="120px" alt="hombre entregando un paquete a otro" class="mb-30">
                <p class="f-20 text-center color-one">pidelas hoy y se entregará dentro de las 24 horas siguientes</p>
            </div>
        </section>
    </div>
        <section class="container pt-50">
            <div class="xl-twelve xs-twelve">
                <h4 class="f-26 color-one text-center">Nuestras Empanadas</h4>
            </div>
            
             <?php
        
        //comenzamos obteniendo los productos de nuestra bd
        $query = " SELECT * FROM productos";
        $resource = $conn->query($query); 
        $total = $resource->num_rows;
         while ($row = $resource->fetch_assoc()){
        ?>
        <article class="xl-three xs-six mb-50"> 
              <div class="img mb-20">
                  <a href="descriptor_empanadas.php?id=<?php echo $row['RE_id_productos']; ?>">
                  <img src="img/empanada-<?php echo $row['RE_id_productos']; ?>.png" alt="<?php echo $row['RE_descripcion_producto']; ?>" width="100%">
                  </a>
              </div>
              <div class="descripcion">
              
                     <p class="f-22 mb-10"><?php echo $row['RE_nombre_producto']; ?></p>
                     <p class="f-22 mb-10">$<?php echo $row['RE_valor_producto']; ?></p>
                     
                       <form  class="fm bcolor-proof-two" action="" method="">
                        <input type="hidden" value="<?php echo $row['RE_nombre_producto']; ?>" name="nombre_producto">
                        <input type="hidden" value="<?php echo $id_usuario; ?>" name="id_usuario">
                        <input type="hidden" value="<?php echo $row['RE_id_productos']; ?>" name="id_producto">
                        <button class="abrirModalConfirm btn f-22 fw-bold bcolor-succes c-w">Agregar</button>
                       </form>
        </div>
        </article>    
           <?php 
            if( $row['RE_id_productos']== 9) {
                echo "<h3 class='xl-twelve xs-twelve text-center f-26'>EMPANADAS SOLO <span>SABADOS</span> Y <SPAN>DOMINGOS</SPAN></h3>"; 
            }     
        ?>
        <?php 
        }
        ?>  
        </section>
        
        <div class="bcolor-two">
            <section class="container mb-50 pt-50">
            
                <article class="xl-six xl-h-total xs-twelve  xs-pt-20 xs-d-flex xs-flex-direction-column xs-a-i-c xs-mb-20">
                  
                        <h6 class="f-26 mb-30 xs-disable">Descriptor de empanadas</h6>
                        <p class="mb-20 f-22 italic xs-text-center ">Ahora puedes decargar nuestro descriptor de empandas directo a tu smartphone</p>
                        <a href="img/ico/descriptorEmpanadas.png" class="btn btn-nav bcolor-succes c-w f-22" download>Descargar</a>
                 
                </article>
                <article class="xl-six xs-twelve  d-flex xl-a-i-fe xs-colum-reversa ">
                    <img src="img/img-descriptor.svg" alt=" imagen descriptor de imagenes el remanso"  height="250px">
                </article>
            </section>
        </div>
        
        <section class="container ">
           <article class="xl-twelve xs-twelve">
               <p class="xl-disable f-26 bold xs-text-center ">Horarios de atencion</p>
           </article>
            <article class="xs-twelve xl-six d-flex xl-a-i-fe xs-j-c-c  xl-h-500 xs-h-300">
                <img src="img/ico/store.svg" alt="imagen de una tienda dibujada por cristian quijada, representa de manera ficticia el local el remanso" class="xs-h-300 xl-450">
            </article>
            <article class="xs-twelve xl-six d-flex j-c-c flex-direction-column">
               <p class="f-22 text-center italic xs-mb-20">Atendemos de Martes a Domingo de 10:00 a 20:00 horas, en horario continuo. </p>
                <a href="contactanos.php#visitanos" class=" bcolor-succes f-26 c-w  btn btn-nav xs-mb-20">Visitanos</a>
            </article>
        </section> 
    <div id="modalConfirm" class="">
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
            <button id="cerrarConfirm" class="btn bcolor-denger c-w f-22 ">Cancelar</button>
            <input id="agregar" type="submit" value="Agregar" name="agregar" class="btn f-22 fw-bold bcolor-succes c-w">
          </form>
           </div>
               
        </div>
       </div> 
    </div>   
      <?php 
            require('menu-movil.php'); 
            require_once('footer.php');
      ?> 