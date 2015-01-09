<?php
class Membre{
	
	public static function connexion(){
		if(isset($_POST['go_login'])) {

			// Si les deux champs ne sont pas vides
			if(!empty($_POST['login']) && !empty($_POST['pass'])) {

				// On éxécute une requête pour détecter si le login entré existe dans la base
				Connexion::connecter();
				$res = Connexion::$bdd->prepare('SELECT * FROM membre WHERE login="'.$_POST['login'].'"');

				// Si on a un résultat => il existe
				if($res->execute() == 1) {
					$user = $res->fetch(PDO::FETCH_ASSOC);
					Connexion::deconnecter();

					if($_POST['login'] == $user['login']) {
						

						// On vérifie la concordance des mots de passe
						if($_POST['pass'] == $user['pass']) {

							// Si on arrive jusque ici c'est que le couple login / mot de passe est résolu
							// On lance donc la session
							
							$_SESSION['id'] = $user['id'];
							$_SESSION['login'] = $user['login'];
							
?>
<!--<script>
	window.location.replace("http://localhost/projet/index.php");
</script>-->		

		
<?php

						}
						else {
							echo '<div class="message-avertissement" >Mauvais mot de passe de l\'utilisateur.</div>';
						}
					}
					else {
						echo '<div class="message-avertissement" >Cet utilisateur n\'existe pas.</div>';
					}

				}
				else {
					echo '<div class="message-avertissement" >Ce login n\'existe pas dans notre base.</div>';
				}
			}
			else {
				echo '<div class="message-avertissement" >Vous devez remplir tous les champs!</div>';
			}
		}

	}
}
?>