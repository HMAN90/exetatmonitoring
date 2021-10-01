<?php
	$root = $data['root'];
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

<!DOCTYPE html>
<html lang="en">
  <!--================================================================================
  Item Name: Materialize - Material Design Admin Template
  Version: 4.0
  Author: PIXINVENT
  Author URL: https://themeforest.net/Customer/pixinvent/portfolio
================================================================================ -->
  
<!-- Mirrored from pixinvent.com/materialize-material-design-admin-template/html/collapsible-menu/layout-menu-collapsed.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2018 06:34:55 GMT -->
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>HMARKET ADMINISTRATION</title>
    <!-- Favicons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    <link rel="icon" href="<?php echo $root ; ?>ressourcesadmin/../../images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="<?php echo $root ; ?>ressourcesadmin/../../images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="<?php echo $root ; ?>ressourcesadmin/images/favicon/mstile-144x144.html">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link href="<?php echo $root ; ?>ressourcesadmin/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo $root ; ?>ressourcesadmin/vendors/morris-chart/morris.css" type="text/css" rel="stylesheet">

    <link href="<?php echo $root ; ?>ressourcesadmin/css/themes/collapsible-menu/materialize.css" type="text/css" rel="stylesheet">
    <link href="<?php echo $root ; ?>ressourcesadmin/css/themes/collapsible-menu/style.css" type="text/css" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="<?php echo $root ; ?>ressourcesadmin/css/custom/custom.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="<?php echo $root ; ?>ressourcesadmin/vendors/prism/prism.css" type="text/css" rel="stylesheet">
    <link href="<?php echo $root ; ?>ressourcesadmin/vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href="<?php echo $root ; ?>ressourcesadmin/vendors/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet">
    <link href="<?php echo $root ; ?>ressourcesadmin/vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
    
  </head>
  <body class="layout-dark">
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <?php include('ressourcesadmin/includes/sidenav.php') ?>
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START CONTENT -->
        <section id="content">
          <!--start container-->
          <div class="container">
             <!--card stats start-->
             <!--card stats start-->
            <?php //include ('ressourcesadmin/includes/cardstats.php') ; ?>
            <!--card stats end-->
            <!--card stats end-->
            
            <!-- data table -->
            <div id="table-datatables">
                <!-- Element Showed -->
                <a class="waves-effect waves-light btn gradient-45deg-light-blue-cyan gradient-shadow border-round mr-1 modal-trigger" href="#modalAddCategory" >Ajouter une catégorie</a>
<!-- Tap Target Structure -->
<div class="col s12">
                    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                      <a id="btAddCategory" class="btn btn-floating btn-large cyan modal-trigger" href="#modalAddCategory">
                        <i class="fa fa-plus"></i>
                      </a>
                    </div>
                    <div class="tap-target cyan" data-activates="menu">
                      <div class="tap-target-content white-text">
                        <h5>Notification</h5>
                        <p class="white-text">Provide value and encourage return visits by introducing Customers to new features and functionality at contextually relevant moments. Provide value and encourage return visits by introducing Customers.</p>
                      </div>
                    </div>
                  </div>

                <div class="row">
                	<?php
                    if(substr($mode, 0,7)=="success")
                    {
                      ?>
                        <div class="input-field col s12 center">
              <img src="img/logo.png" alt="" class="circle responsive-img valign profile-image-login">
              <div id="card-alert" class="card amber accent-4">
                    <div class="card-content white-text">
                      <p>
                        <i class="material-icons">check</i> 
                        <?php 
                        if($mode=="successAddCategory")
                        {
                          ?>
                           La catégorie a été enregistré avec succès.

                          <?php
                        }
                        elseif
                          ($mode=="successUpdateCategory")
                        {
                          ?>
                          Le catégorie a été modifié avec succès!
                          <?php
                        }

                        
                        elseif
                          ($mode=="successDeleteCategory")
                        {
                          ?>
                         Le catégorie a été supprimé avec succès!
                          <?php
                        }
                        elseif
                          ($mode=="successAddCategoriesLink")
                        {
                          ?>
                         La liaison a été ajoutée avec succès!
                          <?php
                        }
                         elseif
                          ($mode=="successUpdateCategoriesLink")
                        {
                          ?>
                         La liaison a été modifiée avec succès!
                          <?php
                        }
                         elseif
                          ($mode=="successDeleteCategoriesLink")
                        {
                          ?>
                         La liaison a été supprimée avec succès!
                          <?php
                        }
                        ?>
                      </p>
                    </div>
                    <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
              </div>
              
            </div>
                      <?php
                    }
                    elseif(substr($mode, 0,5) == "error")
                    {
                      if($mode=="errorAddCategory")
                      {
                        if(isset($data['errorMessage']))
                          $errorMessage = $data['errorMessage'] ;
                        else
                          $errorMessage="Erreur d'ajout de catégorie" ;
                      }
                      elseif($mode=="errorUpdateCategory")
                      {
                        if(isset($data['errorMessage']))
                          $errorMessage = $data['errorMessage'] ;
                        else
                          $errorMessage="Erreur de modification de catégorie" ;
                      }
                      elseif($mode=="errorDeleteCategory")
                      {
                        if(isset($data['errorMessage']))
                          $errorMessage = $data['errorMessage'] ;
                        else
                          $errorMessage="Erreur de suppression de catégorie" ;
                      }
                      elseif($mode=="errorAddCategoriesLink")
                      {
                        if(isset($data['errorMessage']))
                          $errorMessage = $data['errorMessage'] ;
                        else
                          $errorMessage="Erreur d'ajout de liaison" ;
                      }
                      elseif($mode=="errorUpdateCategory")
                      {
                        if(isset($data['errorMessage']))
                          $errorMessage = $data['errorMessage'] ;
                        else
                          $errorMessage="Erreur de modification de liaison" ;
                      }
                      elseif($mode=="errorDeleteCategory")
                      {
                        if(isset($data['errorMessage']))
                          $errorMessage = $data['errorMessage'] ;
                        else
                          $errorMessage="Erreur de suppression de liaison" ;
                      }
                        
                      ?>
                        <div class="input-field col s12 center">
              <img src="img/logo.png" alt="" class="circle responsive-img valign profile-image-login">
              <div id="card-alert" class="card red accent-4">
                    <div class="card-content white-text">
                      <p>
                         Erreur:<?php echo $errorMessage ?>!</p>
                    </div>
                    <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
              </div>
              <!--
              <div id="card-alert" class="card red accent-4">
                    <div class="card-content white-text">
                      <p>
                        <i class="material-icons">check</i> Alerte : The page has been added.</p>
                    </div>
                    <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
              </div>
            -->
            </div>

                      <?php
                    }
                  ?>
                  <div class="col s12">
                    <p></p>
                  </div>
                  <div class="col s12">
                    <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                      <thead>
                        <tr>
                          <th><i class="fa fa-automobile"></i> Désignation</th>
                          
                          <th><i class="fa fa-cogs"></i> Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th><i class="fa fa-automobile"></i> Désignation</th>
                          
                          <th><i class="fa fa-cogs"></i> Action</th>
                        </tr>
                      </tfoot>
                      <tbody>
					  <?php
						foreach($listCategories as $category)
						{
							?>
							
							<tr>
							<td><?php echo $category['designation'] ;  ?></td>
							
							
							<td><a href="<?php echo $root ; ?>categories/manage/<?php echo $category['id_category'] ; ?>"><i class="fa fa-cogs"></i>Gérer</a></td>
						</tr>
                        
							
							<?php
						}
					  
					  ?>
                        
                        
                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            <!-- /data table -->
            <!--   essai bimeka               !-->
	


<div class="modal fade" id="modalAddCategoriesLink" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-signup" role="document">
    <div class="modal-content">
      <div class="card card-signup card-plain">
        <div class="modal-header">
          <h5 class="modal-title card-title">Ajouter un utilisateur</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            

            <div class="col-md-5 mr-auto">
              <div class="social text-center">
                <button class="btn btn-just-icon btn-round btn-twitter">
                  <i class="fa fa-twitter"></i>
                </button>
                <button class="btn btn-just-icon btn-round btn-dribbble">
                  <i class="fa fa-dribbble"></i>
                </button>
                <button class="btn btn-just-icon btn-round btn-facebook">
                  <i class="fa fa-facebook"> </i>
                </button>
                <h4> or be classical </h4>
              </div>

              <form class="form" method="post" action="<?php echo $root ; ?>nodes/links/add/">
                <div class="card-body">
                  
                <div class="row margin">
                  <div class="input-field col s12">
                    <i class="material-icons prefix pt-5 fa fa-Customer" ></i>
                    <input id="codeJonction" type="text" name="code_jonction" required="">
                    <label for="codeJonction" class="center-align">Code de jonction</label>
                  </div>
                </div>
                
                <div class="row margin">
                  <div class="input-field col s12">
                    <i class="material-icons prefix pt-5 fa fa-Customer" ></i>
                    <select  name="id_catégorie_parent" class="">
                      
                      <?php 
                        foreach ($listCategories as $parent) {
                          ?>
                            <option value="<?php echo $parent['id_catégorie'] ; ?>"><?php echo $parent['titre_menu'] ; ?></option>

                          <?php
                          # code...
                        }
                        ?>
                    </select>
                    <label for="idNoeudParent" class="center-align">Noeud parent</label>
                  </div>
                </div>
                <div class="row margin">
                  <div class="input-field col s12">
                    <i class="material-icons prefix pt-5 fa fa-Customer" ></i>
                    <select  name="id_catégorie_enfant" id="idNoeudEnfant" class="">
                      
                      <?php 
                        foreach ($listCategories as $child) {
                          ?>
                            <option value="<?php echo $child['id_catégorie'] ; ?>"><?php echo $child['titre_menu'] ; ?></option>

                          <?php
                          # code...
                        }
                        ?>
                    </select>
                    <label for="idNoeudEnfant" class="center-align">Noeud enfant</label>
                  </div>
                </div>
                
              
          <div class="row">
            <div class="input-field col s12">
              <button type="submit" class="btn waves-effect waves-light col s12 m12 l12  light-blue darken-4">Créer</button>
            </div>
          </div>
          <input type="hidden" name="operation" value="exeAddCategoryLink">
                  

                
                </div>
              <div class="modal-footer justify-content-center">
              <a href="#pablo" class="btn btn-primary btn-round">Get Started</a>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

           
              <!-- ecommerce offers start-->
              <!--
              <div id="ecommerce-offer">
                <div class="row">
                  <div class="col s12 m3">
                    <div class="card gradient-shadow gradient-45deg-red-pink border-radius-3">
                      <div class="card-content center">
                        <img src="<?php echo $root ; ?>ressourcesadmin/img/engineer1.png" class="width-40 border-round z-depth-5">
                        <h5 class="white-text lighten-4" style="font-weight: ">Clients</h5>
                        <p class="white-text lighten-4"><a href="<?php echo $root ; ?>ressourcesadmin/" class="waves-effect waves-light  btn gradient-shadow border-round mr-1" style="background-color: transparent;color: #fff;text-transform: capitalize;"><?php// echo $customersNumber ; ?></a></p>
                      </div>
                    </div>
                  </div>
                  <div class="col s12 m3">
                    <div class="card gradient-shadow gradient-45deg-purple-deep-purple border-radius-3">
                      <div class="card-content center">
                        <img src="<?php echo $root ; ?>ressourcesadmin/img/map1.png" class="width-40 border-round z-depth-5">
                        <h5 class="white-text lighten-4" style="font-weight: ">Noeuds</h5>
                        <p class="white-text lighten-4"><a href="<?php echo $root ; ?>ressourcesadmin/" class="waves-effect waves-light  btn gradient-shadow border-round mr-1" style="background-color: transparent;color: #fff;text-transform: capitalize;"><?php //echo $categorysNumber ; ?></a></p>
                      </div>
                    </div>
                  </div>
                  <div class="col s12 m3">
                    <div class="card gradient-shadow gradient-45deg-amber-amber border-radius-3">
                      <div class="card-content center">
                        <img src="<?php echo $root ; ?>ressourcesadmin/img/car1.png" class="width-40 border-round z-depth-5">
                        <h5 class="white-text lighten-4" style="font-weight: ">Sessions USSD</h5>
                        <p class="white-text lighten-4"><a href="<?php echo $root ; ?>ressourcesadmin/" class="waves-effect waves-light  btn gradient-shadow border-round mr-1" style="background-color: transparent;color: #fff;text-transform: capitalize;"><?php //echo $ussdSessionsNumber ; ?></a></p>
                      </div>
                    </div>
                  </div>
                  <div class="col s12 m3">
                    <div class="card gradient-shadow gradient-45deg-blue-grey-blue border-radius-3">
                      <div class="card-content center">
                        <img src="<?php echo $root ; ?>ressourcesadmin/img/engineer1.png" class="width-40 border-round z-depth-5">
                        <h5 class="white-text lighten-4" style="font-weight: ">Utilisateurs</h5>
                        <p class="white-text lighten-4"><a href="<?php echo $root ; ?>ressourcesadmin/" class="waves-effect waves-light  btn gradient-shadow border-round mr-1" style="background-color: transparent;color: #fff;text-transform: capitalize;"><?php// echo $usersNumber ; ?></a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              --!>
              <!-- ecommerce offers end-->
              <!-- //////////////////////////////////////////////////////////////////////////// -->
            </div>
            <!--end container-->
        </section>
        <!-- END CONTENT -->
        <div class="modal fade" id="modalAddCategory" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header" style="background:#ff0000 !important;padding:13px;border-radius:5px;box-shadow:14px 15px 25px rgba(0,0,0,0.2);">
          <h5 class="modal-title" style="color:#fff;"><i class="fa fa-users"></i> Ajouter un catégorie <!--principal(point d'entrée  --></h5>
        </div>
        <div class="modal-body">
            <div class="container">
              <form class="form" method="post" action="<?php echo $root ; ?>admin/categories/add/">
                <div class="card-body">
                  <div class="row margin">
                  <div class="input-field col s12 m6 l6">
                    <i class="prefix pt-5 fa fa-envelope" ></i>
                    <input id="designation" type="text" name="designation" required="">
                    <label for="designation" class="center-align">Désignation</label>
                  </div>
                  <div class="input-field col s12 m6 l6">
                    <i class="prefix pt-5 fa fa-envelope" ></i>
                    <select id="idParent" name="id_parent" >
                      <option value="-1">Aucune catégorie</option>
                      <?php 
                      foreach ($listAllCategories as $category) {
                        ?>
                         <option value="<?php echo $category['id_category']; ?>"><?php echo $category['designation']; ?></option>
                        <?php
                      }
                     ?>
                    </select>
                    <label for="designation" class="center-align">Catégorie parente</label>
                  </div>
                  
                </div>
              
          
          
          <div class="row margin">
            
                <div class="input-field col s12 m6 l6">
                  <button type="submit" class="btn waves-effect waves-light light-blue darken-4"> Créer</button>
                </div>
              </div>
          <input type="hidden" name="operation" value="exeAddCategory">
           <input type="hidden" name="origin" value="many">
              </form>
          </div>
      </div>
    </div>
  </div>
</div>
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <?php include( 'ressourcesadmin/includes/side.php') ?>
      </div>
      <!-- END WRAPPER -->
    </div>
    <!-- END MAIN --><br><br>
    <div class="row" style="width: 100%">
          <div class="col s12 m12 l12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.5207637783124!2d15.27164721430378!3d-4.312765696865234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a33d1e379e405%3A0xcbbb034af086d2b3!2sGrand+h%C3%B4tel+de+Kinshasa!5e0!3m2!1sfr!2sfr!4v1506068165392" width="1280" height="400" frameborder="0" style="border:0;width: 100%" allowfullscreen></iframe>

          
        </div>
      </div>
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <?php include('ressourcesadmin/includes/footer.php') ?>
	

   <!-- ================================================
        Scripts
        ================================================ -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="<?php echo $root ; ?>ressourcesadmin/vendors/jquery-3.2.1.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="<?php echo $root ; ?>ressourcesadmin/js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?php echo $root ; ?>ressourcesadmin/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!--prism -->
    <script type="text/javascript" src="<?php echo $root ; ?>ressourcesadmin/vendors/prism/prism.js"></script>

    <!-- chartjs -->
      <script type="text/javascript" src="<?php echo $root ; ?>ressourcesadmin/vendors/chartjs/chart.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo $root ; ?>ressourcesadmin/js/plugins.js"></script>
    <script type="text/javascript" src="<?php echo $root ; ?>ressourcesadmin/js/scripts/google-map-script.js"></script>
    <script type="text/javascript" src="<?php echo $root ; ?>ressourcesadmin/vendors/raphael/raphael-min.js"></script>

    <script type="text/javascript" src="<?php echo $root ; ?>ressourcesadmin/vendors/morris-chart/morris.min.js"></script>
    <script type="text/javascript" src="<?php echo $root ; ?>ressourcesadmin/js/scripts/charts-morris.js"></script>

<!---  ajout de script -->

    <!-- data-tables -->
    <script type="text/javascript" src="<?php echo $root ; ?>ressourcesadmin/vendors/data-tables/js/jquery.dataTables.min.js"></script>
    <!--data-tables.js - Page Specific JS codes -->
    <script type="text/javascript" src="<?php echo $root ; ?>ressourcesadmin/js/scripts/data-tables.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="<?php echo $root ; ?>ressourcesadmin/js/custom-script.js"></script>
      <script type="text/javascript" src="<?php echo $root ; ?>ressourcesadmin/js/scripts/dashboard-ecommerce.js"></script>
  <script type="text/javascript">
	$(function(){
     //$('select').material_select();
     $(".modal").modal();
		$("#btAddCategory").click(function(){
			
			$("#modalAddCategory").modal('show');
			
		});
		
	})
  </script>
  
  </body>

<!-- Mirrored from pixinvent.com/materialize-material-design-admin-template/html/collapsible-menu/layout-menu-collapsed.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2018 06:34:55 GMT -->
</html>