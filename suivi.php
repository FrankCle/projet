
<?php 
	include"header.php";
	include"scripts/suivis.php";
?>
	
<div class="col-sm-9 col-md-10 affix-content" id="conteneur">
		<img id="baniere" src="img/suivi.png" style="width:105.2%;"/>
		
		<div class="container">
			<div class="page-header">
				<h1><span class="glyphicon glyphicon-flag"></span> Suivis d'activités</h1>
			</div>
		<section id="presentation">
			<h2>Récapitulatif</h2>
		<?php
			echo'<section id="presentation">
					<div class="date>
					</div>
					
					<div class="comm">
					</div>
					
				</section>'
		?>
			
		<?php
			
			echo '<div id="ajoutcomm">
					<form method:"POST" action="ajout">
						<textarea id="comm" name="comm" rows="10" cols="70">Saisir un texte ici.</textarea>
						<br>
						<input type="submit" name="suivi" id="suivi" value="Ajouter" style="float:right;">
					</from>
				</div>';
		?>
			
		</section>
		</div>
	

<?php 
	include"footer.php";
?>