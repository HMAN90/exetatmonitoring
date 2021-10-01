  <?php
  $root = $data['root'];
  $listPolicies= $data['listPolicies'] ;
  
 
  ?>
<div class="card-header">
                  <h4>Liste des clients elligibles</h4>
                  <div class="card-header-action">
                    <div class="btn-group">
                      <a href="#" class="btn btn-primary">Données</a>
                      <a href="#" class="btn">Liste</a>
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table id="data-table-simple" class="responsive-table table-striped table display" cellspacing="0" style="display: none ;">
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
            foreach($listPolicies as $policy)
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
                      <h1>Aucune donnée disponible pour le moment</h1>
                    </table>
                  </div>
                </div>
