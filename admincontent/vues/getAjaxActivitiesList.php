  <?php
  $root = $data['root'];
  $listActivities = $data['listActivities'] ;
  
  function price($activity){

        if($activity['currency']=='USD')
        {
            echo round($activity['price'],2) ;
        }
        else
        {
            echo round($activity['price']) ;
        }
    } 
  ?>
<div class="card-header">
                  <h4>Liste des activités</h4>
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
                          <th><i class="fa fa-automobile"></i> Titre</th>
                          <th><i class="fa fa-automobile"></i> Contenu</th>
                          <th><i class="fa fa-automobile"></i> Date </th>
                          
                          <th><i class="fa fa-automobile"></i> Couverture</th>
                          <th><i class="fa fa-cogs"></i> Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th></th>
                         <th><i class="fa fa-automobile"></i> Titre</th>
                          <th><i class="fa fa-automobile"></i> Contenu</th>
                          <th><i class="fa fa-automobile"></i> Date </th>
                          
                          <th><i class="fa fa-automobile"></i> Couverture</th>
                          <th><i class="fa fa-cogs"></i> Action</th>
                          
                        </tr>
                      </tfoot>
                      <tbody>
            <?php
            foreach($listActivities as $activity)
            {
              if($activity['status']==1)
              {
                ?>
                    <tr>
                  <td></td>
                <td id="tdActivityTitle<?php echo $activity['id_activity'] ; ?>"><?php echo $activity['title'] ;  ?></td>
                <td id="tdActivityContent<?php echo $activity['id_activity'] ; ?>"><?php echo $activity['content'];  ?></td>
                <td id="tdActivityDate<?php echo $activity['id_activity'] ; ?>"><?php echo $activity['activity_date'] ;  ?></td>
                <td><img id="activityCover<?php echo $activity['id_activity'] ; ?>" style="width:50px" src="../media/images/activities/<?php echo $activity['cover'] ;  ?>"></td>
                <input type="hidden" value="<?php echo $activity['activity_date'] ; ?>" id="inptActivityDate">
                <td><a class="btn btn-warning" onclick="showUpdateActivityModal(<?php echo $activity['id_activity'] ; ?>)"><i class="fa fa-cogs"></i></a>
                  <a class="btn btn-danger" onclick="showDeleteActivityModal(<?php echo $activity['id_activity'] ; ?>)"><i class="fa fa-trash"></i></a>
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
