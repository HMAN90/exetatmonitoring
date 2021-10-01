<?php  

//require_once('connexion.php');
$rootPath = dirname(__FILE__). '/../../' ;
$root = '../' ;
$cavaliersList = $data['cavaliersList'] ;
$categoriesList = $data['categoriesList'] ;
$mode = $data['mode'] ;
function getCategorie($idCateg,$categoriesList)
{
	foreach($categoriesList as $categ)
	{
		if($categ['id_categorie']==$idCateg)
		{
			return $categ ;
		}
	}
}
function uncheckCategories($categoriesList)
{
	$i= 0 ;
	foreach($categoriesList as $categ)
	{
		$categoriesList[$i]['checked'] = 'no' ;
		$categoriesList[$i]['cheval'] = '' ;
		$i++ ;
	}
	return $categoriesList ;
}
function checkCategorie($categoriesList,$idCategTab,$categChevalTab)
{
	// print_r($categChevalTab) ;
	$i= 0 ;
	foreach($categoriesList as $categ)
	{
		if(in_array($categoriesList[$i]['id_categorie'],$idCategTab))
		{
			// echo 'il "est dans l array' ;
			$categoriesList[$i]['checked'] = 'yes' ;
			$categoriesList[$i]['cheval'] = $categChevalTab['cheval_'.$categoriesList[$i]['id_categorie'] ] ;
			
		}
		else
		{
			// echo 'il n est pas dans l array' ;
			$categoriesList[$i]['checked'] = 'no' ;
			$categoriesList[$i]['cheval'] ='' ;
		}
		
		$i++ ;
	}
	return $categoriesList ;
}
 ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wrappixel.com/demos/admin-templates/material-pro/horizontal/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 May 2018 14:53:49 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $root  ;  ?>ressources/images/favicon.png">
    <title>CSI2018</title>
    <!-- fontawsome for icons -->
    <link href="<?php echo $root  ;  ?>ressources/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $root  ;  ?>ressources/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?php echo $root  ;  ?>ressources/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Page plugins css -->
    <link href="<?php echo $root  ;  ?>ressources/plugins/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <!-- Color picker plugins css -->
    <link href="<?php echo $root  ;  ?>ressources/plugins/jquery-asColorPicker-master/css/asColorPicker.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="<?php echo $root  ;  ?>ressources/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker plugins css -->
    <link href="<?php echo $root  ;  ?>ressources/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="<?php echo $root  ;  ?>ressources/plugins/daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="<?php echo $root  ;  ?>ressources/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo $root  ;  ?>ressources/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="<?php echo $root  ;  ?>ressources/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="<?php echo $root  ;  ?>ressources/plugins/css-chart/css-chart.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="<?php echo $root  ;  ?>ressources/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="<?php echo $root  ;  ?>ressources/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="<?php echo $root  ;  ?>ressources/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo $root  ;  ?>ressources/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo $root  ;  ?>ressources/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="<?php echo $root  ;  ?>ressources/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar " style="background: #ed0000 !important;">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> 
        </svg>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->

    <div id="main-wrappe" style="background: #ed0000 !important;">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include($rootPath . 'ressources/includes/admin_menu.php');  ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper"  style="background: #ed0000">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid" style="background: #ed0000">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
            
		
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->

                <!-- End pagination -->
                
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8" id="tableauEcole"><br>
                        <div class="card">
                            <div class="card-body">
                                
                                <div>
								<table class="table table-striped">
								<tr>
								<td>#</td><td>Nom</td><td>Code</td><td>Categorie</td><td>Photo</td><td>Action</td><td><span class="btn btn-primary" id="btAddCav"></span>Ajouter(+)</td>
								</tr>
								<?php
									$i = 1 ;
									$j= 0 ;
									$k = 0 ;
									$cavChanged = false ;
									$categChanged = false ;
									$curCateg = null ;
									$curIdCav = null ;
									$curCav = null ;
									$mycategories = null;
									$idCategTab = array() ;
									$categChevalTab = array() ;
									$modalCategories = '' ;
									$categoriesAppart = '' ;
									foreach($cavaliersList as $cav)
									{
										// echo '*************<br>'  ;
										// print_r($cav) ;
										// echo 'appel:' . $i . '**id_cavaier vaut :'. $cav['id_cavalier'] . ' et valait:' . $curIdCav;
										if($i >1)
										{
											if($cav['id_cavalier'] !=  $curIdCav)
											{
												$k++ ;
												
												// echo 'je detecte le changemnt<br>' ;
												//************************debut cloture élément precedent**************
												// echo 'la liste des categories checkées est:' ;
												
												$mycategoriesList  = checkCategorie($categoriesList,$idCategTab,$categChevalTab) ;
												//print_r($mycategoriesList) ;
												$modalCategories = '' ;
												$categoriesAppart = '' ;
												foreach($mycategoriesList as $categ)
												{
													$modalCategories .= '<div class="checkbox checkbox-primary pull-left p-t-0">
													<input type="checkbox" class="mycheckbox" id="' . $curCav['id_cavalier'] .'_id_categorie_' . $categ['id_categorie'] . '"  name="id_categorie_' . $categ['id_categorie'] . '"';
														if($categ['checked']=='yes')
														{
															$modalCategories .= ' checked' ;
															$categoriesAppart .= $categ['designation'] . ',' ;
														}												 $modalCategories .= '>
													<label class="mylabel" id="label_' . $curCav['id_cavalier'] .'_id_categorie_' . $categ['id_categorie'] . '" for="' . $curCav['id_cavalier'] .'_id_categorie_' . $categ['id_categorie'] . '">' . $categ['designation'] . ' </label>
													<input type="text" placeholder="cheval" name="cheval_' . $categ['id_categorie'] . '" value="' . $categ['cheval'] . '">
												</div>' ;
													/*$modalCategories .= 
													'<div>
													
														<label>' . $categ['designation'] . '</label><input type="checkbox" class="filled-in chk-col-red" style="display:inline-block" name="id_categorie_' . $categ['id_categorie'] . '"' ;
														if($categ['checked']=='yes')
														{
															$modalCategories .= 'checked' ;
														}
														$modalCategories .= '>
													</div>' ;*/
												}
																								?>
													
															<tr>
															
													<td><input type="hidden" name="id_cav" id="idCav<?php echo $curCav['id_cavalier'] ;  ?>" value="<?php echo $curCav['id_cavalier'] ;  ?>"><?php  echo $k ; ?></td><td id="tdName<?php echo $curCav['id_cavalier'] ;?>"><?php  echo $curCav['name']  ; ?></td><td><?php  echo $curCav['code_cavalier']  ; ?></td><td><?php  echo $categoriesAppart ; ?></td><td><img class="" style="width:20%" src="<?php echo $root. 'media/cavaliers/'. $curCav['url_photo']  ;?>"></td><td><button class="btModifCav btn btn-warning" id="btModifCav<?php  echo $curCav['id_cavalier']  ; ?>"><i class="fa fa-pencil"></i></button><button class="btDelCav btn btn-danger" id="btDelCav<?php  echo $curCav['id_cavalier']  ; ?>"><i class="fa fa-trash"></i></button></td>
													<div  class="modal"   role="dialog" id="formModalModifCav<?php  echo $curCav['id_cavalier']  ; ?>">
													<div class="modal-content"  style="overflow:scroll ;">
														<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	<h4 class="modal-title" style="color:#daa520;">VODACOM CSI2018</h4>
														</div>
														<div  class="modal-body">
															<form method="post" action="<?php  echo $root ; ?>admin/cavaliers.php"  enctype="multipart/form-data">
																<div>
																<label>Nom:</label><input type="text" name="name" value="<?php echo $curCav['name'] ; ?>" class="form-control">
																</div>
																<div class="col-md-12">
																
																<label>Code du cavalier:</label><input type="text" name="code_cavalier" value="<?php echo $curCav['code_cavalier'] ; ?>" class="col-md-4" required>
																</div>
																<div class="col-md-12">
																<label>Catégorie:</label><div name="categorie">
																<?php echo $modalCategories ; ?>
																</div>
																</div>
																<br>
																<div class ="row">
																<label>Photo:</label><input type="file" name="photo" value="" class="col-md-4" >
																</div>
																
																	
																	<input type="hidden" name="operation" id="" value="exeModifCav">					
																	<input type="hidden" name="id_cav" id="" value="<?php echo $curCav['id_cavalier'] ; ?>">					
																	<div>
																	<label> <input type="submit" name="submitModifCav" id="submitModifCav<?php echo $curCav['id_cavalier'] ; ?>" class="submitModifCav" style="display:none ;"></label><input type="button" name="" id="btSubmitModifCav<?php echo $curCav['id_cavalier'] ; ?>" class="btSubmitModifCav" value="Modifier">
																	</div>
															</form>
														</div>
														
													</div>
												</div>
													</tr>
															<?php
															

												// print_r($categoriesList) ;
												//********fin cloture************
												$modalCategories  = '' ;
												$j = 0 ;
												$idCategTab= array() ;
												$categChevalTab= array() ;
												$idCategTab[$j]=$cav['id_categorie'] ;
												$categChevalTab['cheval_'.$cav['id_categorie']] = $cav['cheval'] ;
												
												$categoriesList = uncheckCategories($categoriesList) ;
												$cavChanged = true ;
												$curIdCav = $cav['id_cavalier'] ;
												$curCav = $cav ;
												
											}
											else
											{
												// echo 'on continue' ;
												$idCategTab[$j]=$cav['id_categorie'] ;
												$categChevalTab['cheval_'.$cav['id_categorie']] = $cav['cheval'] ;
											}

										}
										else
										{
											$modalCategories  = '' ;
												$j = 0 ;
												$idCategTab= array() ;
												$idCategTab[$j]=$cav['id_categorie'] ;
												$categChevalTab['cheval_'.$cav['id_categorie']] = $cav['cheval'] ;
												
												$categoriesList = uncheckCategories($categoriesList) ;
												$cavChanged = true ;
												$curIdCav = $cav['id_cavalier'] ;
												$curCav = $cav ;
										}
										$j++ ;
										$i++ ;
										$categ = getCategorie($cav['categorie'],$categoriesList) ;
										if(!$categ)
										{
											$categ = array('id_categorie'=>0, 'designation'=>'Inconnue') ;
										}
									}
								if(true)
											{
												$k++ ;
												
												echo 'je detecte le changemnt<br>' ;
												//************************debut cloture élément precedent**************
												echo 'la liste des categories checkées est:' ;
												
												$mycategoriesList  = checkCategorie($categoriesList,$idCategTab,$categChevalTab) ;
												// print_r($mycategoriesList) ;
												$modalCategories = '' ;
												$categoriesAppart = '' ;
												foreach($mycategoriesList as $categ)
												{
													$modalCategories .= '<div class="checkbox checkbox-primary pull-left p-t-0">
													<input type="checkbox" class="mycheckbox" id="' . $cav['id_cavalier'] .'_id_categorie_' . $categ['id_categorie'] . '"  name="id_categorie_' . $categ['id_categorie'] . '"';
														if($categ['checked']=='yes')
														{
															$modalCategories .= ' checked' ;
															$categoriesAppart .= $categ['designation'] . ',' ;
														}												 $modalCategories .= '>
													<label class="mylabel" id="label_' . $cav['id_cavalier'] .'_id_categorie_' . $categ['id_categorie'] . '" for="' . $cav['id_cavalier'] .'_id_categorie_' . $categ['id_categorie'] . '">' . $categ['designation'] . ' </label>
													<input type="text" placeholder="cheval" name="cheval_' . $categ['id_categorie'] . '"
													value="' . $categ['cheval'] . '">
												</div>' ;
													/*$modalCategories .= 
													'<div>
													
														<label>' . $categ['designation'] . '</label><input type="checkbox" class="filled-in chk-col-red" style="display:inline-block" name="id_categorie_' . $categ['id_categorie'] . '"' ;
														if($categ['checked']=='yes')
														{
															$modalCategories .= 'checked' ;
														}
														$modalCategories .= '>
													</div>' ;*/
												}
																								?>
													
															<tr>
															
													<td><input type="hidden" name="id_cav" id="idCav<?php echo $curCav['id_cavalier'] ;  ?>" value="<?php echo $curCav['id_cavalier'] ;  ?>"><?php  echo $k ; ?></td><td id="tdName<?php echo $curCav['id_cavalier'] ;?>"><?php  echo $curCav['name']  ; ?></td><td><?php  echo $curCav['code_cavalier']  ; ?></td><td><?php  echo $categoriesAppart ; ?></td><td><img class="" style="width:20%" src="<?php echo $root. 'media/cavaliers/'. $curCav['url_photo']  ;?>"></td><td><button class="btModifCav btn btn-warning" id="btModifCav<?php  echo $curCav['id_cavalier']  ; ?>"><i class="fa fa-pencil"></i></button><button class="btDelCav btn btn-danger" id="btDelCav<?php  echo $curCav['id_cavalier']  ; ?>"><i class="fa fa-trash"></i></button></td>
													<div  class="modal"   role="dialog" id="formModalModifCav<?php  echo $curCav['id_cavalier']  ; ?>">
													<div class="modal-content"  style="overflow:scroll ;">
														<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	<h4 class="modal-title" style="color:#daa520;">VODACOM CSI2018</h4>
														</div>
														<div  class="modal-body">
															<form method="post" action="<?php  echo $root ; ?>admin/cavaliers.php"  enctype="multipart/form-data">
																<div>
																<label>Nom:</label><input type="text" name="name" value="<?php echo $curCav['name'] ; ?>" class="form-control">
																</div>
																<div class="col-md-12">
																
																<label>Code du cavalier:</label><input type="text" name="code_cavalier" value="<?php echo $curCav['code_cavalier'] ; ?>" class="col-md-4" required>
																</div>
																<div class="col-md-12">
																<label>Catégorie:</label><div name="categorie">
																<?php echo $modalCategories ; ?>
																</div>
																</div>
																<br>
																<div class ="row">
																<label>Photo:</label><input type="file" name="photo" value="" class="col-md-4" >
																</div>
																
																	
																	<input type="hidden" name="operation" id="" value="exeModifCav">					
																	<input type="hidden" name="id_cav" id="" value="<?php echo $curCav['id_cavalier'] ; ?>">					
																	<div>
																	<label> <input type="submit" name="submitModifCav" id="submitModifCav<?php echo $curCav['id_cavalier'] ; ?>" class="submitModifCav" style="display:none ;"></label><input type="button" name="" id="btSubmitModifCav<?php echo $curCav['id_cavalier'] ; ?>" class="btSubmitModifCav" value="Modifier">
																	</div>
															</form>
														</div>
														
													</div>
												</div>
													</tr>
															<?php
															

												// print_r($categoriesList) ;
												//********fin cloture************
												$modalCategories  = '' ;
												$j = 0 ;
												$idCategTab= array() ;
												$categChevalTab = array() ;
												$idCategTab[$j]=$cav['id_categorie'] ;
												$categChevalTab['cheval_'.$cav['id_categorie']] = $cav['cheval'] ;
												$categoriesList = uncheckCategories($categoriesList) ;
												$cavChanged = true ;
												$curIdCav = $cav['id_cavalier'] ;
												$curCav = $cav ;
												
											}
								?>
								
								</table>
								</div>
								
                               <div  class="modal"   role="dialog" id="formModalAddCav">
								<div class="modal-content"  style="overflow:scroll ;">
									<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title" style="color:#daa520;">VODACOM CSI2018</h4>
									</div>
									<div  class="modal-body">
										<form method="post" action="<?php  echo $root ; ?>admin/cavaliers.php"  enctype="multipart/form-data">
											<div>
											<label>Nom:</label><input type="text" name="name" value="" class="form-control">
											</div>
											<div class="col-md-12">
											
											<label>Code du cavalier:</label><input type="text" name="code_cavalier" value="" class="col-md-4" required>
											</div>
											<div>
											<label>Catégorie:</label><div><?php
												foreach($categoriesList as $mycateg)
												{
													?>
													 <label><?php echo  $mycateg['designation']  ; ?></label><input type="checkbox" name="id_categorie_<?php echo  $mycateg['id_categorie']  ; ?>"  ><?php echo $mycateg['designation']  ; ?></option>
													<?php
												}
											?>
												</div>
											</div>
											<div>
											<label>Photo:</label><input type="file" name="photo" value="" class="col-md-4" >
											</div>
											
												
												<input type="hidden" name="operation" id="" value="exeAddCav">					
												<div>
												<label> <input type="submit" name="submitAddCav" id="submitAddCav" class="submitAddCav" style="display:none ;"></label><input type="button" name="" id="btSubmitAddCav" class="" value="Enregistrer">
												</div>
										</form>
									</div>
									
								</div>
							</div>
							<div  class="modal"   role="dialog" id="formModalDelCav">
				<div class="modal-content"  style="overflow:scroll ;">
					<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" style="color:#daa520;">VODACOM CSI2018</h4>
					</div>
					<div  class="modal-body">
					<form method="post" action="<?php  echo $root ; ?>admin/cavaliers.php">
						<div>Voulez-vous vraiment supprimer ce cavalier de votre base de données?<span id="spanCavToDelete"></span></div>
						<div><span class="btn btn-danger" id="btSubmitDelCav">Confirmer</span> <span class="btn btn-warning" id="btAbortDelCav">Annuler</span></div>
						<input type="hidden" id="cavToDeleteId" name="id_cav" value="" >
						<input type="hidden" name="operation" id="" value="exeDelCav">
						<input type="submit" name="submitDelCav" id="submitDelCav" style="display:none ;">
						
					</form>
					</div>
					
				</div>
			</div>
                                
                            </div>
                        </div> 
                    </div>
                    <div class="col-lg-3"></div>
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="<?php echo $root  ;  ?>ressources/javascript:void(0)"><img src="<?php echo $root  ;  ?>ressources/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="<?php echo $root  ;  ?>ressources/javascript:void(0)"><img src="<?php echo $root  ;  ?>ressources/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="<?php echo $root  ;  ?>ressources/javascript:void(0)"><img src="<?php echo $root  ;  ?>ressources/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="<?php echo $root  ;  ?>ressources/javascript:void(0)"><img src="<?php echo $root  ;  ?>ressources/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="<?php echo $root  ;  ?>ressources/javascript:void(0)"><img src="<?php echo $root  ;  ?>ressources/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="<?php echo $root  ;  ?>ressources/javascript:void(0)"><img src="<?php echo $root  ;  ?>ressources/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="<?php echo $root  ;  ?>ressources/javascript:void(0)"><img src="<?php echo $root  ;  ?>ressources/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="<?php echo $root  ;  ?>ressources/javascript:void(0)"><img src="<?php echo $root  ;  ?>ressources/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
			
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <?php include($rootPath . 'ressources/includes/footer.php');  ?>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>

    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo $root  ;  ?>ressources/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo $root  ;  ?>ressources/plugins/popper/popper.min.js"></script>
    <script src="<?php echo $root  ;  ?>ressources/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo $root  ;  ?>ressources/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo $root  ;  ?>ressources/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo $root  ;  ?>ressources/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo $root  ;  ?>ressources/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo $root  ;  ?>ressources/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--stickey kit -->
    <script src="<?php echo $root  ;  ?>ressources/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo $root  ;  ?>ressources/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo $root  ;  ?>ressources/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo $root  ;  ?>ressources/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="<?php echo $root  ;  ?>ressources/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="<?php echo $root  ;  ?>ressources/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="<?php echo $root  ;  ?>ressources/plugins/d3/d3.min.js"></script>
    <script src="<?php echo $root  ;  ?>ressources/plugins/c3-master/c3.min.js"></script>
    <!-- Vector map JavaScript -->
    <script src="<?php echo $root  ;  ?>ressources/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo $root  ;  ?>ressources/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="<?php echo $root  ;  ?>ressources/js/dashboard2.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo $root  ;  ?>ressources/plugins/styleswitcher/jQuery.style.switcher.js"></script>
     <!-- Plugin JavaScript -->
            <script src="<?php echo $root  ;  ?>ressources/plugins/moment/moment.js"></script>
            <script src="<?php echo $root  ;  ?>ressources/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
            <!-- Clock Plugin JavaScript -->
            <script src="<?php echo $root  ;  ?>ressources/plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
            <!-- Color Picker Plugin JavaScript -->
            <script src="<?php echo $root  ;  ?>ressources/plugins/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
            <script src="<?php echo $root  ;  ?>ressources/plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
            <script src="<?php echo $root  ;  ?>ressources/plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
            <!-- Date Picker Plugin JavaScript -->
            <script src="<?php echo $root  ;  ?>ressources/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
            <!-- Date range Plugin JavaScript -->
            <script src="<?php echo $root  ;  ?>ressources/plugins/timepicker/bootstrap-timepicker.min.js"></script>
            <script src="<?php echo $root  ;  ?>ressources/plugins/daterangepicker/daterangepicker.js"></script>
            <script src="<?php echo $root  ;  ?>ressources/js/widget-data.js"></script>
            <script>
            // MAterial Date picker
            jQuery('#datepicker-inline').datepicker({
                todayHighlight: true,
            });
            </script>
			<script>
			$(function(){
			
			var mode = "<?php  echo $mode  ; ?>" ;
			if(mode=="successInsert")
			{
				alert("L'insertion s'est effectuée avec success") ;
			}
			else if(mode=="successDelete")
			{
				alert("La suppression s'est effectuée avec success") ;
			}
			else if(mode=="successModif")
			{
				alert("La modification s'est effectuée avec success") ;
			}
			
			$("#btAddCav").click(function(){
			$("#formModalAddCav").modal('show') ;
			
		}) ;
		$("#btSubmitAddCav").click(function(){
			
			$("#submitAddCav").click() ;
		});
		$(".btSubmitAddCav").click(function(){
			var index = $(this).attr('id').substring(14 , $(this).attr('id').lenght ) ;
			$("#submitModifCav"+index).click() ;
		});
		$(".btModifCav").click(function(){
			var index = $(this).attr('id').substring(10 , $(this).attr('id').lenght ) ;
			$("#formModalModifCav"+index).modal('show') ;
			
			
		}) ;
		$(".btDelCav").click(function(){
			var index = $(this).attr('id').substring(8 , $(this).attr('id').lenght ) ;
			// alert('demande de suppression à l ement:' + index) ;
			$("#cavToDeleteId").val($("#idCav"+ index).val()) ;
			$("spanCavToDelete").html($("#tdName"+ index).html() ) ;
			$("#formModalDelCav").modal('show') ;
			
		}) ;
		$("#btSubmitDelCav").click(function(){
			
			$("#submitDelCav").click() ;
		});
		$(".btSubmitModifCav").click(function(){
			var index = $(this).attr('id').substring(16 , $(this).attr('id').lenght ) ;
		
			$("#submitModifCav" + index).click() ;
		});
		$("#btAbortDelCav").click(function(){
			
			$("#formModalDelCav").modal('hide') ;
		});
		$('.mylabel').click(function(){
			var index = $(this).attr('id').substring(5,$(this).attr('id').indexOf('_')) ;
			
			var idCheck = $(this).attr('id').substring(5,$(this).attr('id').lenght) ;
			
		}) ;
		$(".mycheckbox").click(
		function()
		{
			/*alert('je suis clické') ;
			if($(this).prop('checked'))
			{
				$(this).prop('checked',true) ;
			}
			else
			{
				$(this).prop('checked',false) ;
			}
			*/
		}
		)
			})
			</script>
</body>


<!-- Mirrored from wrappixel.com/demos/admin-templates/material-pro/horizontal/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 May 2018 14:55:48 GMT -->
</html>
