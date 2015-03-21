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
        echo 'inclusion controleur index.php';
    	include_once(_CTRL_.'index.php');
    }
    
    // Affichages
    $smarty->display(_TPL_ . 'header.tpl');
	
	if (isset($_GET['page']) && file_exists(_TPL_.'pages/'.str_replace('.', '', $_GET['page']).'.tpl')){
        $smarty->display(_TPL_.'pages/'.$_GET['page'].'.tpl');
    }
    else{
        $smarty->display(_TPL_ . 'pages/index.tpl');
    }
	
	$smarty->display(_TPL_ . 'footer.tpl');
?>