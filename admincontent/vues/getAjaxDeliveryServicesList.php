  <?php
  $root = $data['root'];
  $listDeliveryServices = $data['listDeliveryServices'] ;



  ?>
<div class="card-header">
                  <h4>Liste des services de livraison</h4>
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
                          <th><i class="fa fa-automobile"></i> Désignation</th>
                          <th><i class="fa fa-automobile"></i> Email</th>
                          <th><i class="fa fa-automobile"></i> Téléphone</th>
                          <th><i class="fa fa-automobile"></i> Adresse</th>
                          
                          <th><i class="fa fa-cogs"></i> Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th></th>
                          <th><i class="fa fa-automobile"></i> Désignation</th>
                          <th><i class="fa fa-automobile"></i> Email</th>
                          <th><i class="fa fa-automobile"></i> Téléphone</th>
                          <th><i class="fa fa-automobile"></i> Adresse</th>
                          
                          <th><i class="fa fa-cogs"></i> Action</th>
                        </tr>
                      </tfoot>
                      <tbody>
            <?php
            $i  = 0 ;
            foreach($listDeliveryServices as $service)
            {

              if($service['confirmation']=='yes')
              {
                $i++ ;
                ?>
                    <tr>
                  <td></td>
                <td id="tdDeliveryServiceBusinessLegalName<?php echo $service['id_user'] ; ?>"><?php echo $service['business_legal_name'] ;  ?></td>
                <td id="tdDeliveryServiceEmail<?php echo $service['id_user'] ; ?>"><?php echo  $service['email'] ;  ?></td>
                <td id="tdDeliveryServicePhoneNumber<?php echo $service['id_user'] ; ?>"><?php echo $service['phone_number'] ;  ?></td>
                <td id="tdDeliveryServiceAddress<?php echo $service['id_user'] ; ?>"><?php echo $service['street']. $service['place_number'] . ',' . $service['quartier'] ;  ?></td>
                
                <input type="hidden" id="inptDeliveryServiceCity<?php echo $service['id_user'] ; ?>" value="<?php echo $service['city'] ; ?>">
                <input type="hidden" id="inptDeliveryServiceCommune<?php echo $service['id_user'] ; ?>" value="<?php echo $service['commune'] ; ?>">
                <input type="hidden" id="inptDeliveryServiceQuartier<?php echo $service['id_user'] ; ?>" value="<?php echo $service['quartier'] ; ?>">
                <input type="hidden" id="inptDeliveryServiceStreet<?php echo $service['id_user'] ; ?>" value="<?php echo $service['street'] ; ?>">
                <input type="hidden" id="inptDeliveryServicePlaceNumber<?php echo $service['id_user'] ; ?>" value="<?php echo $service['place_number'] ; ?>">
                
                
                <td><a class="btn btn-warning" onclick="showUpdateDeliveryServiceModal(<?php echo $service['id_user'] ; ?>)"><i class="fa fa-cogs"></i></a>
                  <a class="btn btn-danger" onclick="showDeleteDeliveryServiceModal(<?php echo $service['id_user'] ; ?>)"><i class="fa fa-trash"></i></a>
                </td>
              </tr>

                <?php
              }
              ?>
              
              
                        
              
              <?php
            }
            if($i ==0)
            {
              echo '<h1>Pas de services de livraisons opérationnels</h1>' ;
            }
            
            ?>
                        
                        
                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
