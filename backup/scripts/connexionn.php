<?php
	$idconn = mysqli_connect('localhost','root','');
	mysqli_select_db($idconn, 'portfolio');
	

function connexion(){

// Definition des constantes et variables
	define('LOGIN','prof');
	define('PASSWORD','profadmin');
	$errorMessage = '';
// Test de l'envoi du formulaire
	if(!empty($_POST)){
		// Les identifiants sont transmis ?
		if(!empty($_POST['login']) && !empty($_POST['pass'])){
			// Sont-ils les mêmes que les constantes ?
			if($_POST['login'] !== LOGIN){
			$errorMessage = 'Mauvais login !';
			}
		elseif($_POST['pass'] !== PASSWORD){
		$errorMessage = 'Mauvais password !';
		}
		else{
			// On ouvre la session
			session_start();
			// On enregistre le login en session
			$_SESSION['login'] = LOGIN;
			// On redirige vers le fichier admin.php
			header('Location:index.php');
			exit();
		}
	}
		else{
			$errorMessage = 'Veuillez inscrire vos identifiants svp !';
		}
	}
}
?>