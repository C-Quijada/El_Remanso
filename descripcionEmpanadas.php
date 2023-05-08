<?php include('header.php'); ?>
<?php include('menuMovil.php'); ?>
    <?php
        if(isset($_GET['id']) && $_GET['id'] !== 0 ){
            $queryDescription = "SELECT * FROM `productos` WHERE `RE_id_productos` = '$_GET[id]'";
            $resource = $conn->query($queryDescription); 
            $total = $resource->num_rows;
            $row = $resource->fetch_assoc();
        }
    ?>  
<div class="falsoHeader mb-50"></div>
   <section id="description">
      <article>
        
            <div>
                  <h2 class="text-left f-26 fw-bold c-principale mb-30">Empanada <?php echo "$row[RE_nombre_producto]"; ?> </h2>
                  <p class="f-22 fw-300">Exquisita empanada con
                 un relleno hecho con <?php echo "$row[RE_descripcion_producto]"; ?></p>
             </div>
              <span class="text-left f-22 ">$<?php echo "$row[RE_valor_producto]"; ?> CLP</span>
       
        
        </article>
        
         <article>
                          <img src="img/empanada-<?php echo "$row[RE_id_productos]";  ?>.png" alt="" width="100%">
                          <span class="f-18 fw-300">Foto obtenida del instagram <a href="https://www.instagram.com/elremansoempanadas/?hl=es"  target="_blank" rel="noopener noreferrer">@ELREMANSO</a></span>
        </article>
                        
          
      
      
        
     
              
       
        <article>
              <form  class="fm formDescription">
                        <input type="hidden" value="<?php echo $row['RE_nombre_producto']; ?>" name="maneProducto">
                        <input type="hidden" value="<?php echo $_SESSION['id_usuario'] ?>" name="idUsuario">
                        <input type="hidden" value="<?php echo $row['RE_id_productos']; ?>" name="idProducto">
                        <button class="abrirModalConfirm btn btn-success f-22 fw-bold">Agregar</button>
                       </form>
        
          
      </article>
   </section>
   <section id="nuetrasEmpanadas" class="container">
    
            <h3 class="mb-30 f-26 fw-bold">Nuestrras empanadas</h3>
 
       
        <?php
            //comenzamos obteniendo los productos de nuestra bd
            $queryIcon = " SELECT * FROM productos";
            $resourceIcon = $conn->query($queryIcon); 
            $totalIcon = $resourceIcon->num_rows;
             while ($rowIcon = $resourceIcon->fetch_assoc()){
        ?>
        
        <a class="icono" href="descripcionEmpanadas.php?id=<?php echo $rowIcon['RE_id_productos']; ?>">
            <img src="img/ico/icoEmpa-<?php echo $rowIcon['RE_id_productos']; ?>.svg" alt="" >
            <p class="f-22 c-principal text-center"><?php echo $rowIcon['RE_nombre_producto']; ?></p>
        </a>
         <?php
        }
    ?>
   
    
    
    
   
    </section>
    
     <div id="modalConfirm">
       <div id="wrapConfirm">
        <div id="headerConfirm">
                <h5>¿Deseas agregar <span id="nombreP"></span> esta cantidad ?</h5>
        </div>
        <div id="confirmInfo">
          <form id="agregarCarroForm" action="agregandoAlCarrito.php" method="post" >
                       
            <div id="agregarCarro">
                <input type="number" name="cantidadProducto" class="cantidadProducto f-22" placeholder="¿cuantas quieres comprar? " value="1">
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