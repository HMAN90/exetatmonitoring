  <?php

  $listPendingSubscriptions = $data['listPendingSubscriptions'] ;


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
  ?>
<div class="card-header">
                  <h4>Liste des souscriptions</h4>
                  <div class="card-header-action">
                    <div class="btn-group">
                      <a href="#" class="btn btn-primary">Week</a>
                      <a href="#" class="btn">Month</a>
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table id="data-table-simple" class="responsive-table table-striped display" cellspacing="0">
                      <thead>
                        <tr>
                          <th></th>
                          <th><i class="fa fa-automobile"></i> Logo</th>
                          <th><i class="fa fa-automobile"></i> Produit</th>
                          <th><i class="fa fa-automobile"></i> Fournisseur</th>                   
                          <th><i class="fa fa-cogs"></i> Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th></th>
                          <th><i class="fa fa-automobile"></i> Logo</th>
                          <th><i class="fa fa-automobile"></i> Produit</th>
                          <th><i class="fa fa-automobile"></i> Fournisseur</th>                   
                          <th><i class="fa fa-cogs"></i> Action</th>
                        </tr>
                      </tfoot>
                      <tbody>
            <?php
            foreach($listPendingSubscriptions as $subscription)
            {
        ?>
                    <tr>
                  <td></td>
                <td id=""><img id="imgProduct<?php echo $subscription['id_product'] ; ?>" style="width:50px" src="../media/images/products/<?php echo $subscription['product_logo'] ;  ?>"></td>
                <td id="tdProductDesignation<?php echo $subscription['id_subscription'] ; ?>"><?php echo $subscription['designation'] ; ?></td>
                <td id="tdProviderName<?php echo $subscription['id_subscription'] ; ?>"><?php echo $subscription['business_legal_name'] . '/' . $subscription['first_name'] . ' ' . $subscription['last_name']  ; ?></td>
               
                
                
                <td><a class="btn btn-warning" onclick="showManageSubscriptionModal(<?php echo $subscription['id_subscription'] ; ?>)"><i class="fa fa-cogs"></i></a>
                  
                </td>
              </tr>

                
              
              
                        
              
              <?php
            }
            
            ?>
                        
                        
                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
