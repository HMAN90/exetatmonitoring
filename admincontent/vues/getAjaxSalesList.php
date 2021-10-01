  <?php
  $root = $data['root'];
  $listOrders = $data['listOrders'] ;



  ?>
<div class="card-header">
                  <h4>Liste des commandes en attente de livraison</h4>
                  <div class="card-header-action">
                    <div class="btn-group">
                      <a href="#" class="btn btn-primary"></a>
                      <a href="#" class="btn"></a>
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table id="data-table-simple" class="responsive-table table-striped display" cellspacing="0">
                      <thead>
                        <tr>
                          <th></th>
                          <th><i class="fa fa-automobile"></i> Date</th>
                          <th><i class="fa fa-automobile"></i> Montant</th>
                          <th><i class="fa fa-automobile"></i> Devise</th>
                          <th><i class="fa fa-automobile"></i> Adresse</th>
                          
                          <th><i class="fa fa-cogs"></i> Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th></th>
                          <th><i class="fa fa-automobile"></i> Date</th>
                          <th><i class="fa fa-automobile"></i> Montant</th>
                          <th><i class="fa fa-automobile"></i> Devise</th>
                          <th><i class="fa fa-automobile"></i> Adresse</th>
                          
                          <th><i class="fa fa-cogs"></i> Action</th>
                        </tr>
                      </tfoot>
                      <tbody>
            <?php
            $i = 0 ;
            $USDtoCDFrate = $data['USDtoCDFrate'] ;
            $CDFtoUSDrate = $data['CDFtoUSDrate'];
            foreach($listOrders as $order)
            {
              $i++ ;
              
                ?>
                    <tr>
                  <td></td>
                <td id="tdOrderCreationDate<?php echo $order['id_order'] ; ?>"><?php echo $order['created_at'] ;  ?></td>
                <td id="tdOrderAmount<?php echo $order['id_order'] ; ?>"><?php if($order['currency']==$order['donation_currency']) { echo  $order['amount'] - $order['donation_amount'] ; 
                  } 
                  else{
                    if($order['donation_currency']=="CDF")
                    {
                      echo  $order['amount'] - $order['donation_amount'] * $CDFtoUSDrate ; 
                    }
                    else
                    {
                      echo  $order['amount'] - $order['donation_amount'] * $USDtoCDFrate ;
                    }
                  }
                  ?>
                    
                  </td>
                <td id="tdOrderCurrency<?php echo $order['id_order']  ; ?>"><?php echo $order['currency'] ;  ?></td>
                <td id="tdOrderAddress<?php echo $order['id_order'] ; ?>"><?php echo $order['street']. $order['number'] . ',' . $order['quartier'] ;  ?></td>
                
                
                
                
                <td><a class="btn btn-warning" onclick="showOrderDetailsModal(<?php echo $order['id_order'] ; ?>)"><i class="fa fa-eye"></i></a>
                  <a class="btn btn-warning" onclick="showManageOrderModal(<?php echo $order['id_order'] ; ?>)"><i class="fa fa-cogs"></i></a>
                  
                </td>
              </tr>

              <?php
            }

            
              if($i ==0)
            {
              echo '<h1>Aucune commandes en attente de livraison</h1>' ;
            }
            
            
            ?>
                        
                        
                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
