<?php
include"scripts/connexion.php";
include"scripts/suivi.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"  href="style/style.css" type="text/css" />
	<title>Contact</title>
	<script type="text/javascript" src="scr/jquery.js"></script>
	<script type="text/javascript" src="scr/sliding_effect.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" /> 

</head>
<body>
	<section id="colone">
		<div id="logo">
			<a href="#overlay" ><img src="style/images/logo.png" style="margin-left:12px;width:100%; "/></a>
			<div id="overlay">
			<form class="connexion" action="suivi.php" method="post">
				<legend>Connexion</legend>
				<p>
					<label>Login</label for="username"> : <input id="login" type="text" name="login" /><br/>
					<label>Mots de passe</label for="password"> : <input id="pass" type="password" name="pass"/>
				</p>
				<input type="submit" name="submit" value="Connection" action="" />
			</form>
			<?php connexion();
			?>
			</div>
		</div>
	
		<img src="style/images/barre.png" style="margin-top:5%;"/>
	
		<div id="choix">
			<ul id="sliding-navigation">
				<li class="sliding-element"><a href="index.html">Index</a></li>
				<li class="sliding-element"><a href="tableau.html">Tableau</a></li>
				<li class="sliding-element"><a href="work.html">Work</a></li>
					<ul class="sliding-element">
						<li class="sliding-element"><a href="#">1er annÃ©e</a></li>
							<ul>
								<li class="sliding-element"><a href="stage1">CHUBordeaux(stage)</a></li>
							</ul>
						<li class="sliding-element"><a href="#">2em annÃ©e</a></li>
							<ul>
								<li class="sliding-element"><a href="stage2">WebHera(stage)</a></li>
								<li class="sliding-element"><a href="projet1">FreeFly(projet)</a></li>
							</ul>
					</ul>
				<li class="sliding-element"><a href="contact.html">Contact</a></li>
			</ul>
		</div>
	</section>
	
	<style type="text/css">
		#colone{
			position:fixed;
			width : 208px;
			height:100%;
			color: white;
			z-index:8;
		}
		#choix {
			margin-top:20%;
			font-size:8px;
		}
	
		
	</style>
	
	<style type="text/css">
		#effectuer{
			background-image:url(style/images/cadre.jpg);
			padding-top:6%;
			padding-left:20%;
			font-size:40px;
			text-align:center;
			border:1px solid #1337F8;
			width:81.8%;
			color:white;
			box-shadow: 0px 48px 100px 100px rgba(2, 47, 213, 0.68);
			-moz-box-shadow: 0px 48px 100px 100px rgba(2, 47, 213, 0.68);
			-webkit-box-shadow: 0px 48px 100px 100px rgba(2, 47, 213, 0.68);
		}
	</style>
	<section id="effectuer">
		<h3>Suivis des activités :</h3>
	</section>
	
	<style type="text/css">
		#suivis{
			
		
		}
	</style>
	<section id="suivis">
		<?php function afficher();
		?>
	
	</section>
	
	<style type="text/css">
		#ajout{
			margin-top:3%;
			display:none;
			position:fixed;
			width:50%;
			height:50%;
			margin-left:32%;
			border:solid 1px black; 
			background-color:blue;
			z-index:100;
		}
		#ajout:target{
			display:block;
		}
	</style>
	<div id="ajout">
	<h1 style="color:white; margin-left:3%;">Ajouter un commentaire :</h1>
		<form  action="suivis.php" method="post">
			<textarea name="commentaire" col="100" rows="20" style="margin-left:20%; width:55%;"></textarea></br>
			<input type="envoi" name="com" value="Envoyer" style="float:right; margin-right:3%; margin-top:2%;"/>
		
		</form>
		<?php function ajout();
		?>
	</div>
	
	<?php
	if (isset($_SESSION['login'])AND  $_SESSION['login']!= ''){
			print ("<div id=\"connect\" style=\"background-color:black; float:right;\"><a href=\"#ajout\"style=\"color:red\">Connecter</a></div>");
	}
	?>
		
</body>
</html>