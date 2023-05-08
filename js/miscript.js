$(document).ready(function(){
    $(window).on('scroll', function(){
        headerhg();
    });
//funcionbes del menu de navegacion movil
    $('#abrir').click(function(){
        abrir();
    });
    $('#cerrar').click(function(){
        cerrar();
    });
    
    
    //ebriendp la ventana de confirmación
    
    $('.abrirModalConfirm').click(function(){
        var formulario = $(this).parent('form').html();
        $("#agregarCarro").html(formulario); $("#agregarCarro").find('.abrirModalConfirm').css('display' , 'none');
        $('#agregarCarro input[name=cantidadProducto]').attr('type','number');

        event.preventDefault();
        event.stopPropagation();
        $("#modalConfirm").fadeIn();
        $("#modalConfirm").css('display' , 'flex');
    });
    
    $('#cerrarConfirm').click(function(event){
            $("#modalConfirm").fadeOut();
            event.preventDefault();
    });
    
    contadorCarroCompras();
    
    
//agregar o quitar productos 
//carro de compra
    
    $('.mas').click(function(){
        
        var cant=parseInt($(this).siblings('.cantidaddd').html());
        console.log(cant);
    });
    
    $('.menos').click(function(){
        
        var cant= parseInt($(this).siblings('.cantidaddd').html());
        console.log(cant);
        
        if(cant == 1){
            console.log('es uno');
        } else{
             console.log('No es uno');
        }
    });
    
    $('.icono').hover(
        function(){
            $(this).css("backgroundColor" , "rgba( 30,23,27,100)");
            var imgIcono = $('img',this).attr('src');
            var str =imgIcono.replace("icoEmpa" ,"icoEmpo");
            $('img',this).attr('src', str);
             $('p',this).css("color" , "white");
            
            
            
        }, function(){ 
            $(this).css("backgroundColor" , "rgba(0,0,0,0)"); 
            var imgIcono = $('img',this).attr('src');
            var imgIcono = $('img',this).attr('src');
            var str =imgIcono.replace("icoEmpo" ,"icoEmpa");
            $('img',this).attr('src', str);
             $('p',this).css("color" , "rgba( 30,23,27,100)");
        }
                     
    );
    
    
    
    
    
    //proceso de compra EN CARRO DE COMPRA 
    //formulario de despacho
    $('#datosDespacho').on('submit' , function(event){
        var formularioDespacho = $(this).val();
        
        //obtenemos los valores del formulario
        var direccionDespacho = $('input[name=direccionDespacho]' , this).val();
        var numeracionDespacho = $('input[name=numeracionDespacho]', this ).val();
        var departamentoDespacho = $('input[name=departamentoDespacho]', this).val();
        var comunaDespacho = $('input[name=comunaDespacho]', this).val();
        
        
        //reubicamos los valores del formulario
        $('#pagar input[name=direccionDespacho]').val(direccionDespacho);
        $('#pagar input[name=numeracionDespacho]').val(numeracionDespacho);
        $('#pagar input[name=departamentoDespacho]').val(departamentoDespacho);
        $('#pagar input[name=comunaDespacho]').val(comunaDespacho);
        
        
         //desactivar el botton
         $('.guardar' , this).attr("disabled","disabled");
        
        
        //activar el botron comprar
        if($('.guardar', this).attr('disabled') == "disabled" && $('#datosFacturacion .guardar').attr('disabled') == "disabled" ){
            console.log("si");
            $('#pagar input[name=comprar]').removeAttr("disabled");
        }else {
            console.log("no");
            
        }
        
       
        event.preventDefault();
    });
    
    
    //forrmulario de facturacion
    $('#datosFacturacion').on('submit' , function(event){
        var formularioDespacho = $(this).html();
        
        var nombreFacturacion = $('input[name=nombreFacturacion]').val();
        var apellidosFacturacion = $('input[name=apellidosFacturacion]').val();
        var emailFacturacion = $('input[name=emailFacturacion]').val();
        var direccionFacturacion = $('input[name=direccionFacturacion]').val();
        var comunaFacturacion = $('input[name=comunaFacturacion]').val();
        
        
          //reubicamos los valores del formulario
        $('#pagar input[name=nombreFacturacion]').val(nombreFacturacion);
        $('#pagar input[name=apellidosFacturacion]').val(apellidosFacturacion);
        $('#pagar input[name=emailFacturacion]').val(emailFacturacion);
        $('#pagar input[name=comunaFacturacion]').val(comunaFacturacion);
         
        //desactivar el botton
        $('.guardar' , this).attr("disabled","disabled");
        
        //abilitando el boton comprar
        if($('.guardar', this).attr('disabled') == "disabled" && $('#datosDespacho .guardar').attr('disabled') == "disabled" ){
            console.log("si");
            $('#pagar input[name=comprar]').removeAttr("disabled");
        }else {
            console.log("no");
            
        }
        
        event.preventDefault();
        
        
      
    });
    
    // el boton comprar debe iniciar desactivado
    
    
    
    
    //formulario de registro
    
  $('#repPass').keyup(function(){
      var password = $("#pass").val();
      var repPass= $("#repPass").val();
      
      if(repPass === password ){
          $("#repPass").css("border-bottom" , "1px solid green");
      } else{
          $("#repPass").css("border-bottom" , "1px solid red");
          console.log(password +'<br>' +repPass );
      }
      
      
  });
    
    
    

    
    
    $('.visitanos article').on("click" , function(){
        var imgG = $(this).html();
      
        console.log(imgG );
        
        $('.modalImg').fadeIn();
        
        $(".modalImg .container").html(imgG);
        
        
         $('.modalImg').on("click" , function( ){
              
               $(".modalImg").fadeOut();
         })
    
        
    })
    
    
    
    //modificacion productos carro de compras
    

    
    
    
    
    
    
    
    
    
    
    
    
   
    
    });

    
    

    /*funciones ----------------------------------------------------------*/
 // redimencionado del header
        function headerhg(){
            
            var ancho = screen.width;

            if (ancho > 320){
                
                $('header #shopp').css({'height' : '60px',
                                        'width' : '60px'});
                
            } else {
                
                $('header #shopp').css({'height' : '80px',
                                        'width' : '80px',
                                        'padding' : '5px'});
            }
            var scrollLeft = $(window).scrollLeft();
            var scrollTop = $(window).scrollTop();
            var firstSection = $('#firstSection'); 
              if(scrollTop > 80 ) {
//header
                $('header').css({'height' : '75px',
                                 'padding' : '5px'});
//logo remanso 
                $('header img').css({'height' : '100px',
                                     'width' : '100px'});
//carro compra
                $('header #shopp img').css({'height' : '25px',
                                     'width' : '25px'});
                $('header #shoppCont').css({
                                    'height' : '23px',
                                    'width' : '23px',
                                    'right' : '-14px',
                                    'bottom' : '-14px'});
                
              }else{
//logo remanso
                  $('header').css({'height' : '100px',
                                   'padding' : '10px'});
//carro compra
                  $('header img').css({'height' : '150px',
                                       'width' : '150px'});
//carro compra
                 
                
                $('header #shopp a img').css({'height' : '30px',
                                     'width' : '30px'});
                $('header #shoppCont').css({
                                     'height' : '28px',
                                     'width' : '28px',
                                    'right' : '-14px',
                                    'bottom' : '-14px'
                                        });
              }
        }
    //---------------------------------------------------------------------------------------
    //abrir menu navegacion
        function abrir(){
            $("#menu").fadeIn();
        }
        
        function cerrar(){
            $("#menu").fadeOut();
        }
    /*----------------------------------------------------------------*/
    
     
    
    /*---------------------------------------------------------------------------------------*/
    //esta seccion del codigo nos ayudara a obtener la cantidad de productos que tenemos
    //en el carro de compra
    /*---------------------------------------------------------------------------------------*/

    function contadorCarroCompras() {
         var carroComprasCont = parseInt($('#shoppCont').html());
            console.log(carroComprasCont);
        
        if(carroComprasCont >= 1 ){
            
             $('#shopp').css('display' , 'flex');
            
        }
        
        
       
    };



    

