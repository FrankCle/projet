<?php
    class Contact{
        public static function envoi(){

            if(isset($_POST['envoyer'])){
                $envoi = $_POST['nom, email, message'];
                $date= date("Y-m-d");
                //Appelle de la function dans la classe pour connexion a la bdd
                Connexion::connecter();

                $res = Connexion::$bdd->prepare('INSERT INTO contact (nom, email, message) VALUES ("'.$envoi.'","'.$date.'");');

                $res->execute();

                //Déconnexion de la bdd pour sécurisé
                Connexion::deconnecter();

?>
