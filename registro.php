<?php 
    include('header.php');
    include('menuMovil.php');

    if(isset($_GET['insert'] ) && $_GET['insert'] == si ){
        
        
?>
 <section class="registroCompoletado">
     <h1>Gracias por registrarte</h1>

</section>  
       
<?php 
        
    }else {
        echo "no se pudo realizar el registro, intentelo mas tarde";
    }

?>

<?php include('footer.php'); ?>