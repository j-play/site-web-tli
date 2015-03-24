<?php

/**
 * Objet contenant les informations sur un symptome
 *
 * @author BOULAY Baptiste & Jonathan PLAY
 */
class Symptome {
    
    // Attributs
    private $_id;
	private $_desc;

    // Constructeur
	public function __construct($id, $desc)
	{
		$this->_id = $id;
		$this->_desc = $desc;     
    }
    
    
    // Getter general
    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    //Setter general
    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
		
}
	
?>