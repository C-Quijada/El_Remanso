<?php
    require_once('header.php');
?>
         <div class="bcolor-three">
            <div class="container">
               <div class="xs-twelve xl-twelve">
                     <p class="f-20 c-w light">estas en: <span class="bold c-w"> Contactanos</span></p>
                </div>
            </div>
        </div>
    </header>

    <div class="headerfalso">
        
    </div>
      
      <section id="portadaConocenos" class="container ">
           <div class="xl-six xs-disble ">
               
           </div>
           <div class="xl-six xs-twelve d-flex flex-direction-column">
               <img src="img/elremanso.svg" alt="logo portada el remanso" width="50%" class="mb-30">
               
               
               <h2 class="f-30 text-center c-w fw-bold">Las mejores empanadas de la zona sur de Santiago</h2>
           </div>
        </section>
        
        <section class="container xs-p-15 ">
            <div class="xs-twelve xl-six height-100">
                <h3 class="f-30 bold mb-20">Contáctanos</h3>
                <p class="f-22 light mb-20">Si tienes dudas, reclamos o sugerencias solo escríbenos, te reponderemos a la brevedad.</p>
                <p class="f-22 light">Gracias por confiar en nosotros.</p>
            </div>
            <div class="xs-twelve xl-six ">
                <form id="formulario_contacto" action="formulario_contacto.php" method="post" class="d-flex flex-direction-column">
               

                       <label for="email" class="f-22 light">E-mail:</label>
                        <input type="email" name="email" class="f-22">
                        <label for="nombre" class="f-22 light">Nombre:</label>
                        <input type="text" name="nombre" class="f-22">
              
                        <label for="mensaje" class="f-22 light">Escribenos:</label>
                        <textarea name="mensaje" id="" cols="30" rows="10"></textarea>
                        <input type="submit" class="btn-large f-22 c-w bcolor-succes" value="Enviar" name="enviar">
             
                </form>
            </div>
        </section>
        
        <section id="visitanos" class="container xs-p-15">
           <div class="xs-twelve xl-twelve">
               <h4 class="f-30">Estamos ubicados en: </h4>
           </div>
            <div class="xs-twelve xl-nine mb-50">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2352.0016183818784!2d-70.55869103742417!3d-33.521337969190725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d108fe0ea9c1%3A0x7d9e6c58013761a3!2sEmpanadas%20El%20Remanso!5e0!3m2!1ses!2scl!4v1590267881122!5m2!1ses!2scl"  frameborder="0" style="border:0; width:100%; height:300px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="xs-twelve xl-three height-100 ">
                <p class="f-26 bold mb-20">Andalien 7330, La Florida, Santiago, Chile.</p>
                <p class="f-22 light">Atendemos de Martes a viernes de 10:00 a 19:00 Hrs.
                Sábados, domingos y festivos de 09:00 a 19:00 Hrs. </p>
            </div>
        </section>
       
     <?php require('menu-movil.php'); ?>
     <?php require_once('footer.php'); ?>
</body>
</html>