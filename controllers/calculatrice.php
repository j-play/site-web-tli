<?php 
	require_once(_CORE_.'service/GestionCalculatrice.php');

    if(isset($_GET['operation']) && isset($_GET['operande1']) && isset($_GET['operande2'])){
		$operation = htmlentities($_GET['operation'], ENT_QUOTES, 'UTF-8');
		$operande1 = htmlentities($_GET['operande1'], ENT_QUOTES, 'UTF-8');
		$operande2 = htmlentities($_GET['operande2'], ENT_QUOTES, 'UTF-8');
		
		echo GestionCalculatrice::operationCalc($operation, $operande1, $operande2); 
	}
?>