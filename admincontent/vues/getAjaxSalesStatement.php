  <?php
  $root = $data['root'];
  $listDocuments = $data['listOrders'] ;
  
  function price($document){

        if($document['currency']=='USD')
        {
            echo round($document['price'],2) ;
        }
        else
        {
            echo round($document['price']) ;
        }
    } 
  ?>
<div class="card-header">
                  <h4>Relevé des ventes</h4>
                  <div class="card-header-action">
                    <div class="btn-group">
                      <a href="#" class="btn btn-primary">Données</a>
                      <a href="#" class="btn">Liste</a>
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table id="data-table-simple" class="responsive-table table-striped display" cellspacing="0">
                      <thead>
                        <tr>
                          <th></th>
                          
                          <th><i class="fa fa-automobile"></i> Numéro de téléphone</th>
                          <th><i class="fa fa-automobile"></i> Montant </th>
                          <th><i class="fa fa-automobile"></i> Devise</th>
                          <th><i class="fa fa-automobile"></i> Date</th>
                          
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th></th>
                          
                          <th><i class="fa fa-automobile"></i> Numéro de téléphone</th>
                          <th><i class="fa fa-automobile"></i> Montant </th>
                          <th><i class="fa fa-automobile"></i> Devise</th>
                          <th><i class="fa fa-automobile"></i> Date</th>
                          
                        </tr>
                      </tfoot>
                      <tbody>
            <?php
            foreach($listOrders as $order)
            {
              
                ?>
              <tr>
                  <td></td>
                <td id="tdDestinationPhone<?php echo $order['id_order'] ; ?>"><?php echo $order['destination_phone'] ;  ?></td>
                <td id="tdOrderAmount<?php echo $order['id_order'] ; ?>"><?php echo $order['amount'];  ?></td>
                <td id="tdOrderCurrency<?php echo $order['id_order'] ; ?>"><?php echo $order['currency'] ;  ?></td>
                <td id="tdOrderDate<?php echo $order['id_order'] ; ?>"><?php echo $order['created_at'] ;  ?></td>
               
              </tr>

                        
              
              <?php
            }
            
            ?>
                        
                        
                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
