<?php 
    include('sql.php');
    if(isset($_POST['id']) && isset($_POST['id_usser']) ){
        $queryDelete="DELETE FROM `carro_de_compras` WHERE `RE_id_usuario` = $_POST[id_usser] AND `RE_id_producto` = $_POST[id] " ;
        $resourceBorrar = $conn->query($queryDelete);
        if($resourceBorrar=== FALSE){
           echo "error";
        }else{
            header('http://localhost/elremanso/index.php');
        }
    }
?>