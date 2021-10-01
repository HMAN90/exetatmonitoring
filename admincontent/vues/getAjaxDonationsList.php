  <?php
  $root = $data['root'];
  $listOrders = $data['listOrders'] ;



  ?>
<div class="card-header">
                  <h4>Liste des dons</h4>
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
                          <th><i class="fa fa-automobile"></i> Donateur</th>
                          <th><i class="fa fa-automobile"></i> Coordonnées</th>
                          
                          <th><i class="fa fa-cogs"></i> Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th></th>
                          <th><i class="fa fa-automobile"></i> Date</th>
                          <th><i class="fa fa-automobile"></i> Montant</th>
                          <th><i class="fa fa-automobile"></i> Devise</th>
                          <th><i class="fa fa-automobile"></i> Donateur</th>
                          <th><i class="fa fa-automobile"></i> Cordonnées</th>
                          
                          
                          <th><i class="fa fa-cogs"></i> Action</th>
                        </tr>
                      </tfoot>
                      <tbody>
            <?php
            $i = 0 ;
            foreach($listOrders as $order)
            {
              $i++ ;
                    if($order['donation_amount']>0)
                    {
                      ?>
                      <tr>
                    <td></td>
                  <td id="tdDonationDate<?php echo $order['id_order'] ; ?>"><?php echo $order['validation_date'] ;  ?></td>
                  <td id="tdDonationAmount<?php echo $order['id_order'] ; ?>"><?php echo  $order['donation_amount'] ;  ?></td>
                  <td id="tdDonationCurrency<?php echo $order['id_order']  ; ?>"><?php echo $order['donation_currency'] ;  ?></td>
                  <td id="tdDonationGiver<?php echo $order['id_order'] ; ?>"><?php echo $order['customer_firstname'].  ' ' . $order['customer_lastname']  ;  ?></td>


                  <td id="tdDonationGiverInfos<?php echo $order['id_order'] ; ?>"><?php echo $order['phone_number'].  ' / ' . $order['customer_email']  ;  ?></td>
                  
                  
                  
                  
                  <td>
                  </td>
                </tr>
                      <?php
                    }
              
                ?>
                      

              <?php
            }

            
              if($i ==0)
            {
              echo '<h1>Aucun don effectué</h1>' ;
            }
            
            
            ?>
                        
                        
                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
