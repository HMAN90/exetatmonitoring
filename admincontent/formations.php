<?php
session_start() ;
ob_start() ;
$root = dirname(__FILE__) . '/../' ;
require_once  $root . 'classes/controllers/AdminController.php' ;
require_once   $root . 'classes/Framework/SecurityManager.php' ;
require_once   $root . 'classes/Framework/routerfunctions.php' ;
$relativeRootLink = '../' ;
$mycontroller = new AdminController() ;
$mySM = new SecurityManager($root. 'config/access.conf') ;
$levelRequired ="adminSuperUser" ;
// echo 'le niveau de l utilisateur est :' . $mycontroller->getUserLevelNumber() ;

if($mycontroller->getUserLevelNumber()>= $mySM->getLevelNumber($levelRequired))
{
	if(!(isset($_GET['operation'])  || isset($_POST['operation']) ))
	{

		$donnees = allGetFilter() ;
		$donnees['root'] = $relativeRootLink ;
		$mycontroller->seeFormationsAction($donnees);

	}
	elseif((isset($_GET['operation'])) && (!isset($_POST['operation'])))
	{
	//**************************************tarif
		if($_GET['operation']=="validMobilePaiement")
		{
			echo 'getol' ;
				$donnees = allGetFilter() ;
		$donnees['root'] = $relativeRootLink ;
		$mycontroller->validMobilePaiementAction($donnees);
		}
		elseif($_GET['operation']=="validCashPaiement")
		{
			
				$donnees = allGetFilter() ;
		$donnees['root'] = $relativeRootLink ;
		$mycontroller->validCashPaiementAction($donnees);
		}
		elseif($_GET['operation']=="searchUsers")
		{
			
			if($donnees = getFilter(array('email')))
			{
				$donnees = allGetFilter() ;
				$donnees['saving_step']= 2 ;
				$donnees['root'] = $relativeRootLink ;
				$mycontroller->searchUsersAction($donnees);

			}
			
		}
		
		elseif($_GET['operation']=="errorInsertDevise")
		{
				$levelRequired ="" ;
			if($mycontroller->getUserLevelNumber()>= $mySM->getLevelNumber($levelRequired))
			{
				$mycontroller->errorInsertDeviseAction() ;
			}
			else
			{
				$mycontroller->gotoLoginAction(array('root'=>$relativeRootLink)) ;
			}
			
			//$mycontroller->errorInsertDeviseAction() ;
		}
		
		
		//**************************************type_sms
		
	}
	elseif(isset($_POST['operation'])) // ceci ne dlit pas obligatoirement etre dans le cas de elseif car on peut envoyer un get et post à la fois
	{

	//****************************tarif*************************
		if($_POST['operation']=="exeSaveFormation")
		{
			if($donnees = postFilter( array('id_categorie','date_debut','date_fin','titre','contenu')))
			{
				$donnees = allPostFilter() ;
				$donnees['root'] = $relativeRootLink ;
				$files = array() ;
				if($fichiers = fileFilter(array('url_photo'),array('pdf','jpg','svg','png','bmp','') , 'whitelist'))
				{
						$files['url_photo'] = $fichiers ;
					//	$donnees['root'] = $relativeRootLink ;	
				}
				if($fichiers = fileFilter(array('url_video'),array('flv','mp4','') , 'whitelist'))
				{
						$files['url_photo'] = $fichiers ;
					//	$donnees['root'] = $relativeRootLink ;	
				}
				if($files )
				{
					$donnees['files'] = $files ;
				}
				$mycontroller->exeSaveFormationAction($donnees) ;
			}
			
		}
		if($_POST['operation']=="exeModifFormation")
		{
			if($donnees = postFilter( array('id_categorie','date_debut','date_fin','titre','contenu','id_formation')))
			{
				$donnees = allPostFilter() ;
				$donnees['root'] = $relativeRootLink ;
				$files = array() ;
				if($fichiers = fileFilter(array('url_photo'),array('pdf','jpg','svg','png','bmp','') , 'whitelist'))
				{
						$files['url_photo'] = $fichiers ;
					//	$donnees['root'] = $relativeRootLink ;	
				}
				if($fichiers = fileFilter(array('url_video'),array('flv','mp4','') , 'whitelist'))
				{
						$files['url_photo'] = $fichiers ;
					//	$donnees['root'] = $relativeRootLink ;	
				}
				if($files )
				{
					$donnees['files'] = $files ;
				}
				$mycontroller->exeModifFormationAction($donnees) ;
			}
			
		}
	
		elseif($_POST['operation']=='exeValidMobilePaiement')
		{
			if($donnees = postFilter( array('code_transaction','method')))
			{
				$donnees['root'] = $relativeRootLink ;
				$mycontroller->exeValidMobilePaiementAction($donnees) ;
			}
		}
		elseif($_POST['operation']=='exeInValidMobilePaiement')
		{
			if($donnees = postFilter( array('code_transaction','method')))
			{
				$donnees['root'] = $relativeRootLink ;
				$mycontroller->exeInValidMobilePaiementAction($donnees) ;
			}
		}
		elseif($_POST['operation']=='exeValidCashPaiement')
		{
			if($donnees = postFilter( array('id_user')))
			{
				$donnees['root'] = $relativeRootLink ;
				$mycontroller->exeValidCashPaiementAction($donnees) ;
			}
		}
		elseif($_POST['operation']=="exeModifCav")
		{
			if($donnees = postFilter( array('id_cav','name', 'code_cavalier')))
			{
				$donnees = allPostFilter() ;
				$donnees['root'] = $relativeRootLink ;
				
				if($fichiers = fileFilter(array('photo'),array('pdf','jpg','svg','png','bmp','') , 'whitelist'))
				{
						$donnees['files'] = $fichiers ;
					//	$donnees['root'] = $relativeRootLink ;	
				}
				$mycontroller->exeModifCavAction($donnees) ;
			}
			
		}
		elseif($_POST['operation']=="")
		{
		
		
		}
		elseif($_POST['operation']=="")
		{
		
		
		}


	

	}
}
else
{
	$mycontroller->gotoLoginAction(array('root'=>$relativeRootLink)) ;
}





?>
