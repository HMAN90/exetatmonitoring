<?php
//ob_start() ;

session_set_cookie_params(3000);
session_cache_expire(1800);
SESSION_START() ;
$headers = apache_request_headers() ;
//phpinfo() ;
//echo 'joujou' ;
ini_set('display_errors','on');
//ini_set('display_errors','off');
require_once 'classes/Framework/userBundle/Controllers/UserController.php'  ;
require_once 'classes/controllers/MainController.php'  ;
require_once 'classes/controllers/AdminController.php'  ;
//require_once 'classes/controllers/DashboardController.php'  ;
//require_once 'classes/controllers/PanierController.php'  ;
//require_once 'classes/controllers/CustomerController.php'  ;
//require_once 'classes/controllers/DelivererController.php'  ;
include 'classes/Framework/routerfunctions.php'  ;

$mycontroller = new UserController() ;
$mainController = new MainController() ;
$adminController = new AdminController() ;
/*$dashboardController = new DashboardController() ;
$cartController = new PanierController() ;
$customerController = new CustomerController() ;
$delivererController = new DelivererController() ;

*/
$relativeRootLink = '' ;
$uri = $_SERVER['REQUEST_URI']  ;
$level = 1;
$globalLevel = 1 ;
$actionLevel = $level ;
//$level = 1 ;
$selfBaseUri = '' ;
//echo 'voici  l uri' . $uri ;
if($myuser = $mainController->authentSession())
{
	//echo 'cas 1' ;

	//if(($uri=='/') ||  ($uri=='/index.php'))
	if(($uri== $selfBaseUri) ||  ($uri== $selfBaseUri . 'index.php'))
	{
		$donnees = array() ;
		if(isset($headers['token'])) 
		{
			$donnees['token'] = $headers['token'] ;
			$data = allPutFilter() ;
			$mycontroller->insertMultiDataAction($donnees) ;

		}
		else
		{
			$mycontroller->accessDeniedAction() ;
		}
		
			
	}
	else
	{
		$uriArray  = explode("/",$uri) ;
		
		$donnees = 	array('root'=>$relativeRootLink) ;
		//echo 'voci l array:' . $uriArray[$level] ;
		//ROUTE GESTION UTILISATEURS
		if($uriArray[$level]=="mobile")
		{
			$actionLevel = $globalLevel + 1 ;
			$relativeRootLink = computeRelativeRootLink($globalLevel,$actionLevel) ;
			$mainController->indexAction(array('root'=>$relativeRootLink,'module'=>'mobileApp')) ;
		}
		elseif($uriArray[$level]=="products")
		{
			//$donnees = postFilter(array('email','password')) ;
			include ('router/productsroute.php') ;
		}
		elseif($uriArray[$level]=="categories")
		{
			//$donnees = postFilter(array('email','password')) ;
			include ('router/categoriesroute.php') ;
		}
		elseif($uriArray[$level]=="cart")
		{
			include ('router/cartroute.php') ;
		}
		elseif($uriArray[$level]=="pay")
		{
			include ('router/paymentroute.php') ;
		}
		elseif($uriArray[$level]=="orders")
		{
			include ('router/ordersroute.php') ;
		}
		elseif($uriArray[$level]=="contact")
		{
			$level = $globalLevel + 1 ;

			$actionLevel = $level ;
			$relativeRootLink = computeRelativeRootLink($globalLevel,$actionLevel) ;
			$donnees = array('root'=>$relativeRootLink) ;
			if(isset($uriArray[$actionLevel+1]) &&($uriArray[$actionLevel+1]=="mobile"))
			{
				$actionLevel = $globalLevel + 1 ;
				$relativeRootLink = computeRelativeRootLink($globalLevel,$actionLevel) ;
				$donnees = array('root'=>$relativeRootLink,'module'=>'mobileApp') ;
				
			}
			$mainController->contactAction($donnees) ;
		}
		elseif($uriArray[$level]=="about")
		{
			$level = $globalLevel + 1 ;

			$actionLevel = $level ;
			$relativeRootLink = computeRelativeRootLink($globalLevel,$actionLevel) ;
			$donnees = array('root'=>$relativeRootLink) ;
			if(isset($uriArray[$actionLevel+1]) && ($uriArray[$actionLevel+1]=="mobile"))
			{
				$actionLevel = $globalLevel + 1 ;
				$relativeRootLink = computeRelativeRootLink($globalLevel,$actionLevel) ;
				$donnees = array('root'=>$relativeRootLink,'module'=>'mobileApp') ;
				
			}
			$mainController->aboutAction($donnees) ;
		}
		elseif($uriArray[$level]=="logout")
		{
			$level = $globalLevel + 1 ;

			$actionLevel = $level ;
			$relativeRootLink = computeRelativeRootLink($globalLevel,$actionLevel) ;
			$donnees = array('root'=>$relativeRootLink) ;
			if(isset($uriArray[$actionLevel+1]) &&($uriArray[$actionLevel+1]=="mobile"))
			{
				$actionLevel = $globalLevel + 1 ;
				$relativeRootLink = computeRelativeRootLink($globalLevel,$actionLevel+1) ;
				$donnees = array('root'=>$relativeRootLink,'module'=>'mobileApp') ;
				
			}
			$mycontroller->logoutAction($donnees) ;
			
			
		}
		elseif($uriArray[$level]=="login")
		{
				//$donnees = postFilter(array('email','password')) ;
				include ('router/loginroute.php') ;
		}
		elseif ($uriArray[$level]=="dashboard") {
			if($myuser['role']=="provider")
			{
				include ('router/dashboardroute.php') ;
			}
			else
			{
				$actionLevel = $globalLevel + 1 ;
				$relativeRootLink = computeRelativeRootLink($globalLevel,$actionLevel) ;
				$mainController->redirect( $relativeRootLink . 'login/') ;
			}
		}
		elseif($uriArray[$level]=="admin")
		{
			if($myuser['role']=="superadmin")
			{
				include ('router/adminroute.php') ;
			}
			else
			{
				$actionLevel = $globalLevel + 1 ;
				$relativeRootLink = computeRelativeRootLink($globalLevel,$actionLevel) ;
				$mycontroller->accessDeniedAction(array('root'=>$relativeRootLink)) ;
			}
		}
		elseif($uriArray[$level]=="providers")
		{
			include ('router/providersroute.php') ;
			
		}
		elseif($uriArray[$level]=="cpanel")
		{
			if($myuser['role']=="customer")
			{
				include ('router/customersroute.php') ;
			}
			else
			{
				$actionLevel = $globalLevel + 1 ;
				$relativeRootLink = computeRelativeRootLink($globalLevel,$actionLevel) ;
				$mycontroller->accessDeniedAction(array('root'=>$relativeRootLink)) ;
			}
		}
		elseif($uriArray[$level]=="deliverypanel")
		{
			if($myuser['role']=="delivery_service")
			{
			include ('router/deliverersroute.php') ;
			}
			else
			{
				$actionLevel = $globalLevel + 1 ;
				$relativeRootLink = computeRelativeRootLink($globalLevel,$actionLevel) ;
				$mycontroller->accessDeniedAction(array('root'=>$relativeRootLink)) ;
			}
		}
		elseif($uriArray[$level]=='')// il s agit d une requete de ressource
		{
			$mainController->indexAction(array('root'=>'')) ;
		}
		//ROUTE GESTION DES CLIENTS
		
		
			
		
	}
}
else
{
	//echo 'cas 2' ;
	/*if(($uri== $selfBaseUri) ||  ($uri== $selfBaseUri . 'index.php'))
	{

		$mainController->indexAction(array('root'=>'')) ;
	}
	*/
	$uriArray  = explode("/",$uri) ;
	if(!((isset($uriArray[$level])) && (substr($uriArray[$level],0,1)!="?") && ($uriArray[$level]!="") ))
	{
		$mainController->indexAction(array('root'=>'')) ;
	}
	else
	{
		$donnees = 	array('root'=>$relativeRootLink) ;
		//echo 'voci l array:' . $uriArray[$level] ;
		//ROUTE GESTION UTILISATEURS
		if($uriArray[$level]=="mobile")
		{
			$actionLevel = $globalLevel + 1 ;
			$relativeRootLink = computeRelativeRootLink($globalLevel,$actionLevel) ;
			$mainController->indexAction(array('root'=>$relativeRootLink,'module'=>'mobileApp')) ;
		}
		elseif($uriArray[$level]=="api")
		{
			include ('router/apiroute.php') ;
		}
		elseif($uriArray[$level]=="pay")
		{
			include ('router/paymentroute.php') ;
		}
		elseif($uriArray[$level]=="orders")
		{
			include ('router/ordersroute.php') ;
		}
		
		elseif($uriArray[$level]=="login")
		{
			
				//$donnees = postFilter(array('email','password')) ;
				include ('router/loginroute.php') ;
			
			
		}
		elseif($uriArray[$level]=="logout")
		{
			$level = $globalLevel + 1 ;

			$actionLevel = $level ;
			$relativeRootLink = computeRelativeRootLink($globalLevel,$actionLevel) ;
			$donnees = array('root'=>$relativeRootLink) ;
			if(isset($uriArray[$actionLevel+1]) &&($uriArray[$actionLevel+1]=="mobile"))
			{
				$actionLevel = $globalLevel + 1 ;
				$relativeRootLink = computeRelativeRootLink($globalLevel,$actionLevel+1) ;
				$donnees = array('root'=>$relativeRootLink,'module'=>'mobileApp') ;
				
			}
			$mycontroller->logoutAction($donnees) ;
			
			
		}
		elseif($uriArray[$level]=="signin")
		{
				//$donnees = postFilter(array('email','password')) ;
				include ('router/signinroute.php') ;
		}
		elseif($uriArray[$level]=="products")
		{
			//$donnees = postFilter(array('email','password')) ;
			include ('router/productsroute.php') ;
		}
		elseif($uriArray[$level]=="categories")
		{
			//$donnees = postFilter(array('email','password')) ;
			include ('router/categoriesroute.php') ;
		}
		elseif($uriArray[$level]=="contact")
		{
			$level = $globalLevel + 1 ;


			$actionLevel = $level ;
			$relativeRootLink = computeRelativeRootLink($globalLevel,$actionLevel) ;
			$donnees = array('root'=>$relativeRootLink) ;
			if((isset($uriArray[$actionLevel+1])) && ($uriArray[$actionLevel+1]=='mobile'))
			{
				$relativeRootLink = computeRelativeRootLink($globalLevel,$actionLevel+2) ;
				$donnees['module'] = 'mobileApp' ;
				$donnees['root'] = $relativeRootLink ;
			}
			$mainController->contactAction($donnees) ;
		}
		elseif($uriArray[$level]=="about")
		{
			$level = $globalLevel + 1 ;


			$actionLevel = $level ;
			$relativeRootLink = computeRelativeRootLink($globalLevel,$actionLevel) ;
			$donnees = array('root'=>$relativeRootLink) ;
			if((isset($uriArray[$actionLevel+1])) && ($uriArray[$actionLevel+1]=='mobile'))
			{
				$relativeRootLink = computeRelativeRootLink($globalLevel,$actionLevel+2) ;
				$donnees['module'] = 'mobileApp' ;
				$donnees['root'] = $relativeRootLink ;
			}
			$mainController->aboutAction($donnees) ;
		}
		elseif($uriArray[$level]=="api")
		{
			include ('router/apiroute.php') ;
		}
		else
		{
			$relativeRootLink = "" ;
			//$i = 2 ;
			$i = $level  ;

			$length = count($uriArray);

			//echo "la taille :" .  $length ;		
			if((substr($uriArray[$length - 1],0,1)=="?") || ($uriArray[$length - 1]=="") )
			{
				$length = $length - 1 ;
			}
			while($i < $length )
			{
				//echo "execution" ;
				$relativeRootLink .= '../' ;
				$i++ ;
			}
			//echo 'execution de la redirection' ;
			$mainController->redirect( $relativeRootLink ) ;
			//$mainController->redirect( $relativeRootLink . 'login.php?mode=error&message=incorrect password')  ;
			//echo 'redirection:' . $relativeRootLink . 'login.php?' ;
			//$mainController->redirect( $relativeRootLink . 'login.php?uri=' . $uri . '&mode=error&message=incorrect password')  ;
			//$mycontroller->loginAction() ;
		}
	}
		
	
}
	
	function getRootLink($level)
	{
		$relativeRootLink = "" ;
		//$i = 2 ;
		$i = $level + 1 ;

		$length = count($uriArray);

		//echo "la taille :" .  $length ;		
		if((substr($uriArray[$length - 1],0,1)=="?") || ($uriArray[$length - 1]=="") )
		{
			$length = $length - 1 ;
		}
		while($i < $length )
		{
			//echo "execution" ;
			$relativeRootLink .= '../' ;
			$i++ ;
		}
		return $relativeRootLink ;
	}
// if(isset($_SESSION['id_user']))
// {
	
// }
// else
// {

// }

	function computeRelativeRootLink ($globalLevel,$actionLevel)
	{
		$i = 0 ;
		$relativeRootLink = '' ;
		while($i < ($actionLevel - $globalLevel))
		{
			$i++ ;
			$relativeRootLink .= '../' ;
		}
		//echo 'voici les entréées :' . 
		return $relativeRootLink ;
	}

?>