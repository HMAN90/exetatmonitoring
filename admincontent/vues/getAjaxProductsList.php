  <?php
  $root = $data['root'];
  $listDocuments = $data['listDocuments'] ;
  
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
                  <h4>Liste des documents</h4>
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
                          <th><i class="fa fa-automobile"></i> Contenu</th>
                          <th><i class="fa fa-automobile"></i> Couverture</th>
                          <th><i class="fa fa-cogs"></i> Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th></th>
                          <th><i class="fa fa-automobile"></i> Désignation</th>
                          <th><i class="fa fa-automobile"></i> Description</th>
                          <th><i class="fa fa-automobile"></i> Editeur</th>
                          <th><i class="fa fa-automobile"></i> Contenu</th>
                          <th><i class="fa fa-automobile"></i> Couverture</th>
                          <th><i class="fa fa-cogs"></i> Action</th>
                        </tr>
                      </tfoot>
                      <tbody>
            <?php
            foreach($listDocuments as $document)
            {
              if($document['status']==1)
              {
                ?>
                    <tr>
                  <td></td>
                <td id="tdDocumentDesignation<?php echo $document['id_document'] ; ?>"><?php echo $document['designation'] ;  ?></td>
                <td id="tdDocumentDescription<?php echo $document['id_document'] ; ?>"><?php echo $document['description'];  ?></td>
                <td id="tdDocumentEditor<?php echo $document['id_document'] ; ?>"><?php echo $document['editor'] ;  ?></td>
                <td id="tdDocumentUnit<?php echo $document['id_document'] ; ?>"><?php echo $document['unit'] ;  ?></td>
                <input type="hidden" id="inptDocumentEditor<?php echo $document['id_document'] ; ?>" value="<?php echo $document['editor'] ; ?>">
                <textarea style="display: none ;" id="txtDocumentDescription<?php echo $document['id_document'] ; ?>"><?php echo $document['description'] ; ?></textarea>
                <td><a href="../media/documents/<?php echo $document['file'] ;  ?>">Télécharger</a></td>
                <td><img id="documentCover<?php echo $document['id_document'] ; ?>" style="width:50px" src="../media/images/documents/<?php echo $document['cover'] ;  ?>"></td>
                
                <td><a class="btn btn-warning" onclick="showUpdateDocumentModal(<?php echo $document['id_document'] ; ?>)"><i class="fa fa-cogs"></i></a>
                  <a class="btn btn-danger" onclick="showDeleteDocumentModal(<?php echo $document['id_document'] ; ?>)"><i class="fa fa-trash"></i></a>
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
