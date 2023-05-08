<?php
    require_once('header.php');

?>
         <div class="bcolor-three">
            <div class="container">
               <div class="xs-twelve xl-twelve">
                     <p class="f-20 c-w light">estas en: <span class="bold c-w"> Perfil</span></p>
                </div>
            </div>
        </div>
    </header>
      
      <section class="container pt-50">
         <div class="xs-twelve xl-twelve mb-50">
              <h2 class="f-30 text-center">Ingresar</h2>
         </div>
          <div class="xs-twelve xl-two"></div>
          <div class="xs-twelve xl-eight">
             <form action="login.php" method="post" class="form-50 border p-50" id ="login" >
                 <label for="" class="f-22 light">Email</label>
                 <input type="email" class="f-22 mb-50" name="email">
                 <label for="" class="f-22 light">Contraseña</label>
                 <input type="password" class="f-22 mb-50" name="password">
                 <input type="submit" class="btn f-22 c-w bcolor-succes mb-20" name="ingresar" value="ingresar">
                 <a href="" >Olvide mi contraseña</a>
             </form>
          </div>
          <div class="xs-twelve xl-two"></div>
      </section>
      <section class="container pt-50 mb-50">
          <div class="xs-twelve xl-twelve">
              <p class="f-22 bold text-center">Si aun no estas registrado</p>
          </div>
           <div class="xs-twelve xl-four"></div>
          <div class="xs-twelve xl-four mb-50">
              <a href="registrar.php" class="c-w link-nav btn-100 c-w bcolor-succes f-22 text-center">Registrar</a>
          </div>
           <div class="xs-twelve xl-four "></div>
      </section>
      
       
       
       
    <?php require('menu-movil.php'); ?>
    <?php require_once('footer.php'); ?>
</body>
</html>