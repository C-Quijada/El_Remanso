<?php
    require_once('header.php');


    
?>
         <div class="bcolor-three">
            <div class="container">
               <div class="xs-twelve xl-twelve">
                     <p class="f-20 c-w light">estas en: <a href="perfil.php" class="bold c-w link-nav">Perfil > </a><span class="c-w">Registrar</span></p>
                </div>
            </div>
        </div>
    </header>
    <div class="headerfalso"></div>
     <form id="registrar_usuario" action="" method="" class="container gap-15">
         <div class="xs-tewlve xl-twelve pt-50">
             <h2 class="f-30 mb-20 text-center">Registrate</h2>
         </div>
         <div class="xs-disable xl-two">
         </div>
         <div class="xs-twelve xl-eight height-100 ">
             <p class="f-26 mb-20">Datos Personales</p> 
             <label for="" class="f-22 light">Nombre:</label>
             <input name="nombre_registro" type="text" class="f-22 light mb-20"> 
             <label for="" class="f-22 light">Apellido paterno:</label>
             <input name="apellido_paterno" type="text" class="f-22 light mb-20">
             <label for="" class="f-22 light">Apellido materno:</label>
             <input name="apellido_materno" type="text" class="f-22 light mb-20">
             <label for="" class="f-22 light">Fecha de Nacimiento:</label>
             <input name="fecha_nacimiento" type="date" class="f-22 light mb-20">
             <label for="" class="f-22 light">E-mail:</label>
             <input name="email" type="email" class="f-22 light mb-20">
             <label for="" class="f-22 light">Contraseña:</label>
             <input name="password" type="password" class="f-22 light mb-20"> 
             <input type="submit" name="guardar_personal" value="guardar" class="btn bcolor-succes c-w f-22">
         </div>
         <div class="xs-disable xl-two">

         </div>
    </form>
    <form  id="ingresar_facturacion" action="" method="post" class="container xs-disable xl-disable">
        <div class="xs-disable xl-two">

        </div>
         <div class="xs-twelve xl-eight ">
             <p class="f-26 mb-20">Datos Facturación</p>
              <label for="" class="f-22 light">Dirección:</label>
             <input type="text" class="f-22 light mb-20"> 
             <label for="" class="f-22 light">Numeración:</label>
             <input type="text" class="f-22 light mb-20">
             <label for="" class="f-22 light">Comuna:</label>
             <input type="text" class="f-22 light mb-20">
             <label for="" class="f-22 light">Región:</label>
             <input type="text" class="f-22 light mb-30">
             <input type="submit" class="btn bcolor-succes c-w f-22" name="guardar_facturacion">
         </div>

         <div class="xs-disable xl-two">
            
        </div>

     </form>  


     <form action="" method="post" id="ingresar_despacho" class="container xs-disable xl-disable">
           <div class="xs-disable xl-two">
           </div>
           <div class="xs-twelve xl-eight">
           <p class="f-26 mb-20">Direcciones de despacho</p>
             
             <label for="" class="f-22 light">Dirección:</label>
            <input type="text" class="f-22 light mb-20">
            
            <label for="" class="f-22 light">Numeración:</label>
            <input type="text" class="f-22 light mb-20">
            
            <label for="" class="f-22 light">Comuna:</label>
            <input type="date" class="f-22 light mb-20">
            
            <label for="" class="f-22 light">Región:</label>
            <input type="text" class="f-22 light mb-20">
            <input type="submit" class="btn bcolor-succes c-w f-22">
            <input type="submit" name="registrar_despacho">   
        </div>
            <div class="xs-disable xl-two">
            </div>

     </form>
        
      <?php require('menu-movil.php'); ?>   
    <footer class="bcolor-one pt-50">
        <div class="container ">
        <article class="xs-twelve xl-seven mb-20">
            <img src="img/elremanso.svg" alt="logo el remanso Empnadas" width="400px">
            <p class="f-30 italic c-w">Desde 1993</p>
        </article>
        <article class="xs-twelve xl-five">
            <ul class="list-style-none">
                <li><a href="" class="f-20 c-w btn-nav light">#ElRemansoEmpanadas</a></li>
                <li><a href="" class="f-20 c-w btn-nav light">Andalien #7330, la florida, santiago</a></li>
                <li><a href="" class="f-20 c-w btn-nav light">+562 22852014</a></li>
                <li><a href="" class="f-22 c-w"></a></li>
            </ul>
        </article>
        </div>
        <div class="bcolor-three">
            <div class="container">
               <ul class="nav xs-twelve xl-twelve">
                    <li><a class="link-nav f-20 light c-w" href="index.php">Inicio</a></li>
                    <li><a class="link-nav f-20 c-w light" href="empanadas.php">Empanadas</a></li>
                    <li><a class="link-nav f-20 c-w light" href="conocenos.php">Conocenos</a></li>
                    <li><a class="link-nav f-20 c-w light" href="contactanos.php">Contactanos</a></li>
                    <li><a class="link-nav f-20 c-w black" href="perfil.php">Perfil</a></li>
                </ul>
            </div>
        </div>
        <div class="bcolor-one">
            <div class="container">
               <div class="xs-twelve xl-twelve">
                   <p class="text-center c-w">Copyright El Remanso 2020 ©. Sitio realizado por CQuijada</p>
               </div>
            </div>
        </div>
    </footer>
        
        <script src="js/jquery.js"></script>
        <script src="js/ajax.js" ></script>
        <script src="js/elremanso_script.js" ></script>
</body>
</html>