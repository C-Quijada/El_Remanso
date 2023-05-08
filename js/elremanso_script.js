$(document).ready(function(){


    destacarNav();

    var shop = parseInt($('#shoppCont').html());

    if(shop > 0 ){
        $('#shopp').css('display' , 'flex');
    }else{
        $('#shopp').css('display' , 'none');

    }

       $('#btn-menu').click(function(){
           
           $("#menu-movil").fadeIn();
           $("#menu-movil").css("display" , "flex");
       });
    $('#cerrar').click(function(){
           
           $("#menu-movil").fadeOut();
       });
    $('.abrirModalConfirm').click(function(){
        var formulario = $(this).parent('form').html();
        $("#agregarCarro").append(formulario); 
        $("#agregarCarro").find('.abrirModalConfirm').css('display' , 'none');
        event.preventDefault();
        event.stopPropagation();
        $("#modalConfirm").fadeIn();
        $("#modalConfirm").css('display' , 'flex');
    });
    
    $('#cerrarConfirm').click(function(event){
            $("#modalConfirm").fadeOut();
            event.preventDefault();
    });
    
    
    $('.icono').hover(
        function(){
         
            var imgIcono = $('img',this).attr('src');
            var str =imgIcono.replace("icoEmpa" ,"icoEmpo");
            $('img',this).attr('src', str);
            
            
            
            
        }, function(){ 
            var imgIcono = $('img',this).attr('src');
            var str =imgIcono.replace("icoEmpo" ,"icoEmpa");
            $('img',this).attr('src', str);
        } 
        
      );
    
    
    
    
    $('.xl-galeria div').on("click" , function(){
        var imgG = $(this).html();
      
      
        
        $('.modal-galeria').fadeIn();
        
        $(".modal-galeria .container-galeria").html(imgG);
        
        
         $('.modal-galeria').on("click" , function( ){
              
               $(".modal-galeria").fadeOut();
         })
    
        
    });




    if($('#cantidad').html() == 0){
       
    }else{
        
        $('#cantidad').parents('a').removeClass('xs-disable');
    }



        
});


function ubicacion(){
    let URLactual = window.location.href;
    let u = URLactual.split('/');
    return u[u.length -1];
}

function destacarNav(){
    let ubi = ubicacion();
    if(ubi == "index.php"){
        $("[href]").removeClass('black');
        $("[href='index.php']").addClass('black');
        
    }else if(ubi == "empanadas.php"){
        $("[href]").removeClass('black');
        $("[href='empanadas.php']").addClass('black');

    }else if(ubi == "conocenos.php"){
        $("[href]").removeClass('black');
        $("[href='conocenos.php']").addClass('black');

    }else if(ubi == "contactanos.php"){
            $("[href]").removeClass('black');
            $("[href='contactanos.php']").addClass('black');
    
    }else if(ubi == "perfil.php"){
        $("[href]").removeClass('black');
        $("[href='perfil.php']").addClass('black');

    }else if(ubi == "carro.php"){
        $("[href]").removeClass('black');
        $("[href='carro.php']").addClass('black');

    }else if(ubi == "mi_perfil.php"){
        $("[href]").removeClass('black');
        $("[href='mi_perfil.php']").addClass('black');
    }
    
}
    
    