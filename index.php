<?php 
	if (!isset($_GET['section']) OR $_GET['section'] == 'index'){
		include_once('lib/controleur/ctrl_accueil.php');
	}
	else if($_GET['section'] == 'patho'){
		include_once('lib/controleur/ctrl_patho.php');	
	}
?>