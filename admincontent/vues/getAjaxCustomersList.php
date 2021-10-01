  <?php
  $root = $data['root'];
  $listCustomers= $data['listCustomers'] ;
  
 
  ?>
<div class="card-header">
                  <h4>Liste des clients</h4>
                  <div class="card-header-action">
                    <div class="btn-group">
                      <a href="#" class="btn btn-primary">Données</a>
                      <a href="#" class="btn">Liste</a>
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table id="data-table-simple" class="responsive-table table-striped table display" cellspacing="0">
                      <thead>
                        <tr>
                          <th></th>
                          <th><i class="fa fa-automobile"></i> Identité</th>
                          <th><i class="fa fa-automobile"></i> Téléphone</th>
                          <th><i class="fa fa-automobile"></i> Date d'inscription</th>
                          <!--
                          <th><i class="fa fa-automobile"></i> Contenu</th>
                          <th><i class="fa fa-automobile"></i> Couverture</th>
                          <th><i class="fa fa-cogs"></i> Action</th>
                        -->
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                           <th></th>
                          <th><i class="fa fa-automobile"></i> Identité</th>
                          <th><i class="fa fa-automobile"></i> Téléphone</th>
                          <th><i class="fa fa-automobile"></i> Date d'inscription</th>
                          <!--
                          <th><i class="fa fa-automobile"></i> Contenu</th>
                          <th><i class="fa fa-automobile"></i> Couverture</th>
                          <th><i class="fa fa-cogs"></i> Action</th>
                        -->
                        </tr>
                      </tfoot>
                      <tbody>
            <?php
            foreach($listCustomers as $customer)
            {
             
                ?>
                    <tr>
                  <td></td>
                <td id="tdCustomerIdentity<?php echo $customer['id_user'] ; ?>"><?php echo $customer['first_name'] . ' ' . $customer['last_name'] ;  ?></td>
                <td id="tdCustomerPhone<?php echo $customer['id_user'] ; ?>"><?php echo $customer['phone_number'];  ?></td>
                <td id="tdCustomerRegisterDate<?php echo $customer['id_user'] ; ?>"><?php echo $customer['signin_date'] ;  ?></td>
                
              </tr>

                
                        
              
              <?php
            }
            
            ?>
                        
                        
                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
