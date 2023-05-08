<?php
    require_once('header.php');

    if($_SESSION['estado_session'] == 1)header('Location: http://localhost/elremanso/index.php');


?>
         <div class="bcolor-three">
            <div class="container">
               <div class="xs-twelve xl-twelve">
                     <p class="f-20 c-w light">estas en: <span class="bold c-w"> MI Perfil</span></p>
                </div>
            </div>
        </div>
    </header>
      
     
          <div class="xs-headerfalso-xl xl-headerFalso xs-mb-20"></div>
          <section class="container pt-50 xs-p-15">
              <asaid class="xs-twelve xl-six bcolor-two">
                  <h2 class="f-30 ">Mi Perfil</h2>
                  </br>
                    <?php
                        $query_perfil = "SELECT * FROM `usuario` WHERE `RE_id_usuario` = '$_SESSION[id_usuario]' ";
                        $resource_perfil = $conn->query($query_perfil);
                        if(isset($resource_perfil)){
                            while($row_perfil = $resource_perfil->fetch_assoc()){
                    ?>
                  <form id="datos_personales" action="" method="">
                         <p class="f-26 mb-20">Datos Personales</p>
                         <label for="" class="f-22 light">Nombre:</label>
                         <input type="text" name="nombre_usuario" class="f-22 light mb-20" value="<?php echo $row_perfil['RE_nombres_usuario']; ?>" disabled>

                         <label for="" class="f-22 light">Apellidos:</label>
                         <input type="text" name="apellidos_usuario" class="f-22 light mb-20" value="<?php echo $row_perfil['RE_apellido_paterno_usuario']." ". $row_perfil['RE_apellido_materno_usuario']; ?>" disabled>

                         <label for="" class="f-22 light">Fecha de Nacimiento:</label>
                         <input type="date" name="fecha_nacimiento" class="f-22 light mb-20" value="<?php echo $row_perfil['RE_fechaNacimiento_usuario']; ?>" disabled>

                         <label for="" class="f-22 light">E-mail:</label>
                         <input type="email" class="f-22 light mb-20" value="<?php echo $row_perfil['RE_nombres_usuario']; ?>" disabled>

                         <label for="" class="f-22 light">Contraseña:</label>
                         <input type="password" class="f-22 light mb-50" value="<?php echo $row_perfil['RE_nombres_usuario']; ?>" disabled> 
                          
                         <input class="bcolor-succes btn f-22 c-w" type="submit" value="Editar">
                  </form>

                  <form action="cerrar_sesion.php" method="post">
                        <input type="submit" name="close" value="cerrar_sesion">

                  </form>
              </asaid>
      
              <article class="xs-twelve xl-six height-100">
                  <h3 class="f-26 mb-20">Mis Direcciones de despacho</h3> 
                  <?php 
                                                                                 
                   $query_consulta_despacho = "SELECT * FROM `despacho` WHERE `RE_id_usuario` = '$_SESSION[id_usuario]'";  
                   $resource_consulta_despacho = $conn -> query($query_consulta_despacho);
                   $numero_colunas_despacho = $resource_consulta_despacho->num_rows;
                   if($numero_colunas_despacho != 0){
                        while($row_despacho_usuario = $resource_consulta_despacho->fetch_assoc()){
                  ?>
                  <form class="container  ">
                      <div action="" class="xs-twelve xl-eight">
                          <p class="f-26 mb-20">Mi Casa</p>
                                <label for="calle">Calle:</label>
                              <input name="calle" type="text" value="<?php echo $row_despacho_usuario['RE_calle']; ?>" class="f-22 light m-1b0" disabled>
                              <label for="numeracion">Numeración:</label>
                              <input name ="numeracion" type="text" value="<?php echo $row_despacho_usuario['RE_numeracion']; ?>" class="f-22 light mb-10" disabled>
                              <label for="departamento">Departamento:</label>
                              <input name="departamento" type="text" value="<?php echo $row_despacho_usuario['RE_departamento']; ?>" class="f-22 light mb-10" disabled>
                              <label for="comuna">Comuna:</label>
                              <input name="comuna" type="text" value="<?php echo $row_despacho_usuario['RE_comuna']; ?>" class="f-22 light mb-10" disabled>
                              <label for="region">Región:</label>
                              <input name="region" type="text" value="<?php echo $row_despacho_usuario['RE_region']; ?>" class="f-22 light mb-10" disabled>
                              <label for="receptor">Receptor:</label>
                              <input name="receptor" type="text" value="<?php echo $row_despacho_usuario['RE_receptor']; ?>" class="f-22 light mb-10" disabled>
                              <label for="numero_contacto">Número contacto::</label>
                              <input name="numero_contacto" type="text" value="<?php echo $row_despacho_usuario['RE_numero_contacto']; ?>" class="f-22 light mb-10" disabled>
                         </div>
                         <div class="xs-twelve xl-four height-100 d-flex j-j-c a-i-c ">
                             <img src="img/ico/delivery.svg" alt="SELECT FROM ">
                         </div>
                         
                         <div class="xs-twelve xl-twelve d-flex p-15">
                             <input type="text" value="Borrar" class="btn bcolor-denger f-22 c-w">
                             <input type="text" value="Editar" class="btn bcolor-succes f-22 c-w" >
                         </div>
                  </form>
                  
                  <?php
                  
                     }}else{

                    ?>
                <section class="container">
                        <div class="title xl-twelve">
                        
                        </div>
                        
                        <div class="xl-twelve">
                            <form id="ingreso_despacho" action="" method="" >
                                <label for="calle">calle:</label>
                                <input type="text" name ="calle" class="f-22 light m-1b0" required>
                                <label for="numeracion">Numeración:</label>
                                <input type="text" name ="numeracion" class="f-22 light m-1b0"required>
                                <label for="departamento">Departamento:</label>
                                <input type="text" name ="departamento" class="f-22 light m-1b0"required>
                                <label for="comuna">Comuna:</label>
                                <input type="text" name ="comuna" class="f-22 light m-1b0"required>
                                <label for="region">Región</label>
                                <input type="text" name ="region" class="f-22 light m-1b0"required>
                                <label for="numero_contacto">Número de contacto</label>
                                <input type="text" name ="numero_contacto" class="f-22 light m-1b0"required>
                                <label for="receptor">Receptor</label>
                                <input type="text" name ="receptor" class="f-22 light m-1b0"required>
                                <input type="hidden" name ="id_usuario" class="f-22 light m-1b0" value = "<?php echo $_SESSION['id_usuario'] ?>" required>
                                <input type="submit" name="guardar" value="Guardar" class="f-22 light m-1b0"required>
                            </form>

                        </div>   
                </section>
                    <?php
                   }                                                                
                  ?>
 
              </article>
          </section>
      
          <?php

                            }
                        }
        ?>
     
   
       
        
      <?php require('menu-movil.php'); ?>
      <?php require_once('footer.php'); ?>
</body>
</html>