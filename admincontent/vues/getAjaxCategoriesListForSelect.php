<option value="-1">Aucune</option>
<?php
	$root = $data['root'];
  $user = $data['user'] ;
	$listCategories = $data['listCategories'] ;
  $listAllCategories = $data['listAllCategories'] ;
  if(isset($data['id_selected']))
  {
    $idSelected = $data['id_selected'] ;
  }
  else
  {
    $idSelected = null ;
  }
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
                        <?php
                        $i = 0 ;
                            foreach ($listAllCategories as $category) {
                              if($category['status']==1)
                              {
                                $i++ ;
                                ?>
                               <option value="<?php echo $category['id_category'] ; ?>" <?php if($idSelected = $category['id_category']){ echo 'selected' ; } ?>>
                                 <?php echo $category['designation'] ;  ?>
                               </option>
                          
                            
                            
                          

                                <?php
                              }
                              
                              ?>

                            
                              <?php
                            }
                        ?>
                        
                        
                       
                       
                        