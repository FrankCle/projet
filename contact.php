<?php
include"scripts/connexion.php";
session_start();
?>

<?php 
	include"header.php";
?>
<div class="col-sm-9 col-md-10 affix-content" id="conteneur">
		<div class="container">
			
				<div class="page-header">
					<h1><span class="glyphicon glyphicon-upload"></span> Contact</h1>
				</div>
				<form id="formulaire" method="post" action="">
					<p style="display:inline-block; padding-left:1%"><span class="glyphicon glyphicon-user"></span> Vôtre nom et prénom: <input type="text" name="nom" size="30"/></p></br>
					<p style="display:inline-block; padding-left:1%"><span class="glyphicon glyphicon-envelope"></span> Vôtre email: <span style="color:#ff0000;">*</span>:<input type="text" name="email" size="30"/></p></br>
					<p style="display:inline-block; padding-left:1%"><span class="glyphicon glyphicon-pencil"></span> Message<span style="color:#ff0000;">*</span>:</span></p>
					<textarea name="message" col="60" rows="10" ></textarea>
					<p><input type="submit" name="submit" value="Envoyer" style="float:right; margin-right:5%;"/></p>
				</form>
				
				<div id="info">
					<p>Frank Clemenceau<br/>
					83 Av Bon Air<br/>
					33700 MERIGNAC
					</p>
					<p>
					frankcle16@gmail.com<br/>
					+33 6 48 47 59 34
					</p>
					<hr style=" width:45%; align:right; color:white; margin-left:-2%;"/>
					<img src="img/map.png" style="width:40%; "/>
					<hr style=" width:45%; align:right; color:white;  margin-left:-2%;"/>
					<p>
					viadeo<br/>
					linkedin<br/>
					Jobijoba
					</p>
				</div>
				
		</div>
		<div id="conteneur">
		
		</div>
		
		
		
<?php 
	include"footer.php";
?>
