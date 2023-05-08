<?php
require_once('sql.php');


   if(isset($_POST['enviar']) && ($_POST['enviar']) == "Enviar"){
        print_r($_POST);

    //email

    $destinatario = "cristian.quijada.perez@gmail.com";
    $asunto = "correo de pruebas";
    $mensaje = $_POST['mensaje'];

    mail($destinatario, $asunto, $mensaje);


   };





?>