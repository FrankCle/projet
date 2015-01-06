<?php
include"scripts/connexion.php";
session_start();
?>

<?php 
	include"header.php";
?>
<div class="col-sm-9 col-md-10 affix-content" id="conteneur">
		<img id="baniere" src="img/presentation.png" style="width:105.2%;"/>
		<div class="container">
			
				<div class="page-header">
					<h1><span class="glyphicon glyphicon-bookmark"></span> Présentation</h1>
				</div>
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
		<section id="presentation">
			<p class="cadre" >Bonjour, Mon nom est Frank Clemenceau, </br>
			je suis élève en SIO(Systeme Informatique Organisation) 2em année et voici mon portfolio.</br>
			</p>
		
		
			<p>
			J'ai 20ans et je suis née le 25 mars 1994 à Nancy en France.</br>
			</br>
			J'apprend à manipuler les outils de programmation </br>
			C'est agréable de concevoir , j'aime réaliser et animer. </br>
			</br>
			Mes domaines d'expertise se situe vers le web et le graphisme.</br>
			J'aime se que je fais bien que je m'arrache les cheveux en essayant de m'ameliorer.
			</p>
		</section>
</div>

<?php 
	include"footer.php";
?>

