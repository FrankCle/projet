<?php
include"script/scriptContact.php";
include"script/connexion.php";
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
		<img src="style/images/logo.png" style="margin-left:12px;width:100%; height:70%;"/>
		<style type="text/css">
			#logo{
				margin-left:-10%;
			}
		</style>
	</div>
	
	<img src="style/images/barre.png" style="margin-top:5%;"/>
	
	<div id="choix">
		<ul id="sliding-navigation">
			<li class="sliding-element"><a href="index.php">Index</a></li>
			<li class="sliding-element"><a href="tableau.html">Tableau</a></li>
			<li class="sliding-element"><a href="#">Work</a></li>
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

	<section id="contact">
		<h1 style="color:white;">Contact :</h1>
		<form id="form" method="post" action="<?php echo strip_tag($_SERVEUR['REQUEST_URL']); ?>">
			<img src="style/images/icons/user.PNG" style="display:inline-block"/><p style="display:inline-block">Vôtre nom et prénom: <input type="text" name="nom" size="30"/></p><br/>
			<img src="style/images/icons/email.PNG" style="display:inline-block"/><p style="display:inline-block">Vôtre email: <span style="color:#ff0000;">*</span>:<input type="text" name="email" size="30"/></p><br/>
			<img src="style/images/icons/edit.PNG" style="display:inline-block"/><p style="display:inline-block">Message<span style="color:#ff0000;">*</span>:</span></p><br/>
			<textarea name="message" col="60" rows="10"></textarea><br/>
			<p><input type="submit" name="submit" value="Envoyer"/></input></input></p>
		</form>
		<style type="text/css">
			#contact{
				margin-left:30%;
			}
			#form {
				color:white;
			}
		</style>
	</section>
	
</body>
</html>