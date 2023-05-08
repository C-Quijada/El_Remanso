<?php require_once('header.php'); ?>
         <div class="bcolor-three">
            <div class="container">
               <div class="xs-twelve xl-twelve">
                     <p class="f-20 c-w light">estas en: <span class="bold c-w">Empanadas</span></p>
                </div>
            </div>
        </div>
    </header>
    <div class="xs-headerfalso-xl xl-headerFalso"></div>
     <section id="portadaEmpanadas" class="container  xs-h-300 xl-h-400">
           <div class="xl-twelve xs-twelve d-flex flex-direction-column">
                <img src="img/elremanso.svg" alt="logo portada el remanso"  class="mb-30 xl-w-400 xs-w-250">
                <h2 class="f-30 text-center c-w italic">Las mejores empanadas de la zona sur de Santiago</h2>
           </div>
    </section>
        <section class="container pt-50 xs-mb-50">
        <div class="xs-twelve xl-twelve">
            <h2 class="f-26 fw-bold text-center mb-30">Nuestras empanadas</h2>
        </div>
        <?php 
            $query = "SELECT * FROM productos";
            $resource = $conn->query($query);
            $total = $resource->num_rows;
            while ($row = $resource->fetch_assoc()){
        ?>
        <article class="xs-six xl-four mb-30">
            <a href="descriptor_empanadas.php?id=<?php echo $row['RE_id_productos']; ?>"><img src="img/empanada-<?php echo $row['RE_id_productos'];  ?>.png" alt="<?php echo $row['RE_descripcion_producto'];  ?>" width="100%"></a>
            <p class="f-22 text-right text-left"><?php echo $row['RE_nombre_producto']; ?></p>
        </article>
          <?php 
            if( $row['RE_id_productos']== 9) {
                echo "<div class='xs-twelve xl-twelve mb-30'>
                 <h3 class='text-center f-22 bold'>EMPANADAS SOLO <span>SABADOS</span> Y <SPAN>DOMINGOS</SPAN></h3></div>
               "; 
            }     
        ?>
        <?php
         }
        ?>

        </section>
    
        <section class="bcolor-two xs-mb-50">
            <article class="container ">
                <div class="xs-twelve xl-five  d-flex a-i-fe">
                    <img src="img/img-descriptor.svg" height="250px" alt="">
                </div>
                <div class="xs-twelve xl-seven xs-text-center">
                    <h6 class="f-26 mb-30">descriptor de empanadas</h6>
                    <p class="f-22 italic mb-30">Ahora puedes decargar nuestro descriptor de empanadas desde tu smartphone</p>
                    <a href="img/ico/descriptorEmpanadas.png" class="btn btn-nav bcolor-succes c-w f-22" download>Descargar</a>
                </div>
            </article>
        </section>
    
    

     <?php require('menu-movil.php'); ?>
     <?php require_once('footer.php'); ?>
         
</body>
</html>