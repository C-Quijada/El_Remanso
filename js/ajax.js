//evitamos que se envia los datos si no hay cantidad
$('#agregarCarroForm').on('submit', function(e){
    e.preventDefault(); 
    var datos = $(this).serialize();
    console.log(datos);
    var esteNumero = parseInt($(this).find('.cantidadProducto').val());
    console.log(esteNumero);
     if(esteNumero <= 0){
         e.preventDefault(); 
         alert('la cantidad no puede ser menor o igual a 0');  
     }else {
         var contador = parseInt($('#shoppCont').html());
         console.log(contador);
         //ajax
         $.ajax({
         type: "post",
         url: 'agregar_carro.php',
         data: datos,
         success: function(resource){
                
                 contador = (contador + esteNumero);
                
                 $("#modalConfirm").fadeOut(); 
                 $("#agregarCarro").html("<input class='cantidadProducto f-22' type='number' name='cantidadProducto'");
                 $('#shoppCont').toggleClass("animate__animated");
                 $('#shoppCont').toggleClass("animate__heartBeat");
                 $('#shoppCont').html(contador);
                 var aguacate = $("#shopp").css('display');
                 if (aguacate == "none"){
                     $('#shopp').css('display' , 'flex');
                 }

                 $('#cantidad').parents('a').removeClass('xs-disable');
                 $('#cantidad').html(contador);
             }
         }); 
     }        
     });
//borr ando elementos del carro de compra
//////////////////////////////
//////////////////////////////
$('.delete').on('submit', function(e){
    e.preventDefault();
    var elemento_a_eliminar= $(this).parents('article');

 var datos_delete = $(this).serialize();
 console.log(datos_delete);
 $.ajax({
     type: "post",
     url: 'borrar.php',
     data: datos_delete,
     success: function(r){
           $(location).attr('href','http://localhost/elremanso/carro.php');

     }
 })
 e.preventDefault();
  });
  
 //------------------------------------------------------------------------------
//-------------------------------------------------------------------------------

 //------------------------------------------------------------------------------
//-------------------------------------------------------------------------------


$('#registrar_usuario').on('submit', function(e){
    e.preventDefault();
    var ingreso_usuario = $(this).serialize();
 

 $.ajax({
     type: 'post',
     url: 'registro_usuario.php',
     data: ingreso_usuario,
     success: function(r){
         console.log('registro hecho, siguiente');
         $('#registrar_usuario').addClass('xs-disable xl-disable');
         $('#ingresar_facturacion').removeClass('xs-disable xl-disable');
     }
 })
 e.preventDefault();
  });
  
  $('#ingresar_facturacion').on('submit', function(e){
    e.preventDefault();
    var ingresar_facturacion = $(this).serialize();

 $.ajax({
     type: "post",
     url: 'registro_usuario.php',
     data: ingresar_facturacion,
     success: function(r){
         console.log('registro hecho, siguiente');
         $('#ingresar_facturacion').addClass('xs-disable xl-disable');
         $('#ingresar_despacho').removeClass('xs-disable xl-disable');
     }
 })
 e.preventDefault();
  })

  $('#ingresar_despacho').on('submit', function(e){
    e.preventDefault();
    var ingresar_despacho = $(this).serialize();

 $.ajax({
     type: "post",
     url: 'registro_usuario.php',
     data: ingresar_despacho,
     success: function(r){
         Headers('Location: http://localhost/elremanso/registrar.php');
        
     }
 })
 e.preventDefault();
  })




  ////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////CONOCENOS///////////////////////////////////////
 
  $('#ingreso_despacho').on('submit', function(e){
    e.preventDefault();
    let ingreso_despacho = $(this).serialize();
 $.ajax({
     type: "post",
     url: 'ingreso_despacho_user.php',
     data: ingreso_despacho,
     success: function(r){
         console.log(r);
        if(r == "exito"){
            console.log("si");
            Headers('Location: http://localhost/elremanso/mi_perfil.php');
        }else{
            console.log("no");
        }
        
     }
 })
 e.preventDefault();
  })


