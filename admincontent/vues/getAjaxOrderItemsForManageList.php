  <?php
  $root = $data['root'];
  $listDeliveryServices = $data['listDeliveryServices'] ;
  $listOrderItems = $data['listOrderItems'] ;



  ?>

                    <table id="data-table-simple" class="responsive-table table-striped display" cellspacing="0">
                      <thead>
                        <tr>
                          <th></th>
                          <th><i class="fa fa-automobile"></i> Produit</th>
                          <th><i class="fa fa-automobile"></i> Quantité</th>
                          <th><i class="fa fa-automobile"></i> Fournisseur</th>
                          <th><i class="fa fa-automobile"></i> Livreur</th> 
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th></th>
                          <th><i class="fa fa-automobile"></i> Produit</th>
                          <th><i class="fa fa-automobile"></i> Quantité</th>
                          <th><i class="fa fa-automobile"></i> Fournisseur</th>
                          <th><i class="fa fa-automobile"></i> Livreur</th>
                          <th><i class="fa fa-automobile"></i> Etat</th> 
                        </tr>
                      </tfoot>
                      <tbody>
            <?php
            foreach($listOrderItems as $item)
            {
              
                ?>
                    <tr>
                  <td></td>
                  <td id="tdOrderItemProduct<?php echo $item['id_item'] ; ?>"><?php echo $item['designation'] ;  ?></td>
                  <td id="tdDOrderItemQuantity<?php echo $item['id_item'] ; ?>"><?php echo  $item['quantity'] ;  ?></td>
                  <td class="tdOrderItemProvider" idi="<?php echo $item['id_item'] ; ?>" id="tdOrderItemProvider<?php echo $item['id_item'] ; ?>"> </td>
                  <td class="tdOrderItemDeliveryService" idi="<?php echo $item['id_item'] ; ?>" id="tdOrderItemDeliveryService<?php echo $item['id_item'] ; ?>"> </td>
                  <td><?php echo $item['delivery_state'] ; ?></td>
                  <input type="hidden" name="item_<?php echo $item['id_item'] ; ?>" id="inptOrderIdItem<?php echo $item['id_item'] ; ?>" value="<?php echo $item['id_item'] ; ?>">
              </tr>
              <?php
            }
            
            ?>
                        
                        
                        
                        
                      </tbody>
                    </table>
                    <script type="text/javascript">
                      loadProvidersAndDeliveryServicesInput() ;
                    </script>
              