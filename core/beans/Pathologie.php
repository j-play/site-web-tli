<?php

/**
 * Objet contenant les informations sur une pathologie
 *
 * @author BOULAY Baptiste & Jonathan PLAY
 */
class Pathologie {
    
    // Attributs
    public $_id;
	public $_desc;

    // Constructeur
	public function __construct($id, $desc)
	{
		$this->_id = $id;
		$this->_desc = $desc; 
    }
		
}
	
?>