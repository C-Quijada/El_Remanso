    <?php
    
                           $query = " SELECT * FROM carro_de_compras";
                           $resource = $conn->query($query); 
                           $total = $resource->num_rows;
                           $totalEmpa = 0;
                               
                            if($total >= 1){
                                
                           while ($row = $resource->fetch_assoc()){
                               
                               $totalEmpa = $totalEmpa + $row['RE_cantidad_producto'];
                               
                           }    
                                
                                
                           
                        ?>
                     <li id="shopp" class="d-flex j-c-c a-i-c ">
                         <a href="carro.php">
                             <img src="img/shopping-cart.svg" alt="carro de compra"  width="30px">
                         </a>
                    <div id="shoppCont">
                        <?php echo  $totalEmpa ; ?>
                    </div>
                 </a>  
                 </li>
                      
                    
             <?php
                           }
            ?>       
            
           
               
               
              
             
              