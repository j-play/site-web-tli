<?php

require_once(_CORE_.'beans/Calculatrice.php');

/**
 * Classe GestionPathologie
 *
 * @author Jonathan Play & Baptiste BOULAY 
 */
class GestionPathologie {
	
	public static function operationCalc($operation, $operande1, $operande2){

		$calculatrice = new Calculatrice();

		switch($operation){
			case 'addition' :
				return $calculatrice->addition($operande1, $operande2);
				break;
			case 'soustraction' :
				return $calculatrice->soustraction($operande1, $operande2);
				break;
			case 'division' :
				return $calculatrice->division($operande1, $operande2);
				break;
			case 'multiplication' :
				return $calculatrice->multiplication($operande1, $operande2);
				break
			default :
				break;
		}
	}
}
?>