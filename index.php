<?php
include"scripts/connexion.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"  href="style/style.css" type="text/css" />
	<title>Accueil</title>
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
		
		<?php connexion();
		?>
		
		</form>
		</div>
		<style type="text/css">
			#logo{
				margin-left:-10%;
			}
		</style>
	</div>
	
	<?phpsession();?>
	
	<img src="style/images/barre.png" style="margin-top:5%;"/>
	
	<div id="choix">
		<ul id="sliding-navigation">
			<li class="sliding-element"><a href="index.php">Index</a></li>
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

	<section id="cadre" class="cadre">
		<p class="cadre" >Bonjour, Mon nom est Frank Clemenceau, </br>
		je suis élève en SIO 2em année et Nelka est mon portfolio</br>
		</p>
	</section>
	<style type="text/css">
		#cadre{
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
	
	<style type="text/css">
	#presentation{
		font-size:20px;
		color:white;
		text-align:center;
		padding-top:7%;
		margin-left:20%;
	}
	</style>
	<section id="presentation">
		<p>
		J'ai 20ans et je suis né le 25 mars 1994 à Nancy en France.</br>
		</br>
		Je suis élève en SIO(Systeme Informatique Organisation), j'essaye d'être auto didacte,</br>
		j'aime créer, concervoir et animer. </br>
		</br>
		Mes domaines d'expertise se situe vers le web et le graphisme.</br>
		J'aime se que je fais bien que je m'arrache les cheveux en essayant de m'ameliorer.
		</p>
	</section>
	
	<?php
	if (isset($_SESSION['login'])AND  $_SESSION['login']!= ''){
			print ("<p style=\"color:red; margin-left:50%;\">ConnectÃ©</p>");
	}

	?>
	
	
	
	
</body>
</html>