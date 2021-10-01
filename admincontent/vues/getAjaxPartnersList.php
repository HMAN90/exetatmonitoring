  <?php
  $root = $data['root'];
  $listElements = $data['listElements'] ;
  $imagesContentPath = '../media/files/' ;
  
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
                  <h4>Contenu de l'en-tête</h4>
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
                          <th><i class="fa fa-automobile"></i> Désignation</th>
                          <th><i class="fa fa-automobile"></i> Description</th>
                          <th><i class="fa fa-automobile"></i> Editeur</th>
                          
                          <th><i class="fa fa-automobile"></i> Logo</th>
                          <th><i class="fa fa-cogs"></i> Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th></th>
                          <th><i class="fa fa-automobile"></i> Désignation</th>
                          <th><i class="fa fa-automobile"></i> Description</th>
                          <th><i class="fa fa-automobile"></i> Editeur</th>
                          
                          <th><i class="fa fa-automobile"></i> Logo</th>
                          <th><i class="fa fa-cogs"></i> Action</th>
                        </tr>
                      </tfoot>
                      <tbody>
            <?php
            foreach($listElements as $element)
            {
              if($element['status']==1)
              {
                ?>
                    <tr>
                  <td></td>
                <td id="tdElementDesignation<?php echo $element['id_element'] ; ?>"><?php echo $element['designation'] ;  ?></td>
                <td id="tdElementDescription<?php echo $element['id_element'] ; ?>"><?php echo $element['description'];  ?></td>
                
                <td id="tdElementEditor<?php echo $element['id_element'] ; ?>"><?php //echo $document['editor'] ;  ?></td>
                <td><img src="<?php echo $imagesContentPath . $element['url_image'] ; ?>" style="width: 75px; "></td>
                
                <input type="hidden" id="inptElementEditor<?php echo $element['id_element'] ; ?>" value="<?php echo $element['editor'] ; ?>">
                <input type="hidden" id="inptElementType<?php echo $element['id_element'] ; ?>" value="<?php echo $element['element_type'] ; ?>">
                <textarea style="display: none ;" id="txtElementDescription<?php echo $element['id_element'] ; ?>"><?php echo $element['description'] ; ?></textarea>
                <textarea style="display: none ;" id="txtElementContent<?php echo $element['id_element'] ; ?>"><?php echo $element['content'] ; ?></textarea>
                <td><a class="btn btn-warning" onclick="showUpdateElementModal(<?php echo $element['id_element'] ; ?>,'<?php  echo  $element['element_type'] ;  ?>')"><i class="fa fa-cogs"></i></a>
                  <a class="btn btn-danger" onclick="showDeleteElementModal(<?php echo $element['id_element'] ; ?>)"><i class="fa fa-trash"></i></a>
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
