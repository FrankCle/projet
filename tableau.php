<?php
include"scripts/connexion.php";
session_start();
?>

<?php 
	include"header.php";
?>
	
<div class="col-sm-9 col-md-10 affix-content" id="conteneur">
		<img id="baniere" src="img/tableau.png" />
		
		<div class="container">
			<div class="page-header">
				<h1><span class="glyphicon glyphicon-tasks"></span> Tableau</h1>
			</div>
			<section id="main">
				<form class="form-3">
				    <p class="clearfix">
						<label for="login">Nom d'utilisateur</label>
				        <input type="text" name="login" id="login" placeholder="Username">
				    </p>
				    <p class="clearfix">
						<label for="password">Mots de passe</label>
				        <input type="password" name="password" id="password" placeholder="Password"> 
				    </p>
				    <p class="clearfix">
				        <input type="checkbox" name="remember" id="remember">
						<label for="remember">Se souvenir</label>
				    </p>
				    <p class="clearfix">
						<input type="submit" name="submit" value="Connexion" action="">
				    </p> 
					<?php 
					connexion();
					?>
				</form>​
			</section>	
		</div>
	<iframe id="tableau" src="img/tableau.pdf"  align="middle" style="height:60em;"></iframe>
</div>
		
	

<?php 
	include"footer.php";
?>