<?php
    require('sql.php');
    if(isset($_POST) && $_POST != " "){
        $query_verificacion_despacho = SELECT * FROM `despacho` WHERE `RE_id_usuario` =  '$_POST[id_usuario]';
        $resource_verificacion_despacho = $conn-> query($query_verificacion_despacho);
        $numero_direcciones_ingresadas = $resource_verificacion_despacho->num_rows();
        if($numero_direcciones_ingresadas == 0)
        {
            $query_despacho_insert= "INSERT INTO `despacho` (`RE_id_despacho`, `RE_calle`, `RE_numeracion`, `RE_departamento`, `RE_comuna`, `RE_region`, `RE_numero_contacto`, `RE_receptor`, `RE_id_usuario`) VALUES (NULL, '$_POST[calle]', '$_POST[numeracion]', '$_POST[departamento]', '$_POST[comuna]', '$_POST[region]', '$_POST[numero_contacto]', '$_POST[receptor]', '$_POST[id_usuario]')";
            $resource_despacho_insert= $conn-> query($query_despacho_insert);
            if($resource_despacho_insert === TRUE){
                echo "exito";
            }else{
                echo "fallido";
            }
            return TRUE;
        }else{
            return FALSE;
            echo "fallido";
        }
    }
?>