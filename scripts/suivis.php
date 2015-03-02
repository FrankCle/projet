<?php

class Suivi{
	public static function ajout(){

		if(isset($_POST['suivi'])){
			$envoi = $_POST['commentaire'];
			$date= date("Y-m-d");
			//Appelle de la function dans la classe pour connexion a la bdd
			Connexion::connecter();
			
			$res = Connexion::$bdd->prepare('INSERT INTO suivi (commentaire, date) VALUES ("'.$envoi.'","'.$date.'");');
			
			$res->execute();
			
			//Déconnexion de la bdd pour sécurisé
			Connexion::deconnecter();
			
			//condition
			?>
			<script>
                window.location.replace("http://portfolionelka.esy.es/suivi.php");
			</script>
			<?php
			
			echo('<p style="color:green">Commentaire ajouté</p>');
		}
	}


	public static function afficher(){
	
		Connexion::connecter();
		
		$res = Connexion::$bdd->prepare('SELECT * FROM suivi ORDER BY id DESC Limit 0, 5');
		$res->execute();
			
		//Déconnexion de la bdd pour sécurisé
		Connexion::deconnecter();
		
		
		// les résultats  sont retournés dans un liste
		$ligneSuivi = array();
		
		//la boucle while affiche la liste des commentaires
		while($ligne = $res->fetch(PDO::FETCH_ASSOC)) {
			$uneLigneSuivi = new construct_Suivi($ligne['id'], $ligne['commentaire'],  strtotime($ligne['date']));
			$ligneSuivi[] = $uneLigneSuivi;
		}
		return $ligneSuivi;		
		
	}
	
}
?>