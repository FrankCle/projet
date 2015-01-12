<?php

class Suivi{
	public static function ajout(){

		if(isset($_POST['suivi'])){
			$envoi = $_POST['commentaire'];
			
			//Appelle de la function dans la classe pour connexion a la bdd
			Connexion::connecter();
			
			$res = Connexion::$bdd->prepare('INSERT INTO suivi (commentaire) VALUES ("'.$envoi.'");');
			$res->execute();
			
			//Déconnexion de la bdd pour sécurisé
			Connexion::deconnecter();
			
			//condition?>
			<script>
				window.location.replace("http://localhost/projet/suivi.php");
			</script>
			<?php echo('<p style="color:green">Commentaire ajouté</p>');
		}
		else {
			echo('<p style="color:red">Il n\'y a rien de rempli</p>');
		}
	}

//essaye
	public static function afficher(){
	
		Connexion::connecter();
		
		$res = Connexion::$bdd->prepare('SELECT * FROM suivi ORDER BY id Limit 0, 20');
		$res->execute();
			
		//Déconnexion de la bdd pour sécurisé
		Connexion::deconnecter();
		
		
		// les résultats  sont retournés dans un liste
		$ligneSuivi = array();
		
		//la boucle while affiche la liste des commentaires
		while($ligne = $res->fetch(PDO::FETCH_ASSOC)) {
			$uneLigneSuivi = new construct_Suivi($ligne['id'], $ligne['commentaire']);
			$ligneSuivi[] = $uneLigneSuivi;
		}
		return $ligneSuivi;		
		
	}
	
}
?>