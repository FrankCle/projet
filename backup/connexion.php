<?php
	class Connexion{
		public static $bdd;
	 
		public static function connecter(){
			//info de la db
			$dsn = "mysql:host=localhost;dbname=portfolio";
			$user = "root";
			$pass = "ForgetHeart";
			try{
			self::$bdd = new PDO($dsn, $user, $pass);
			self::$bdd->exec("SET CHARACTER SET utf8");
			}
			catch(Exeption $e) {
				echo 'Erreur :'.$e->getMessage().'<br>';
				echo 'Numero :'.$e->getCode();
			}
		}
		public static function deconnecter(){
			$bdd = NULL;
	
		}
	
	}		
?>

