<?php
include "scripts/connexion.php";
session_start();
?>
<?php
	function ajout(){
		GLOBAL $idconn;
		if(isset($_POST['submit'])){
			$envoi = $_POST['envoi'];
			$query = mysqli_query($idconn,"INSERT INTO commentaires FROM commentaire;");
		}
		if($envoi == null){
			print("<p>Il n'y a rien de rempli</p>");
		}
	}

?>

<?php 
	function afficher(){
		$sql = mysqli_query("SELECT * FROM commentaires ORDER BY id_comm Limit 0, 20");
		$data = mysqli_fetch_array($sql);
		echo $data['id_comm']." ".$data["commentaires"];
	}
?>