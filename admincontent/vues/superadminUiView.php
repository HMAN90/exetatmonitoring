<?php
$root = $data['root'] ;
$user = $data['user'] ;
if(isset($data['mode']))
{
  $mode = $data['mode'] ;
}
else
{
  $mode = "" ;
}

$listAllCategories = array() ;
$listCurrencies = array() ;

  $transactionsTotalNumber= $data['transactionsTotalNumber'] ;
  $dailyTransactions = $data['dailyTransactions'] ;
  $bestOperator = $data['bestOperator'] ;
  $badOperator = 'AFRICELL' ;
  $vodacomTransactions = $data['vodacomTransactions'] ;
  $orangeTransactions  = $data['orangeTransactions'] ;
  $airtelTransactions  = $data['airtelTransactions'] ;
  $africellTransactions  = $data['africellTransactions'] ;

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    include ('ressourcesadmin/includes/contentHead.php') ;
  ?>
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <?php include ('ressourcesadmin/includes/adminMenu.php') ; ?> 
      <?php include ('ressourcesadmin/includes/sidenav.php') ; ?> 
      
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-chart-bar"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total de transactions</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $transactionsTotalNumber ; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-chart-bar"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Transactions journalières</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $dailyTransactions ; ?>
                  </div>
                </div>
              </div>
            </div>
           <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Réseau le moins sollicité</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $badOperator ; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Réseau le plus sollicité</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $bestOperator ; ?>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <div class="row">
            <div class="col-lg-8 col-md-12 col-12 col-sm-12">
              <div class="card" id="mainCard">
                <div class="card-header">
                  <h4>Infos</h4>
                  <div class="card-header-action">
                    <div class="btn-group">
                      <a href="#" class="btn btn-primary"></a>
                      <a href="#" class="btn">Affichage</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  
                  <div class="statistic-details mt-sm-4">
                    <br><br>
                    <div><h1 style="font-size: 100px;">DATA</h1></div><br><br><br>
                    <h1 style="font-size: 100px;" > SPACE </h1>
                  </div>
                  <canvas id="myChart" height="182"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4>Activités des opérateurs</h4>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled list-unstyled-border">
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="<?php echo $root ; ?>ressourcesadmin/assets/img/avatar/avatar-1.png" alt="avatar">
                      <div class="media-body">
                        <div class="float-right text-primary"><?php echo $vodacomTransactions ; ?></div>
                        <div class="media-title">VODACOM</div>
                        <span class="text-small text-muted">Nombre total de transactions sur le réseau Vodacom </span>
                      </div>
                    </li>
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="<?php echo $root ; ?>ressourcesadmin/assets/img/avatar/avatar-2.png" alt="avatar">
                      <div class="media-body">
                        <div class="float-right"><?php echo $orangeTransactions ; ?></div>
                        <div class="media-title">ORANGE</div>
                        <span class="text-small text-muted">Nombre total de transactions sur le réseau Orange</span>
                      </div>
                    </li>

                     <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="<?php echo $root ; ?>ressourcesadmin/assets/img/avatar/avatar-2.png" alt="avatar">
                      <div class="media-body">
                        <div class="float-right"><?php echo $africellTransactions ; ?></div>
                        <div class="media-title">AFRICELL</div>
                        <span class="text-small text-muted">Nombre total de transactions sur le réseau AFRICELL</span>
                      </div>
                    </li>
                   
                  </ul>
                  
                </div>
              </div>
            </div>
          </div>
          
          
          
        </section>
      </div>
    
 <?php  
 include ('ressourcesadmin/includes/footer.php') ;
 include ('ressourcesadmin/includes/dialog.php') ;
  ?>

    
    </div>
  </div>

 <?php  include ('ressourcesadmin/includes/generalScript.php') ; ?>
</body>
</html>
