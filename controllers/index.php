<?php 
	$smarty->display(_TPL_ . 'header.tpl');
	
	if (isset($_GET['page']) && file_exists(_TPL_.'pages/'.str_replace('.', '', $_GET['page']).'.tpl')){
        $smarty->display(_TPL_.'pages/'.$_GET['page'].'.tpl');
    }
    else{
    	echo 'test';
        $smarty->display(_TPL_ . 'pages/index.tpl');
    }
	
	$smarty->display(_TPL_ . 'footer.tpl');
?>