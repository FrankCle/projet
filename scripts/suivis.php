
<?php
class Suivi{
	public static function ajout(){
		GLOBAL $bdd;
		if(isset($_POST['suivi'])){
			$envoi = $_POST['commentaire'];
			$query = mysqli_query($bdd, "INSERT INTO suivi FROM commentaire;");
			echo('<p style="color:green">Commentaire ajouté</p>');
		}
		if($envoi == null){
			echo('<p style="color:red">Il n\'y a rien de rempli</p>');
		}
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