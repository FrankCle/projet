<?php
	$idconn = mysqli_connect('localhost','root','');
	mysqli_select_db($idconn, 'portfolio');
	
	
	function connexion(){
		
		GLOBAL $idconn;
		if (isset($_POST['submit'])){
			$login=$_POST['login'];
			$pass=$_POST['pass'];
			if($login&&$pass){
			 
				$reg=mysqli_query($idconn, "SELECT * FROM connexion WHERE login='$login'");
				
				$result=mysqli_fetch_array($reg);
				if(mysqli_num_rows($reg) ==1) {
					if($result['pass']==$pass){
						$_SESSION['login']=$login;
					}
					else{
						echo("mots de passe mauvais");
					}
				}
			}
			else {
				echo("<p style='color:red';>Login mauvais </p>");
			}
		}
		else{
			print("<p style='color:red';>Veillez saisir tous les champs merci</p>");
		}
		}
	
?>