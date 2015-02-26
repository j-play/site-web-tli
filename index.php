<?php 

	// Initialisation de l'environnement
	include_once('./config/config_init.php');
	
	// Gestion de Routing
	/*if (isset($_GET['action']) && file_exists(_CTRL_.'action/'.str_replace('.', '', $_GET['action']).'.php'))
    	include(_CTRL_.'action/'.$_GET['action'].'.php');*/

	if(isset($_GET['page']) && file_exists(_CTRL_.str_replace('.', '', $_GET['page']).'.php')){
    	include_once(_CTRL_.$_GET['page'].'.php');
    }
	else {
    	include_once(_CTRL_.'index.php');
    }
?>