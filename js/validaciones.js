$('#formularioLogin').on('submit', function(event){
        var emailLogin, passwordLogin;
    
        emailLogin = $('#emailLogin').val();
        passwordLogin = $('#passwordLogin').val();
    
        if(emailLogin === "" ||passwordLogin === "" ) {
            console.log('falta un campo');
            event.preventDefault();
           event.stopPropagation();
           alert("formulario detenido");
        } else {
            console.log('si lo hay'+ emailLogin);
            if(emailLogin.length  > 30 && passwordLogin.length  > 30 ){
            alert('no cumple con los parametros establesidos');
                  event.preventDefault();
                  event.stopPropagation();
                  alert("formulario detenido");
            }
        }  
});

$('#nombreRegistro').change(function(){
    if($('#nombreRegistro').val().length < 4){
        $('#nombreHelp').html("debe tener como minimo 5 caracteres ");
    } else {
        $('#nombreHelp').fadeOut();
    }
    
});
$('#apellidoPaterno').change(function(){
    if($('#apellidoPaterno').val().length < 4){
        $('#apellidoPaterno').focus();
        $('#apellidoPHelp').html("debe tener como minimo 5 caracteres ");
    } else {
        $('#apellidoPHelp').fadeOut();
    }
    
});
$('#apellidoMaterno').change(function(){
    if($('#apellidoMaterno').val().length < 4){
        $('#apellidoMHelp').html("debe tener como minimo 5 caracteres ");
    } else {
        $('#apellidoMHelp').fadeOut();
    }
});
$('#repetirEmail').change(function(){
    if($('#repetirEmail').val() !== $('#emailRegistro').val()){
        $('#emaillHelp').html("los correos no coinciden");
        $('#emailRegistro').css({"border-color" : "#dc3545",
                               "box-shadow" : "0 0 0 0.2rem rgba(220, 53, 69, 0.25)"});
        $('#repetirEmail').css({"border-color" : "#dc3545",
                               "box-shadow" : "0 0 0 0.2rem rgba(220, 53, 69, 0.25)"});      
        event.preventDefault();
        event.stopPropagation();
    } else {
        $('#emailRegistro').css({"border-color" : "#28a745",
                               "box-shadow" : "0 0 0 0.2rem rgba(40, 167, 69, 0.25)"}); 
        $('#repetirEmail').css({"border-color" : "#28a745",
                               "box-shadow" : "0 0 0 0.2rem rgba(40, 167, 69, 0.25)"});
        $('#emailHelp').fadeOut();
    }
});


$('#passwordRegistro').change(function(){
    if($('#passwordRegistro').val().length < 5){
         $('#passwordlHelp').html("debe tener al menos 6 caracteres");
        $('#passwordRegistro').css({"border-color" : "#dc3545",
                               "box-shadow" : "0 0 0 0.2rem rgba(220, 53, 69, 0.25)"});
    } else {
        $('#passwordRegistro').css({"border-color" : "#28a745",
                               "box-shadow" : "0 0 0 0.2rem rgba(40, 167, 69, 0.25)"});
        $('#passwordlHelp').fadeOut();
    }
});

$('#repetPasswordRegistro').change(function(){
    if($('#repetPasswordRegistro').val() !== $('#passwordRegistro').val()){
        $('#repeatPasswordlHelp').html("los correos no coinciden");
        $('#passwordRegistro').css({"border-color" : "#dc3545",
                               "box-shadow" : "0 0 0 0.2rem rgba(220, 53, 69, 0.25)"});
        $('#repetPasswordRegistro').css({"border-color" : "#dc3545",
                               "box-shadow" : "0 0 0 0.2rem rgba(220, 53, 69, 0.25)"});      
        event.preventDefault();
        event.stopPropagation();
    } else {
        $('#passwordRegistro').css({"border-color" : "#28a745",
                               "box-shadow" : "0 0 0 0.2rem rgba(40, 167, 69, 0.25)"}); 
        $('#repetPasswordRegistro').css({"border-color" : "#28a745",
                               "box-shadow" : "0 0 0 0.2rem rgba(40, 167, 69, 0.25)"});
        $('#repeatPasswordlHelp').fadeOut();
    }
});


























