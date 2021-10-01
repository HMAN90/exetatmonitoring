  <?php
  $root = $data['root'];
  $listProducts = $data['listProducts'] ;
  $listAllCategories = $data['listAllCategories'] ;
  $listCurrencies = $data['listCurrencies'] ;

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
                  <h4>Liste des produits</h4>
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
                          <th><i class="fa fa-automobile"></i> Désignation</th>
                          <th><i class="fa fa-automobile"></i> Prix</th>
                          <th><i class="fa fa-automobile"></i> Devise</th>
                          <th><i class="fa fa-automobile"></i> Unité</th>
                          <th><i class="fa fa-automobile"></i> Logo</th>
                          <th><i class="fa fa-cogs"></i> Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th></th>
                          <th><i class="fa fa-automobile"></i> Désignation</th>
                          <th><i class="fa fa-automobile"></i> Prix</th>
                          <th><i class="fa fa-automobile"></i> Devise</th>
                          <th><i class="fa fa-automobile"></i> Unité</th>
                          <th><i class="fa fa-automobile"></i> Logo</th>
                          <th><i class="fa fa-cogs"></i> Action</th>
                        </tr>
                      </tfoot>
                      <tbody>
            <?php
            foreach($listProducts as $product)
            {
              if($product['status']==1)
              {
                ?>
                    <tr>
                  <td></td>
                <td id="tdProductDesignation<?php echo $product['id_product'] ; ?>"><?php echo $product['designation'] ;  ?></td>
                <td id="tdProductPrice<?php echo $product['id_product'] ; ?>"><?php echo price( $product) ;  ?></td>
                <td id="tdProductCurrency<?php echo $product['id_product'] ; ?>"><?php echo $product['currency'] ;  ?></td>
                <td id="tdProductUnit<?php echo $product['id_product'] ; ?>"><?php echo $product['unit'] ;  ?></td>
                <textarea style="display: none ;" id="txtProductDescription<?php echo $product['id_product'] ; ?>"><?php echo $product['description'] ; ?></textarea>
                <input type="hidden" id="inptProductIdCategory<?php echo $product['id_product'] ; ?>" value="<?php echo $product['id_category'] ; ?>">
                <td><img id="imgProduct<?php echo $product['id_product'] ; ?>" style="width:50px" src="../media/images/products/<?php echo $product['product_logo'] ;  ?>"></td>
                
                <td><a class="btn btn-warning" onclick="showUpdateProductModal(<?php echo $product['id_product'] ; ?>)"><i class="fa fa-cogs"></i></a>
                  <a class="btn btn-danger" onclick="showDeleteProductModal(<?php echo $product['id_product'] ; ?>)"><i class="fa fa-trash"></i></a>
                </td>
              </tr>

                <?php
              }
              ?>
              
              
                        
              
              <?php
            }
            
            ?>
                        
                        
                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
