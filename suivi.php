
<?php 
	include"header.php";
?>
	
<div class="col-sm-9 col-md-10 affix-content" id="conteneur">
	<img id="baniere" src="img/suivi.png" style="width:105.2%;"/>
	
	<div class="container">
		<div class="page-header">
			<h1><span class="glyphicon glyphicon-flag"></span> Suivis d'activités</h1>
			<br>
		</div>
		<section id="presentation">
			<h2>Récapitulatif</h2>
			<ul style="list-style-type:none" >
				<?php
					$Commentaires = Suivi::afficher();
					
						foreach($Commentaires as $Commentaire){
							echo '<li class="commentaire" id="commentaire-'.$Commentaire->id.'">
										<div class="date">
											'.date("d/m", $Commentaire->date).'
											 
										</div>
										<div class="comm">
											'.$Commentaire->commentaire.'
										</div>				
								  </li>
							';
						}
					
				?>
			</ul>
			<br>
		<?php
			Suivi::ajout();
			if(isset($_SESSION["login"])){
				echo'<div id="ajoutcomm">
						<form method="POST" action="'.$_SERVER['PHP_SELF'].'">
							<textarea id="commentaire" name="commentaire" rows="10" cols="70" style="color:black; width:100; position:fixed" placeholder="Saisir un texte ici."></textarea>
							<br>
							<input type="submit" name="suivi" id="suivi" value="Ajouter" style="float:right;">
						</form>
					</div>';
			}
		?>
			
		</section>
	</div>
</div>

<?php 
	include"footer.php";
?>