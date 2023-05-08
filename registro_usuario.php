<?php 
require_once('sql.php');
if(isset($_POST['nombre_registro'])  && $_POST['nombre_registro'] != " " ){
       
        
       $email_registro = $_POST['email'];

       $query_consulta_registro= "SELECT * FROM `usuario` WHERE `RE_email_usuario` = '$email_registro'";

       $resource_cosnulta_registro= $conn-> query($query_consulta_registro);

       $row_consulta_respuesta= $resource_cosnulta_registro->fetch_assoc();

       if(empty($row_consulta_respuesta)){
           echo "si esta vacio";
           $query_insert_usuario="INSERT INTO `usuario`
            (`RE_id_usuario`,
            `RE_nombres_usuario`, 
            `RE_apellido_materno_usuario`, 
            `RE_apellido_paterno_usuario`, 
            `RE_fechaNacimiento_usuario`, 
            `RE_email_usuario`, 
            `RE_password_usuario`) VALUES 
            (NULL, 
            '$_POST[nombre_registro]', 
            '$_POST[apellido_materno]', 
            '$_POST[apellido_paterno]', 
            '$_POST[fecha_nacimiento]', 
            '$_POST[email]', 
            '$_POST[password]')";

           echo $query_insert_usuario;
           $resource_insert_usuario = $conn-> query($query_insert_usuario);
           if($resource_insert_usuario === FALSE){
               echo"error en el ingreso"; 
           }else{
               
               echo "ingreso con exito";
}
       }else{
           echo "no esta vacio";
       }
   }
