
<?php
	function ajout(){
		GLOBAL $idconn;
		if(isset($_POST['suivi'])){
			$envoi = $_POST['comm'];
			$query = mysqli_query($idconn,"INSERT INTO suivi FROM commentaire;");
		}
		if($envoi == null){
			print("<p>Il n'y a rien de rempli</p>");
		}
	}

?>

<?php 
	function afficher(){
		$sql = mysqli_query("SELECT * FROM commentaires ORDER BY id Limit 0, 20");
		$data = mysqli_fetch_array($sql);
		echo $data['id']." ".$data["commentaires"];
	}
?>