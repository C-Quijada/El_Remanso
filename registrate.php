<?php include('header.php'); ?>
<?php include('menuMovil.php'); ?>
       <?php
/* veremos si el el Email ingrsado ya se encuentra registrado*/

if(isset($_GET['registrar']) && $_GET['registrar'] == 'registrar'){
    
    
    $correo = $_GET['email'];
    $query = " SELECT * FROM `usuario` WHERE `RE_email_usuario` LIKE '$correo'";
    $resource = $conn->query($query); 
    $total = $resource->num_rows;
    echo "</br> </br> </br> <p> ";
    print_r($total);
    echo "</p> ";
     if($total){
        // aqui hay que realizar el registro del formulario. 
        //despues de esto debo ver el carro de compra 
        //terminando con los detalles de compra. 
         echo "<div class='alert alert-danger' role='alert'>
                       este correo ya se encuentra registrado, intentalo con otro
              </div>";
        
     } else {
         $password = password_hash($_POST['repCont'] , PASSWORD_DEFAULT);
         $queryUsuario="INSERT INTO `el_remanso`.`usuario` (
        `RE_id_usuario` ,
        `RE_nombres_usuario` ,
        `RE_apellido_materno_usuario` ,
        `RE_apellido_paterno_usuario` ,
        `RE_fechaNacimiento_usuario` ,
        `RE_email_usuario` ,
        `RE_password_usuario`
        )
        VALUES (NULL,
        '$_GET[nombre]',
        '$_GET[apellidoMaterno]',
        '$_GET[apellidoPaterno]',
        '$_GET[fechaNacimiento]',
        '$_GET[email]',
        '$_GET[repCont]')";
         $conn->query($queryUsuario);
         $ID=$conn->insert_id;
        
         if($ID){
             header("Location:registro.php?insert=si");
         }
     }
} else {
    
    echo ("no se pudo");
    
}
?>
   <div class="falsoHeader"></div>
   <section class="container mb-100">
       <form action="#" class="registrar" method="get">
           <div class="datosPersonales">
               <h1 class="f-26 fw-bold mb-50">Registrate</h1>
               
               <input type="text" placeholder="Nombre" name="nombre" required>
               <input type="text" placeholder="Apellido materno" name="apellidoMaterno" required>
               <input type="text" placeholder="Apellido paterno" name="apellidoPaterno" required>
               <input type="date"  name="fechaNacimiento" class="c-dg" required>
               
               <select name="genero" id="genero">
                  <option value="femenino">Femenino</option>
                  <option value="masculido">Maculinoo</option>
                </select>
               <input type="email" placeholder="E-mail" name="email" required>
               <input type="password" placeholder="contraseña" id="pass" required>
               <input type="password" placeholder="Repetir contraseña" name="repCont" id="repPass" required>
               
           </div>
           <div class="datosFacturacion">
              <h2 class="f-26 fw-bold mb-50 text-left">Datos de facturación</h2>
               
               <input type="text" placeholder="Dirección" name="direccion" required>
               <input type="text" placeholder="numeración" name="numeracion" required>
               <input type="text" placeholder="departamento" name="departamento" required> 
               <input type="text" placeholder="Comuna" name="comuna" required>
               <input type="text" placeholder="Región" name="region" required>
               <input type="submit" name="registrar" class="btn bg-success c-w" value="registrar">
           </div>
           <!--
           <div class="despacho">
              <h3 class="f-26 fw-bold text-left mb-50">Datos de facturación</h3>
               <input type="text" placeholder="Dirección " name="direccionFacturacion" required>
               <input type="text" placeholder="Numeración " name="numeracionFacturacion" required>
               <input type="text" placeholder="Departamento " name="departamentoFacturacion" required>
               <input type="text" placeholder="Comuna" name="comunaFacturacion" required>
               <input type="text" placeholder="Región" name="regionFacturacion" required>
               
           </div>
            -->
       </form>
   </section>
      
   
   
    <div class="alert alert-danger d-none" role="alert" id="alertR0. egistrate">
      debes completar todos los campos
    </div>
    

 
<?php include('footer.php'); ?>