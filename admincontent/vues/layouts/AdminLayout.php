<?php

$location = '' ;
$gotoRacine = dirname(__FILE__) . '/../../../' ;
require_once  $gotoRacine . 'classes/Framework/Layout.php' ;
Class AdminLayout extends Layout
{
	protected $path = 'ressources/' ;
	protected $pageLink = 'index.php?' ;
	protected $rootpath = '127.0.0.1/hmoney/' ;
	protected $imagepath = '127.0.0.1/hmoney/ressources/images/' ;
	public  function __construct()
	{
		$this->path = 'ressources/' ;
	}
	public function fixDivHead()
	{
	?>
		<div>
		</div>
	
	<?php 
	}
	
	public function imagePath() 
	{
		return  '127.0.0.1/hmoney/ressources/images/' ;
	}
	public function adminHead($donnees)
	{
		$rootLink = $donnees['root'] ;
		?>
	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <link href="<?php echo $rootLink ; ?>ressources/css/bootstrap-3.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
		
				
			<link href="<?php echo $rootLink  ; ?>ressources/css/perso/mainstyle.css" rel="stylesheet"><?php   // normalement on utilise le rootpath?>
		
				
			<link href="<?php echo $rootLink  ; ?>ressources/css/perso/dashboard.css" rel="stylesheet">
		
				
			<link href="<?php echo $rootLink  ; ?>ressources/assets/js/bootstrap.min.js"  type="text/javascript" rel="">
		
				
			<link href="<?php echo $rootLink  ; ?>ressources/assets/js/jquery.js"  type="text/javascript" rel="">
<?php
	}
	public function adminDivMenu($donnees)
	{
		$connected = false ;
		if(isset($donnees['connected']))
		$connected =  $donnees['connected'] ;
	
		$location ="" ;
		if(!(isset($donnees['root'])))
		$root ="/pene_sms/" ;
		else 
		$root = $donnees['root'] ;
	// echo 'root vaut :'. $root ;
		$fromRootLocation  ;
	?>
	<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">PENE-SMS</a>
            </div>
            <div class="navbar-collapse collapse">
             <ul class="nav navbar-nav row">
			 <li class="dropdown"> <a  href="<?php echo $root ; ?>">Accueil</a> </li>
             <li class="dropdown "><a data-toggle="dropdown" href="contact-us.php"><h4>Contacts</h4></a> 
						   <ul class="dropdown-menu" style="list-style:none;">
						<?php  ?><li><a href="<?php echo $root ; ?>admin/contacts.php?operation=manageContacts">Gérer</a></li>
								<li><a href="<?php echo $root ; ?>admin/contacts.php?operation=generNumbers">Générer numéros</a></li>
						
						

					      </ul>
						  
				</li>
                <li class=""> <a data-toggle="" href="<?php echo $root ; ?>tarifs.php">tarifs</a>
                	
                </li> <li class="divider-vertical"></li>
				<?php 
				if($connected)
				{
				?>
                <li class=""> <a data-toggle="" href="<?php echo $root ; ?>dashboard/">Dashboard</a>
                	
                </li><li class="divider-vertical"></li>
				<?php  
				}
				?>
				
				 <li class=""> <a data-toggle="" href="<?php echo $root ; ?>panier.php">Panier</a> </li>
				<li class=""> <a data-toggle="" href="<?php echo $root ; ?>about.php">A propos</a> </li>
				<li class="divider-vertical"></li>
				
				
             </ul>
			 <ul style="list-style:none;" class="nav navbar-nav row pull-right">
			 <form class="navbar-form "><li class="dropdown "><a data-toggle="dropdown" href="contact-us.php"><h4>Compte</h4></a> 
						   <ul class="dropdown-menu" style="list-style:none;">
						<?php   if($connected){ ?><li><a href="<?php echo $root ; ?>logout.php">Déconnexion</a></li>
												<li><a href="<?php echo $root ; ?>login.php?operation=changePassword">changer de mot de passe</a></li>
						
						<?php } else{ ?><li><a href="<?php echo $root ; ?>signin.php">Devenir membre</a></li>
						<li><a href="<?php echo $root ; ?>login.php">Se Connecter</a></li><?php } ?>

					      </ul>
						  
				</li> 
				</form>
				</ul>
            </div>
          </div>
        </div>

      </div>
    </div>


   
	<?php 
	}
	public function divSlide($donnees)
	{
		$connected = false ;
		if(isset($donnees['connected']))
		$connected =  $donnees['connected'] ;
	
		$location ="" ;
		$root ="" ;
		$fromRootLocation  ;
	?>
	<div class="navbar-wrapper">
      <div class="container">

        
      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
         <!-- <img src="/ressources/images/Welcome.jpg" class="col-md-4" id="imgHome"   style="">-->
          <div class="container">
            <div class="carousel-caption">
              <h1><code>PENE-SMS</code></h1>
              <p>service pour votre campagne sms </p>
              <p><a class="btn btn-lg btn-primary" href="signin.php" role="button">Créer son compte</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <!--<img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide">-->
          <div class="container">
            <div class="carousel-caption">
              <h1>PENE-SMS</h1>
              <p>Accéder au Menu et demarrer votre utilisation.</p>
              <p><a class="btn btn-lg btn-primary" href="about.php" role="button">A propos</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="ressources/images/imageCandidat.jpg" class="col-md-4" id="imgHome"   style="background:transparent url('ressources/images/imageCandidat.jpg') ;">
          <div class="container">
            <div class="carousel-caption">
			
              <h1>PENE-SMS</h1>
              <p>profiter au maximum du marketing sms.</p>
           <br>
            </div>
          </div>
        </div>
      </div>
	  <!--
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	-->
<script src="/ressources/assets/js/jquery.js">
			
		</script>
		<script src="/ressources/assets/js/bootstrap.min.js">
			
		</script>
		<script>
		$(function (){
		$('.carousel').carousel();
		
			/*
			function(e)
			{
				// e.preventDefault() ;
				$(this).attr(href,"index.php") ;
			
			}
		
			*/
		});

	</script>	

   </div>
	
	<?php 
	}
	
	public function defaultHead($title)
	{
	
		$this->divHead(array('title'=>$title,
'linkstyle1'=>"ressources/css/bootstrap-3.1.1/dist/css/bootstrap.min.css",
		'linkstyle2'=>"ressources/css/perso/mainstyle.css",
		'linkstyle3'=>"ressources/css/perso/caroussel.css",
		'linkscript1'=>"ressources/assets/js/bootstrap.min.js",
		'linkscript2'=>"ressources/assets/js/jquery.js",
		)) ;
		
	}
	public function  printAuthentForm($mode)
	{
	
	
		//$lien = $this->lien ;
		
		if($mode=='error')
		{
		
		?>
		<div>Mot de passe ou nom d'utilisateur incorrect</div>
		<?php
		
		}
	?>
	
<div class="col-md-8"> 
	<form action="<?php ?>login.php" method="POST" class="form-inline well ">
		<legend class="legend">Authentification</legend>
		<hr>
	<div class="form-group">
	<label class="">email:</label><input type="text" name="email" value="" class="form-control">
	<label>Mot de passe:</label><input type="password" name="password" class="form-control" value="">
	<input type="hidden" name="operation" value="exeLogin">
	<input type="submit" class="btn-primary btn" value="valider">
	</div>
	</form>
	<div>
	Si vous n'êtes pas encore  enrégisté vous pouvez <a href="signin.php">Créer un compte en cliquant sur ce lien</a>
	
	</div>
</div>
	
	<?php
	}
	
	public function  printSigninForm()
	{
	
	
		//$lien = $this->lien ;
		
		
	?>
	<form method="post" id="signupForm" class="formMedium lap proceed" action="signin.php" data-genericError="Un problème est survenu. Réessayez ou contactez le Service clientèle." ><h2 id="accountSignupMessage" class="subheaderText">Créez des identifiants de connexion</h2>
		<div class="row-fluid">
			<div class="textInput emailaddress spa12">
				<label for="emailAddress" class="accessAid">Adresse email</label>	
<input id="email"name="email"type="email"class="hasHelp validate"value=""		autocomplete=	"off"	placeholder=	"Adresse email"	maxlength="127"	/>			</div>
		</div>
		<div id="passwordSection" class="row-fluid ">
			<div class="textInput password enterPassword span6">
			<label for="password" class="accessAid">Mot de passe</label>	<input id="password"name="password"type="password"class="hasHelp validate"value=""		autocomplete=	"off"			placeholder=	"Mot de passe"				maxlength=		"20"		/>
			</div>
			<div class="textInput password confirmPassword span6">
				<label for="reenterPassword" class="accessAid">Confirmez le mot de passe</label>	<input id="confirmPassword"name="confirmPassword"type="password"class="hasHelp validate"value=""		autocomplete=	"off"			placeholder=	"Confirmez le mot de passe"				maxlength=		"20"		/>
			</div>
		</div>
		<div id="businessContactDetails"><h2 class="subheaderText"> Informations sur votre société</h2>
			<div class="row-fluid " id="businessContact">
				<div class="textInput firstName span6">
					<label for="legalFirstName" class="accessAid">Prénom</label><input id="legalFirstName"name="legalFirstName"type="text"class="hasHelp validate"value=""		autocomplete=	"off"			placeholder=	"Prénom du représentant"			autocapitalize=	"off"	/>	
				</div>
				<div class="textInput lastName span6">
					<label for="legalLastName" class="accessAid">Nom</label><input id="legalLastName"name="legalLastName"type="text"class="hasHelp validate"value=""		autocomplete=	"off"			placeholder=	"Nom du représentant"			autocapitalize=	"off"	/>
				</div>
			</div>
			<div class="clearfix" id="businessNameNumber">
				<div class="row-fluid">
					<div class="textInput businessName span12">
						<label for="businessName" class="accessAid">Dénomination sociale</label>	<input id="businessName"name="businessName"type="text"class="hasHelp validate"value=""	placeholder="Dénomination sociale"		/>
					</div>
				</div>
					<div class="businessPhoneFields row-fluid">
					<div class="textInput phoneNumber span12 phoneCountryCode">
							<label for="businessPhone" class="accessAid">Indicatif</label>
							<?php  
								//$this->generCountryCode() ;
							?>
							<select name="countryCode"><select/>
						</div>
						<div class="textInput phoneNumber span12 phoneCountryCode">
							<label for="businessPhone" class="accessAid">N° professionnel</label><input id="businessPhone"name="businessPhone"type="text"class="hasHelp validate phoneNumberField"required="required" aria-required="true"value=""		placeholder=	"N° professionnel"	maxlength="14"	/>
						</div>
						<div class="textInput phoneNumber span12 phoneCountryCode">
							<label for="secondBusinessPhone" class="accessAid">N° professionnel secondaire</label><input id="secondBusinessPhone"name="secondBusinessPhone"type="text"class="hasHelp validate phoneNumberField"required="required" aria-required="true"value=""		placeholder=	"N° professionnel"	maxlength="14"	/>
						</div>
						
					</div>
			</div>
			<div class="clearfix" id="businessAddress" aria-expanded="true">	
				<div class="row-fluid">
					<div class="textInput span12 streetAddress">
						<label for="businessAddressStreet1" class="accessAid">Adresse postale (pas de boîte postale)</label>	<input id="businessAddress"name="businessAddress"type="text"class="hasHelp validate"required="required" aria-required="true"value=""		autocomplete=	"off"			placeholder=	"Adresse de l'entreprise"				autocorrect=	"off"			autocapitalize=	"off"	/>
					</div>
				</div>
				<div class="row-fluid">
					<div class="textInput span6 zip postalCode">
						<label for="businessAddressZip" class="accessAid">Code postal</label>	<input id="businessAddressZip"name="businessAddressZip"type="text"class="hasHelp validate"required="required" aria-required="true"value=""		autocomplete=	"off"			placeholder=	"Code postal"				autocorrect=	"off"			autocapitalize=	"off"				pattern=		"[A-z0-9]*"					maxlength=		"9"		/>
					</div>
					<div class="textInput span6 createCityWrap">
						<input id="businessAddressCity"name="businessAddressCity"type="text"class="hasHelp validate"required="required" aria-required="true"value=""		autocomplete=	"off"			placeholder=	"Ville"				autocorrect=	"off"			autocapitalize=	"off"	/><label for="businessAddressCity" class="accessAid">Ville</label>	
						
						
					</div>
				</div>
			</div>
					<input type="hidden" name="country_code" value="FR"/>
					<input type="hidden" name="operation" value="exeSignin"/>
		</div>
	<div class="createTerms challengeCheckInput checkboxInput"><p>	<input type="checkbox" class="hasHelp validate" name="agree_continue" id="agree_continue"/><span class="challengeCheckInputLabel"></span><label for="agree_continue">J'accepte et je consens aux termes des <a target="_blank" href="/fr/webapps/mpp/ua/useragreement-full">Conditions d’utilisation</a> et du <a target="_blank" href="/fr/webapps/mpp/ua/privacy-full">Règlement sur le respect de la vie privée</a>. Je consens à ce que PayPal traite et partage mes données (y compris hors de l'Espace économique européen), et communique avec moi conformément à ce règlement. Je consens également à l'emploi de méthodes de suivi de mon utilisation du site, notamment les cookies et toute technologie similaire. Pour en savoir plus sur PayPal, consultez les <a target="_blank" href="/fr/webapps/mpp/ua/servicedescription-full">Informations essentielles sur les paiements et le Service</a>.</label></p></div><button id="createContinue" class="button actionContinue" type="submit" name="_eventId_continue" value="continue">Valider et continuer</button><input type="hidden" name="type" id="type" value="0" /><input type="hidden" name="_csrf" value="tYIk9w7BtgETnQ/ugo15MG6CfA438N4yD8a8M=" /></form>

	
	<?php
	}
	public function _footer()
	{
		?>
		<style type="text/css">
  

/*step 2*/
#hover2 img{
     background:linear-gradient(#90C, #0e1111);
}
#hover2 img{
     background: #0e1111;
     transition: background 0s;
     color:lightgray;
     font-family:;
     font-size:%;
}

#hover2 img:hover{
     background:#f07303;
     color:white;
     border-radius: 7px;
     transition: background 10s;
     transition : color 0.3s ; 
  -moz-transition : color 0.3s ; 
  -webkit-transition : color 0.3s ;
}
#hover2 img:first-child{
     border-radius:px;
}

#hover2 img:last-child{
     border-radius: 5px 5px 5px 5px;
}

/*step 3*/
#hover3 img{
     background:linear-gradient(#90C, #0e1111);
}
#hover3 img{
     background: #0e1111;
     transition: background 0s;
     color:lightgray;
     font-family:;
     font-size:%;
}

#hover3 img:hover{
     background:orange;
     color:white;
     border-radius: 7px;
     transition: background 10s;
     transition : color 0.3s ; 
  -moz-transition : color 0.3s ; 
  -webkit-transition : color 0.3s ;
}
#hover3 img:first-child{
     border-radius:px;
}

#hover3 img:last-child{
     border-radius: 5px 5px 5px 5px;
}
/*step 4*/
#hover4 img{
     background:linear-gradient(#90C, #0e1111);
}
#hover4 img{
     background: #0e1111;
     transition: background 0s;
     color:lightgray;
     font-family:;
     font-size:%;
}

#hover4 img:hover{
     background:#005DAB;
     color:white;
     border-radius: 7px;
     transition: background 10s;
     transition : color 0.3s ; 
  -moz-transition : color 0.3s ; 
  -webkit-transition : color 0.3s ;
}
#hover4 img:first-child{
     border-radius:px;
}

#hover4 img:last-child{
     border-radius: 5px 5px 5px 5px;
}

/*step 4*/
#hover5 img{
     background:linear-gradient(#90C, #0e1111);
}
#hover5 img{
     background: #0e1111;
     transition: background 0s;
     color:lightgray;
     font-family:;
     font-size:%;
}

#hover5 img:hover{
     background:#43a047;
     color:white;
     border-radius: 7px;
     transition: background 10s;
     transition : color 0.3s ; 
  -moz-transition : color 0.3s ; 
  -webkit-transition : color 0.3s ;
}
#hover5 img:first-child{
     border-radius:px;
}

#hover5 img:last-child{
     border-radius: 5px 5px 5px 5px;
}

/*step 6*/
#hover6 img{
     background:linear-gradient(#90C, #0e1111);
}
#hover6 img{
     background: #0e1111;
     transition: background 0s;
     color:lightgray;
     font-family:;
     font-size:%;
}

#hover6 img:hover{
     background:#ff1744;
     color:white;
     border-radius: 7px;
     transition: background 10s;
     transition : color 0.3s ; 
  -moz-transition : color 0.3s ; 
  -webkit-transition : color 0.3s ;
}
#hover6 img:first-child{
     border-radius:px;
}

#hover6 img:last-child{
     border-radius: 5px 5px 5px 5px;
}

/*step 7*/
#hover7 img{
     background:linear-gradient(#90C, #0e1111);
}
#hover7 img{
     background: #0e1111;
     transition: background 0s;
     color:lightgray;
     font-family:;
     font-size:%;
}

#hover7 img:hover{
     background:#023fc8;
     color:white;
     border-radius: 7px;
     transition: background 10s;
     transition : color 0.3s ; 
  -moz-transition : color 0.3s ; 
  -webkit-transition : color 0.3s ;
}
#hover7 img:first-child{
     border-radius:px;
}

#hover7 img:last-child{
     border-radius: 5px 5px 5px 5px;
} 

/*step 8*/
#hover8 img{
     background:linear-gradient(#90C, #0e1111);
}
#hover8 img{
     background: #0e1111;
     transition: background 0s;
     color:lightgray;
     font-family:;
     font-size:%;
}

#hover8 img:hover{
     background:#cc0000;
     color:white;
     border-radius: 7px;
     transition: background 10s;
     transition : color 0.3s ; 
  -moz-transition : color 0.3s ; 
  -webkit-transition : color 0.3s ;
}
#hover8 img:first-child{
     border-radius:px;
}

#hover8 img:last-child{
     border-radius: 5px 5px 5px 5px;
}
</style>
<footer class="page-footer" style="background-color:#0f0f0f;">
          
          <div class="footer-copyright" style="background-color:#0d0c0c;">
            <div class="container" style="width:90%;">
            © 2017 Copyright
            <a class="grey-text text-lighten-4 right" href="#!">designed by penepene</a>
            </div>
          </div>

             <!-- newsletter -->
              <!--   <div id="modal0" class="modal">
                  <div class="modal-content">
                  <img src="img/newslette.png" style="width:100%;position:fixed;top:0px;left:0px">
                  <br>
                  <br>
                  <br>
                  <br>
                   
                    
                  </div>
                </div> -->
                
              <!-- lecture -->
         
              <!-- fin lecture -->

            <!-- /newsletter -->

        </footer>
		<?php
	}
	public function fixDivScript($donnees)
	{
		if(!(isset($donnees['root'])))
		$root = '/pene_sms/' ;
		else
		$root = $donnees['root'] ;
		
	?>
	<script src="<?php echo $root ;   ?>ressources/assets/js/docs.min.js"></script>
	<script src="<?php echo $root ;   ?>ressources/assets/js/jquery.js">
			
		</script>
		<script src="<?php echo $root ;   ?>ressources/assets/js/bootstrap.min.js">
			
		</script>
		
		<?php
	
	}
	
	
	
}
?>