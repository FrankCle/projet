<?php 
//s'il y a des données de postées
if ($_SERVER['REQUEST_METHOD']=='POST'){

	//1 - code php pour traiter l'envoi du mail
	
	//recuperation des variables et sécurisation des données
	$nom 	=htmlentities($_POST['nom']); //htmlentities convertit les caractère spéciaux en équivalent html
	$email	=htmlentities($_POST['email']);
	$message	=htmlentities($_POST['message']);
	
	//variable concernant l'email
	$destinataire	='frankcle16@gmail.com'; //mon adresse mail
	$sujet 			= 'Titre du message'; //titre de l'email
	$contenu		='<html><head><title>Titre du message</title></head><body';
	$contenu 		.= '<p>bonjours, vous avez recu un message à partie de votre site web.</p>';
	$contenu 		.= '<p><strong>Nom</strong>: '.$nom.'</p>';
	$contenu		.= '<p><strong>Email</strong>: '.$email.'</p>';
	$contenu		.= '<p><strong>Message</strong>: '.$nmessage.'</p>';
	$contenu		.= '</body></html>'; //contenu du message de l'email (en XHTML)
	
	//pour envoyer l'email HTML, l'en-tête contente-type doit être défini
	$headers = 'MIME-Version : '."\r\n";
	$headers .= 'Content-Type: text/html;  charset=iso-8859-1'."\r\n";
	
	//envoyer l'email
	mail($destinaire, $sujet, $contenu, $headers); //fonction principale qui envoi l'email
	echo '<h2>Message Envoyé!</h2>'; //affichier un message pour indique que l'email à bien était envoyer
}

//s'il y a des données de postées
if($_SERVER['REQUEST_METHOD']='POST'){
	//code PHP pour traiter l'envoi de l'email
	
	$nombreErreur =0; //variable qui compte le nombre d'erreur
	//définit toutes les erreurs possibles
	if (!isset($_POST['email'])){//si la variable "email" du formulaire n'existe pas (il y a un probleme)
		nombreErreur++; //on incrémente la variable qui comptes les erreurs
		$erreur1 = '<p>Il y a un problème avec la variable "email".</p>';
	}
	else {//sinon cela signifie que la variable existe (c'est normal)
	if (empty($_POST['email'])){//si la variable est vide
	$nombreErreur++; //on incrémente la variable qui compte les erreurs
	$erreur2 = '<p>Vous avez oublier de donner votre email.</p>';
	}
	else {
	if (!filter_var($_POST['emil'], FILTER_VARIABLE_EMAIL)){
		$nombreErreur++; //on incrémente la variable
		$erreur3 = '<p>Cet email ne ressemble pas un email.</p>';
	}
	}
	}
	
	if (!isset($_POST['message'])){
		$nombreErreur++;
		$erreur4 = '<p>Il y a un problème avec l variable "message".</p>';
	}else{
	if(empty($_POST['message'])){
		$nombreuxErreur++;
		$erreur5 = '<p>Vous avez oublié de donner un message.</p>'
	}
	}
	if ($nombreErreur==0) {//si il n'y a pas d'erreur
		if ($_SERVER['REQUEST_METHOD']=='POST'){

		
		$nom 	=htmlentities($_POST['nom']);
		$email	=htmlentities($_POST['email']);
		$message	=htmlentities($_POST['message']);
		
		$sujet 			= 'Titre du message'; 
		$contenu		='<html><head><title>Titre du message</title></head><body';
		$contenu 		.= '<p>bonjours, vous avez recu un message à partie de votre site web.</p>';
		$contenu 		.= '<p><strong>Nom</strong>: '.$nom.'</p>';
		$contenu		.= '<p><strong>Email</strong>: '.$email.'</p>';
		$contenu		.= '<p><strong>Message</strong>: '.$nmessage.'</p>';
		$contenu		.= '</body></html>';
		
		$headers = 'MIME-Version : '."\r\n";
		$headers .= 'Content-Type: text/html;  charset=iso-8859-1'."\r\n";
		
		mail($destinaire, $sujet, $contenu, $headers); 
		echo '<h2>Message Envoyé!</h2>'; 
	}
	else{// s'il y a au moins une erreur
	echo '<div style="border:1px solid #ff0000; padding:5px;">';
	echo '<p style="color:#ff0000;">Désolé, il y a eu'.$nombreuErreur.' erreur(s). Voici le détail des erreurs :</p>';
	if (isset($erreur1)) echo '<p>'.$erreur1.'</p>';
	if (isset($erreur2)) echo '<p>'.$erreur2.'</p>';
	if (isset($erreur3)) echo '<p>'.$erreur3.'</p>';
	if (isset($erreur4)) echo '<p>'.$erreur4.'</p>';
	if (isset($erreur5)) echo '<p>'.$erreur5.'</p>';
	echo'</div>';
	}
	}
	

?>