<?php 
	$days = $inscritMan->getDayBeforeNextRestart();
	$isInscrit = $inscritMan->getInfoInscrit($_SESSION[idFacebook]);
 ?>

<div class="navbar navbar-fixed-top navbar-inverse">
	<div class="navbar-inner">
		<ul class="nav">
		  <li><a href="fangate.php">Accueil</a></li>
		  <li><a href="play.php?redirect=true">Jouer</a></li>
		  <?php if($isInscrit != NULL) echo '<li><a href="code.php">Saisir un code</a></li>'; ?>		 
		  <li><a href="yopGoyave.php">YOP Goyave !</a></li>
		  <!-- Affiche le lien au classement pour les personnes inscrites en base -->
		  <?php if($isInscrit != NULL) echo '<li><a href="classement.php">Classement</a></li>'; ?>
		  <li><a href="leslots.php">Les lots</a></li>
		</ul>
	</div>
</div>

<div class="navbar navbar-inner navbar-inverse">
	<div class="navbar-inner">
	  <ul class="nav">
	  	  <li><a href="commentjouer.php">Comment jouer</a></li>
		  <li><a href="https://dl.dropboxusercontent.com/u/85199385/ReglementYopNeverStopEditionGoyave.pdf" target="_blank">Règlement</a></li>
		   <?php if($isInscrit != NULL) echo '<li><a href="mesinfos.php">Mes infos</a></li>'; ?>
		  <li><a href="#">Prochain tirage au sort dans <?php echo $days; ?> jours</a></li>
		</ul>
	</div>
</div>