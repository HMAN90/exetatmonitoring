<?php
	$root = $data['root'];
  $user = $data['user'] ;
	$listCategories = $data['listCategories'] ;
  $listAllCategories = $data['listAllCategories'] ;
 // $parents = $data['parents'] ;
  
  //$category = $data['node'] ;

	if(isset($data['mode']))
	{

		$mode = $data['mode'] ;
	}
	else
	{
		$mode = "" ;
	}
 /* $usersNumber = $data['usersNumber'] ;
  $customersNumber = $data['customersNumber'] ;
  */
  
?>

                <div class="card-header">
                  <h4><?php  $cardHeader = "Liste des fournisseurs" ;  echo $cardHeader ; ?></h4>
                  <div class="card-header-action">
                    <a href="#" class="btn btn-primary">View All</a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped mb-0">
                      <thead>
                        <tr>
                          <td>#</td>
                          <th>Designation</th>
                          
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $i = 0 ;
                            foreach ($listAllCategories as $category) {
                              if($category['status']==1)
                              {
                                $i++ ;
                                ?>
                                <tr>
                              <td><?php echo $i ; ?></td>
                          <td id="tdCategoryDesignation<?php echo $category['id_category'] ; ?>">
                            <?php echo $category['designation'] ;  ?>
                            
                          </td>
                          
                         
                          
                          <td>
                            <a class="btn btn-primary btn-action mr-1 btModifCategory" onclick="showUpdateCategoryModal(<?php echo $category['id_category'] ; ?>)" id="btModifCategory<?php echo $category['id_category']; ?>"><i class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-danger btn-action btDeleteCategory" data-toggle="tooltip" title="Supprimer"  onclick="showDeleteCategoryModal(<?php echo $category['id_category'] ; ?>)"><i class="fas fa-trash"></i></a>
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
              