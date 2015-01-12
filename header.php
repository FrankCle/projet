<?php
	session_start();
	require_once "scripts/connexion.php";
	require_once "scripts/construct.php";
	require_once "scripts/membre/membre.php";
	require_once "scripts/suivis.php";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Portfolio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
       
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
		
		<link rel="stylesheet" type="text/css" href="backup/connexion/css/style.css" />
		<script src="backup/connexion/js/modernizr.custom.63321.js"></script>
		
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  
		
				<?php
				if(isset($_SESSION["login"])){
					echo'<a href="deconnexion.php" style="color:white;">DECONNEXION</a>';
				}
				else {
				
				Membre::connexion();
				
				echo'
				<form class="form-3" method="POST" action="'.$_SERVER['PHP_SELF'].'" id="form-co">
				    <p class="clearfix">
						<label for="login">Nom d\'utilisateur</label>
				        <input type="text" name="login" id="login" placeholder="Username">
				    </p>
				    <p class="clearfix">
						<label for="password">Mots de passe</label>
				        <input type="password" name="pass" id="pass" placeholder="Password"> 
				    </p>
				    <p class="clearfix">
				        <input type="checkbox" name="remember" id="remember">
						<label for="remember">Se souvenir</label>
				    </p>
				    <p class="clearfix">
						<input type="submit" name="go_login" id="go_login" value="Connexion" >
				    </p> 
				</form>​';
				}
				?>
		
	
</div>
	<div class="row affix-row">
		<div class="col-sm-3 col-md-2 affix-sidebar">
			<div class="sidebar-nav">
				<div class="navbar navbar-default" role="navigation">
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
					  <span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  </button>
					  <span class="visible-xs navbar-brand">Menu slide</span>
					</div>
    <div class="navbar-collapse collapse sidebar-navbar-collapse">
      <ul class="nav navbar-nav" id="sidenav01">
        <li class="active">
         
			<img src="img/logo.png" class="logo" data-toggle="modal" data-target="#myModal"/>
         
          
        </li>
		 <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Index</a></li>
		<li class="active">
          <a href="#" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed">
          <span class="glyphicon glyphicon-inbox"></span> Première Année <span class="caret pull-right"></span>
          </a>
          <div class="collapse" id="toggleDemo" style="height: 0px;">
			<ul class="nav nav-list" id="ssmenu">
              <li><a href="chu.php"><span class="glyphicon glyphicon-plus"></span> Stage - CHU Bordeaux</a></li>
            </ul>
          </div>
        </li>
        <li class="active">
          <a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed">
          <span class="glyphicon glyphicon-inbox"></span>  Deuxième Année <span class="caret pull-right"></span>
          </a>
          <div class="collapse" id="toggleDemo2" style="height: 0px;">
			<ul class="nav nav-list" id="ssmenu">
              <li><a href="freefly.php"><span class="glyphicon glyphicon-cloud"></span>  PPE - FreeFly</a></li>
              <li><a href="keke.php"><span class="glyphicon glyphicon-glass"></span>  Stage - Kekette</a></li>
            </ul>
          </div>
        </li>
       
        <li><a href="tableau.php"><span class="glyphicon glyphicon-tasks"></span> Tableau </a></li>
        <li><a href="suivi.php"><span class="glyphicon glyphicon-flag"></span> Suivis </a></li>
        <li><a href="contact.php"><span class="glyphicon glyphicon-user"></span> Contact</a></li>
      </ul>
			</div><!--/.nav-collapse -->
		</div>
		</div>
	</div>
	

			
			