<?php
/**
 * Objet Calculatrice
 *
 * @author BOULAY Baptiste & Jonathan PLAY
 */
class Calculatrice {
	
	// Constructeur
	public function __construct(){
		
	}
	
	// Fonctions
	public function addition($operande1, $operande2){
		return $operande1 + $operande2;
	}
	
	public function soustraction($operande1, $operande2){
		return $operande1-$operande2;
	}
	
	public function division($operande1, $operande2){
		if($operande2 === 0){
			return -1;
		}
		else{
			return $operande1/$operande2;
		}
	}
	
	public function multiplication($operande1, $operande2){
		return operande1*operande2;
	}
}
	
?>