<?php 
    include('sql.php');
    if(isset($_POST['id_boleta']) ){
        
        $queryDelete="DELETE FROM `carro_de_compras` WHERE `carro_de_compras`.`RE_id_boleta` = $_POST[id_boleta]";
        
        $resourceBorrar = $conn->query($queryDelete);
        
        if(isset($resourceBorrar)){
           echo "elemento borrado";
         
        }else{
            echo "no se borron na";
        }
        
    }



?>