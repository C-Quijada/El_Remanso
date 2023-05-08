<?php
    require('sql.php');

     
    if(isset($_POST['cantidadProducto']) && $_POST['cantidadProducto'] != 0){
        //obteniendo los datos via post
        $idUsuario = $_POST['idUsuario']; 
        $idProducto = $_POST['idProducto']; 
        $cantidad = $_POST['cantidadProducto']; 
        $valor = 0;
        $query_valor = "SELECT * FROM `productos` WHERE `RE_id_productos` = '$idProducto'";
        $resource_valor= $conn->query($query_valor);
        $row_valor = $resource_valor-> fetch_assoc() ;
        if ($resource_valor === FALSE){
        echo "ERROR";
        }else{
            $valor = $row_valor['RE_valor_producto'];   
        }
        //verificamos si el producto que se desea agregar se encuentra ya en la base de datos.
        $queryVerificacion = "SELECT * FROM `carro_de_compras` WHERE `RE_id_usuario` = '$idUsuario' AND `RE_id_producto` = '$idProducto'";        
        echo $queryVerificacion;
        $resourceVerificacion= $conn->query($queryVerificacion);
        $verificacion =$resourceVerificacion->num_rows;

        echo "</br>".$verificacion;
        
        if($verificacion ==0){
            $query_isert= "INSERT INTO `carro_de_compras` (`RE_id_boleta`, `RE_id_usuario`, `RE_id_producto`, `RE_cantidad_producto`, `RE_valor_producto`) VALUES (NULL, '$idUsuario', '$idProducto', '$cantidad', '$valor')";
            echo $query_isert;
            $resource_insert= $conn->query($query_isert);
            if($resource_insert === FALSE){
                echo "error" ;
            }else{
                echo "insertado";
            }
        }else{
            $row_verificacion = $resourceVerificacion->fetch_assoc();
            echo $row_verificacion['RE_cantidad_producto'];
            $id_boleta=$row_verificacion['RE_id_boleta'];
            $cantidad = $cantidad + $row_verificacion['RE_cantidad_producto'];
            $query_update= "UPDATE `carro_de_compras` SET `RE_cantidad_producto` = '$cantidad' WHERE `carro_de_compras`.`RE_id_boleta` = '$id_boleta'";
            echo $query_update;
            $resource_update = $conn-> query($query_update);
            if($resource_update === FALSE){
                echo "ERROR";
            } else{
            echo "Actualizado";
            }
        }
        
       
       
    }

?>