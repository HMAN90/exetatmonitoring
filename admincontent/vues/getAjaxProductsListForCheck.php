  <?php
  $root = $data['root'];
  $listProducts = $data['listProducts'] ;
  $listAllCategories = $data['listAllCategories'] ;
  $listCurrencies = $data['listCurrencies'] ;
  $listProvided = $data['listProvided'] ;

  function price($product){

        if($product['currency']=='USD')
        {
            echo round($product['price'],2) ;
        }
        else
        {
            echo round($product['price']) ;
        }
    } 
  
            foreach($listProducts as $product)
            {
              if($product['status']==1)
              {
                ?>
                <div>
                    <label><?php echo $product['designation'] ; ?></label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-envelope"></i>
                        </div>
                      </div>

                      <input type="checkbox" class="form-control"  name="provided<?php echo $product['id_product'] ; ?>" id="modalAddProviderProductProvided<?php echo $product['id_product'] ; ?> " <?php  if(in_array($product['id_product'], $listProvided))  { echo "checked" ; } ?> >
                    </div>
                </div>

                <?php
              }
              ?>
              
              
                        
              
              <?php
            }
            
            ?>
                        
                        
                        
                        
                      
